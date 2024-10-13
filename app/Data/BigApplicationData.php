<?php

namespace App\Data;

use Spatie\LaravelData\Attributes\Validation\Email;
use Spatie\LaravelData\Attributes\Validation\Max;
use Spatie\LaravelData\Attributes\Validation\StringType;
use Spatie\LaravelData\Data;

class BigApplicationData extends Data
{
    public function __construct(
        #[Max(255), StringType]
        public string $name,
        #[StringType]
        public string $company,
        public string $tel,
        #[Email, Max(255)]
        public string $email,
        #[Max(1500)]
        public string $message,
    )
    {

    }
}
