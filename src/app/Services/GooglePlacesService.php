<?php

namespace App\Services;

use SKAgarwal\GoogleApi\PlacesApi;

class GooglePlacesService
{
    protected $placesApi;

    public function __construct()
    {
        $this->placesApi = new PlacesApi(env('GOOGLE_PLACES_API_KEY'));
    }

    public function getAllReviews($placeId)
    {
        $reviews = [];
        $pagetoken = null;

        do {
            $params = [
                'fields' => 'reviews',
                'language' => 'pl'
            ];

            if ($pagetoken) {
                $params['pagetoken'] = $pagetoken;
            }

            $response = $this->placesApi->placeDetails($placeId, $params);

            \Log::info('Google Places API response: ' . print_r($response, true));

            if ($response['status'] !== 'OK') {
                throw new \Exception("Google Places API error: " . $response['status'] . " - " . ($response['error_message'] ?? ''));
            }

            if (isset($response['result']['reviews'])) {
                $allReviews = $response['result']['reviews'];
                $filteredReviews = array_filter($allReviews, function($review) {
                    return $review['rating'] == 5;
                });
                $reviews = array_merge($reviews, $filteredReviews);
            }

            $pagetoken = $response['next_page_token'] ?? null;

        } while ($pagetoken);

        return $reviews;
    }
}
