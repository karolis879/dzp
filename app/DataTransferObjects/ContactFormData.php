<?php

namespace App\DataTransferObjects;

class ContactFormData
{
    public function __construct(
        public string  $topic,
        public string  $email,
        public string  $message,
        public string  $name,
        public ?string $company = null,
        public ?string $country = null,
        public ?string $attachment = null
    )
    {
    }
}
