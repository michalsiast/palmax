<?php

namespace App\Http\Controllers;

use App\Helpers\SeoHelper;
use App\Models\Page;
use App\Models\PageType;
use Illuminate\Support\Facades\Log;
use App\Services\GooglePlacesService;

class PageController extends Controller
{
    protected $googlePlacesService;

    public function __construct(GooglePlacesService $googlePlacesService)
    {
        $this->googlePlacesService = $googlePlacesService;
    }

    public function show($item)
    {
        $type = PageType::getByName($item->type);
        $view = 'page.show';

        if($type['module']) {
            $view = str_replace('_', '.', $item->type);
        }
        else {
            $view = 'page.'.explode('.', $item->type)[0];
        }

        $fields = (object) $item->fields->pluck('value', 'name')->toArray();
        $gallery = $item->gallery;

        SeoHelper::setSeo($item->seo);

        // Pobieranie wszystkich opinii z Google Reviews
        $placeId = 'ChIJv5WKkub7PEcRlOJvEWkPF80';
        try {
            $reviews = $this->googlePlacesService->getAllReviews($placeId);
        } catch (\Exception $e) {
            $reviews = [];
            Log::error($e->getMessage());
        }

        return view('default.'.$view, [
            'page' => $item,
            'fields' => $fields,
            'gallery' => $gallery,
            'reviews' => $reviews
        ]);
    }
}
