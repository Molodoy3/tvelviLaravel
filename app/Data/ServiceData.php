<?php

namespace App\Data;

use Spatie\LaravelData\Attributes\Validation\Max;
use Spatie\LaravelData\Attributes\Validation\StringType;
use Spatie\LaravelData\Attributes\Validation\Unique;
use Spatie\LaravelData\Data;
use Spatie\TypeScriptTransformer\Attributes\TypeScript;

#[TypeScript]
class ServiceData extends Data
{
    public function __construct(
        public ?int $id,
        public int $number,
        #[Max(255)]
        public string $title,
        #[Max(255)]
        public string $altTitle,
        #[Max(500)]
        public ?string $description,
        #[Max(255)]
        public string $image,
        #[Max(255), Unique, StringType]
        public ?string $slug,
        #[Max(500)]
        public ?string $howDescription,
        #[Max(255)]
        public ?string $howTitle,
    )
    {
    }
}
