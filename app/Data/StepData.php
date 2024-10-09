<?php

namespace App\Data;

use Spatie\LaravelData\Attributes\Validation\Max;
use Spatie\LaravelData\Data;
use Spatie\TypeScriptTransformer\Attributes\TypeScript;

#[TypeScript]
class StepData extends Data
{
    public function __construct(
        public ?int $id,
        public int $number,
        #[Max(255)]
        public string $title,
        #[Max(1000)]
        public string $description,
        public bool $executed,
        public int $idService
    )
    {
    }
}
