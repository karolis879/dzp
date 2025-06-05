<?php

namespace App\DataTransferObjects;
use Illuminate\Http\UploadedFile;

class ContactFormData
{
    public function __construct(
        public ?string  $topic = null,
        public string  $email,
        public string  $message,
        public string  $name,
        public ?string $company = null,
        public ?string $profession = null,
        public ?string $country = null,
        public ?UploadedFile $attachment = null
    )
    {
    }
}
