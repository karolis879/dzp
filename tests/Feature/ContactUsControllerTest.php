<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Mail;
use Tests\TestCase;
use App\Mail\QuoteFormMail;
use App\Mail\SendUsYourCvMail;
use App\Mail\GeneralContactsMail;

class ContactUsControllerTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function it_sends_quote_email()
    {
        Mail::fake();

        $response = $this->post(route('contact_us.get_quote'), [
            'topic' => 'marketing', // Make sure this exists in config/contact_topics.php
            'email' => 'john@example.com',
            'message' => 'I need a quote for a project.',
            'name' => 'John Doe',
            'company' => 'Example Inc.',
            'country' => 'USA',
        ]);

        $response->assertRedirect();
        $response->assertSessionHas('success');

        Mail::assertSent(QuoteFormMail::class, function ($mail) {
            return $mail->hasTo(config('contact_topics.marketing'));
        });
    }

    /** @test */
    public function it_sends_cv_with_attachment()
    {
        Mail::fake();

        $file = UploadedFile::fake()->create('cv.pdf', 500, 'application/pdf');

        $response = $this->post(route('contact_us.send_cv'), [
            'email' => 'jane@example.com',
            'message' => 'Here is my CV.',
            'name' => 'Jane Smith',
            'company' => 'DevWorks',
            'country' => 'UK',
            'cv' => $file,
        ]);

        $response->assertRedirect();
        $response->assertSessionHas('success');

        Mail::assertSent(SendUsYourCvMail::class, function ($mail) use ($file) {
            return $mail->hasTo('Info@dzprojects.eu') &&
                $mail->data->attachment->getClientOriginalName() === $file->getClientOriginalName();
        });
    }

    /** @test */
    public function it_sends_general_contact_email()
    {
        Mail::fake();

        $response = $this->post(route('contact_us.general_contacts'), [
            'email' => 'mark@example.com',
            'message' => 'Just wanted to say hello.',
            'name' => 'Mark Blue',
            'company' => 'Blue Tech',
            'country' => 'Canada',
        ]);

        $response->assertRedirect();
        $response->assertSessionHas('success');

        Mail::assertSent(GeneralContactsMail::class, function ($mail) {
            return $mail->hasTo('Info@dzprojects.eu');
        });
    }
}
