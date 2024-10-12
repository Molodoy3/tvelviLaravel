<?php

namespace App\Data;

use Spatie\LaravelData\Attributes\Validation\Max;
use Spatie\LaravelData\Data;

class ApplicationData extends Data
{
    public function __construct(
        #[Max(255)]
        public string $firstName,
        //#[PhoneNumber]
        public string $tel,
        #[Max(500)]
        public string $task,
    )
    {
    }
}
