<?php


namespace Tests\Feature;

use App\Models\Linkedin;
use App\Services\LinkedInService;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class FetchLinkedInDataTest extends TestCase
{
    use RefreshDatabase;

    public function test_it_fetches_and_saves_linkedin_data_successfully()
    {
        // Arrange: Mock LinkedInService
        $mockLinkedInService = $this->mock(LinkedInService::class);

        $mockApiResponse = [
            'elements' => [
                [
                    'commentary' => 'This is a test post from LinkedIn.',
                    'publishedAt' => 1716816000000, // A timestamp in milliseconds
                    'content' => [
                        'multiImage' => [
                            'images' => [
                                ['id' => 'urn:li:image:testimage123']
                            ]
                        ]
                    ]
                ]
            ]
        ];

        $mockImageResponse = [
            'results' => [
                'urn:li:image:testimage123' => [
                    'downloadUrl' => 'https://example.com/image.jpg'
                ]
            ]
        ];

        $mockLinkedInService->shouldReceive('fetchData')
            ->once()
            ->andReturn($mockApiResponse);

        $mockLinkedInService->shouldReceive('fetchImageUrls')
            ->once()
            ->with(['testimage123'])
            ->andReturn($mockImageResponse);

        // Act: Run the command
        $this->artisan('linkedin:fetch')
            ->expectsOutput('LinkedIn data fetched and saved successfully.')
            ->assertExitCode(0);

        // Assert: Check database
        $this->assertDatabaseCount('linkedin', 1);

        $linkedin = Linkedin::first();
        $this->assertEquals('This is a test post from LinkedIn.', $linkedin->description);
        $this->assertEquals('https://example.com/image.jpg', $linkedin->image);
        $this->assertEquals('2024-05-27 16:20:00', $linkedin->published_at);
    }

    public function test_it_logs_an_error_on_exception()
    {
        Log::shouldReceive('channel->error')->once();

        // Arrange: mock LinkedInService to throw an exception
        $mockLinkedInService = $this->mock(LinkedInService::class);
        $mockLinkedInService->shouldReceive('fetchData')
            ->once()
            ->andThrow(new \Exception('Test API failure'));

        // Act: Run the command
        $this->artisan('linkedin:fetch')
            ->doesntExpectOutput('LinkedIn data fetched and saved successfully.')
            ->assertExitCode(0); // Laravel commands return 0 unless you call `exit`
    }
}
