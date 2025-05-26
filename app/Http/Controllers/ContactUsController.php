<?php

namespace App\Http\Controllers;

use App\DataTransferObjects\ContactFormData;
use App\Http\Requests\ContactUsFormRequest;
use App\Mail\ContactFormMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactUsController extends Controller
{
    public function sendMail(ContactUsFormRequest $request)
    {
        $recipientEmail = config("contact_topics.$request->input('topic')", 'default@dzprojects.eu');

        $attachment = $request->hasFile('attachment')
            ? $request->file('attachment')?->store('attachments')
            : null;

        $data = new ContactFormData(
            topic: $request->input('topic'),
            email: $request->input('email'),
            message: $request->input('message'),
            name: $request->input('name'),
            company: $request->input('company'),
            country: $request->input('country'),
            attachment: $attachment,
        );

        Mail::to($recipientEmail)->send(new ContactFormMail($data));

        return redirect()->back()->with('success', 'Your message has been sent.');
    }
}
