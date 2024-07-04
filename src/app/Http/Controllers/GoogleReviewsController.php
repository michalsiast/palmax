<?php

namespace App\Http\Controllers;

use App\Services\GooglePlacesService;
use Illuminate\Http\Request;
use App\Models\Page;
use App\Models\PageType;
use App\Helpers\SeoHelper;

class GoogleReviewsController extends Controller
{
    protected $googlePlacesService;

    public function __construct(GooglePlacesService $googlePlacesService)
    {
        $this->googlePlacesService = $googlePlacesService;
    }

    public function show(Page $item)
    {
        $placeId = 'ChIJv5WKkub7PEcRlOJvEWkPF80'; // Zamień na swoje miejsce ID
        try {
            $reviews = $this->googlePlacesService->getReviews($placeId);
        } catch (\Exception $e) {
            $reviews = [];
            \Log::error($e->getMessage());
        }

        $type = PageType::getByName($item->type);
        $view = 'page.show';

        if($type['module']) {
            $view = str_replace('_', '.', $item->type);
        } else {
            $view = 'page.'.explode('.', $item->type)[0];
        }

        $fields = (object) $item->fields->pluck('value', 'name')->toArray();
        $gallery = $item->gallery;

        SeoHelper::setSeo($item->seo);

        return view('default.'.$view, [
            'page' => $item,
            'fields' => $fields,
            'gallery' => $gallery,
            'reviews' => $reviews
        ]);
    }
}
