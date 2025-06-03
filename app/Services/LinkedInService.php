<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class LinkedInService
{
    protected string $accessToken;

    public function __construct()
    {
        $this->accessToken = config('services.linkedin.token');
    }

    public function fetchData()
    {
        $response = Http::withHeaders([
            'Authorization' => 'Bearer ' . $this->accessToken,
            'Linkedin-Version' => '202505',
            'X-Restli-Protocol-Version' => '2.0.0',
        ])->get('https://api.linkedin.com/rest/posts?q=author&author=urn%3Ali%3Aorganization%3A86854077&count=9&sortBy=LAST_MODIFIED');

        if ($response->successful()) {
            return $response->json();
        }

        throw new \Exception('Linkedin API error: ' . $response->body());
    }

    public function fetchImageUrls(array $imageIds)
    {
        $filteredIds = array_filter($imageIds, fn($id) => !is_null($id) && $id !== '');

        $encodedUrns = array_map(function($id) {
            return urlencode('urn:li:image:' . $id);
        }, $filteredIds);

        $joinedUrns = implode(',', $encodedUrns);

        $paramValue = "List({$joinedUrns})";

        $response = Http::withHeaders([
            'Authorization' => 'Bearer ' . $this->accessToken,
            'Linkedin-Version' => '202505',
            'X-RestLi-Protocol-Version' => '2.0.0',
        ])->get('https://api.linkedin.com/rest/images?ids=' . $paramValue);

        if ($response->successful()) {
            return $response->json();
        }

        throw new \Exception('Linkedin API error: ' . $response->body());
    }
}
