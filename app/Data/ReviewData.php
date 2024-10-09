<?php

namespace App\Data;

use Spatie\LaravelData\Attributes\Validation\Email;
use Spatie\LaravelData\Attributes\Validation\Max;
use Spatie\LaravelData\Attributes\Validation\Min;
use Spatie\LaravelData\Attributes\Validation\StringType;
use Spatie\LaravelData\Data;
use Spatie\TypeScriptTransformer\Attributes\TypeScript;

#[TypeScript]
class ReviewData extends Data
{
    public function __construct(
        public ?int $id,
        #[Max(50), StringType]
        public string $name,
        #[Max(255), Email]
        public string $email,
        #[Max(500)]
        public string $message,
    )
    {
    }
}
