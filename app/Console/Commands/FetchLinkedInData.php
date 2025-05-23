<?php

namespace App\Console\Commands;

use App\Models\Linkedin;
use Illuminate\Console\Command;
use App\Services\LinkedInService;
use Illuminate\Support\Str;

class FetchLinkedInData extends Command
{
    protected $signature = 'linkedin:fetch';
    protected $description = 'Fetch LinkedIn data';

    public function handle(LinkedInService $linkedin)
    {
        try {
            $data = $linkedin->fetchData();

            Linkedin::truncate();

            $imageIds = [];
            $descriptions = [];
            $publishedDates = [];

            // Collect all descriptions & image IDs (null if no image)
            foreach ($data['elements'] as $item) {
                $imageIdFull = $item['content']['multiImage']['images'][0]['id'] ?? null;
                $imageId = $imageIdFull ? Str::after($imageIdFull, 'urn:li:image:') : null;

                $imageIds[] = $imageId; // could be null
                $descriptions[] = Str::limit($item['commentary'] ?? '', 210);

                // Convert publishedAt from ms to a datetime string
                $publishedAtTimestamp = isset($item['publishedAt']) ? (int)($item['publishedAt'] / 1000) : null;
                $publishedDates[] = $publishedAtTimestamp ? date('Y-m-d H:i:s', $publishedAtTimestamp) : null;
            }

            // Filter out null IDs for batch image fetch
            $validImageIds = array_filter($imageIds, fn($id) => !is_null($id));

            // Fetch image URLs only for valid IDs
            $imageUrlsResponse = $linkedin->fetchImageUrls($validImageIds);

            // Map full urns to simple IDs for quick lookup
            $imageUrlMap = [];
            foreach ($imageUrlsResponse['results'] ?? [] as $fullUrn => $info) {
                $id = Str::after($fullUrn, 'urn:li:image:');
                $imageUrlMap[$id] = $info['downloadUrl'] ?? null;
            }

            // Save all records; if image ID is null or not found, image will be null
            foreach ($descriptions as $index => $desc) {
                $imgId = $imageIds[$index];
                $imgUrl = $imgId && isset($imageUrlMap[$imgId]) ? $imageUrlMap[$imgId] : null;
                $publishedAt = $publishedDates[$index] ?? null;

                Linkedin::create([
                    'description' => $desc,
                    'image' => $imgUrl,
                    'published_at' => $publishedAt,
                ]);
            }


            $this->info('LinkedIn data fetched and saved successfully.');
            logger($data);
        } catch (\Exception $e) {
            logger()->error('LinkedIn fetch failed: ' . $e->getMessage());
        }
    }
}
