<?php

namespace App\Http\Controllers;

use App\Data\ReviewData;
use App\Models\Review;
use Illuminate\Http\Request;
use Inertia\Inertia;

class ReviewController extends Controller
{
    public function index() {
        return Inertia::render('Review/Index', [
            'reviews' => Review::query()->orderByDesc('created_at')
                ->paginate(8)
                ->fragment('reviews')
                ->withQueryString(),
        ]);
    }
    public function loadMore()
    {
        $items = (Review::query()->orderByDesc('created_at')->paginate(8));
        return response()->json($items);
    }
    public function store(ReviewData $review) {
        $application = new ApplicationController();
        $newReview = Review::query()->create($review->toArray());
        $application->sendReview($newReview);

        return redirect()->route('reviews');
        return response()->json(['status' => 'success', 'review' => $review]);
    }
}
