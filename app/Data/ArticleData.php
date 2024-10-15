<?php

namespace App\Data;

use Illuminate\Support\Facades\Date;
use Spatie\LaravelData\Attributes\Validation\Max;
use Spatie\LaravelData\Data;

class ArticleData extends Data
{
    public function __construct(
        public ?int    $id,
        #[Max(255)]
        public string  $title,
        #[Max(10000)]
        public ?string $description,
        public string  $image_file,
        public ?Date $created_at
    )
    {
    }

}
