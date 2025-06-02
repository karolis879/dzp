<?php

namespace App\Http\Controllers;

use App\DataTransferObjects\ContactFormData;
use App\Http\Requests\ContactUsFormRequest;
use App\Http\Requests\SendUsYourCvRequest;
use App\Mail\ContactFormMail;
use App\Mail\GeneralContactsMail;
use App\Mail\SendUsYourCvMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactUsController extends Controller
{
    public function getQuote(ContactUsFormRequest $request)
    {
        $recipientEmail = config("contact_topics." . $request->input('topic'), 'default@dzprojects.eu');

        $data = new ContactFormData(
            topic: $request->input('topic'),
            email: $request->input('email'),
            message: $request->input('message'),
            name: $request->input('name'),
            company: $request->input('company'),
            country: $request->input('country'),
        );

        Mail::to($recipientEmail)->send(new ContactFormMail($data));

        return redirect()->back()->with('success', 'Your message has been sent.');
    }

    public function sendCV(SendUsYourCvRequest $request)
    {
        $attachment = $request->file('cv'); // directly get the uploaded file from the request

        $data = new ContactFormData(
            topic: null,
            email: $request->input('email'),
            message: $request->input('message'),
            name: $request->input('name'),
            company: $request->input('company'),
            country: $request->input('country'),
            attachment: $attachment,
        );

//dd($data);
        Mail::to('Info@dzprojects.eu')->send(new SendUsYourCvMail($data));

        return redirect()->back()->with('success', 'Your message has been sent.');
    }

    public function generalContacts(ContactUsFormRequest $request)
    {
        $data = new ContactFormData(
            topic: null,
            email: $request->input('email'),
            message: $request->input('message'),
            name: $request->input('name'),
            company: $request->input('company'),
            country: $request->input('country'),
        );

        Mail::to('Info@dzprojects.eu')->send(new GeneralContactsMail($data));

        return redirect()->back()->with('success', 'Your message has been sent.');
    }
}
