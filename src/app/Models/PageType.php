<?php

namespace App\Models;

use App\Helpers\Enum;
use ReflectionClass;

abstract class PageType extends Enum
{
    /*
     * examples:
     * #1: controller_moduleCategory.action
     * #2: controller.action
     *
     * action = view
    */

    const INDEX_SHOW = [
        'name' => 'index.show',
        'module' => false,
        'fields' => [
            'rotator' => ['rotator', 'Slider'],
            'about_sub_title' => ['head', 'Nagłówek - O nas'],
            'about_title' => ['head', 'Tytuł - O nas'],
            'about_content' => ['text', 'Opis - O nas'],
            'video_content' => ['text', 'Opis - Filmowanie'],
            'statistics_header_1' => ['head', 'Nagłówek - Statystyki 1'],
            'statistics_number_1' => ['head', 'Liczba - Statystyki 1'],
            'statistics_unit_1' => ['head', 'Jednostka - Statystyki 1'],
            'statistics_header_2' => ['head', 'Nagłówek - Statystyki 2'],
            'statistics_number_2' => ['head', 'Liczba - Statystyki 2'],
            'statistics_unit_2' => ['head', 'Jednostka - Statystyki 2'],
            'statistics_header_3' => ['head', 'Nagłówek - Statystyki 3'],
            'statistics_number_3' => ['head', 'Liczba - Statystyki 3'],
            'statistics_unit_3' => ['head', 'Jednostka - Statystyki 3'],
            'testimonial_subtitle' => ['head', 'Podtytuł - Opinie'],
            'testimonial_title' => ['head', 'Tytuł - Opinie'],
            'why_us_subtitle' => ['head', 'Podtytuł - Dlaczego my'],
            'why_us_title' => ['head', 'Tytuł - Dlaczego my'],
        ]
    ];
    const PAGE_SHOW = [
        'name' => 'page.show',
        'module' => false,
        'fields' => [
            'text1' => ['text', 'Text na stronie głównej']
        ]
    ];
    const GALLERY_SHOW = [
        'name' => 'gallery.show',
        'module' => false,
        'fields' => [
//            'text1' => ['text', 'Text na stronie głównej']
        ]
    ];
    const ABOUT_US_SHOW = [
        'name' => 'about-us.show',
        'module' => false,
        'fields' => [
            'sub_title_about' => ['head', 'Podtytuł - O firmie'],
            'title_about' => ['head', 'Tytuł - O firmie'],
            'description_about' => ['text', 'Opis - O firmie'],
        ]
    ];
    const CONTACT_SHOW = [
        'name' => 'contact.show',
        'module' => false,
        'fields' => [
            'sub_title_contact' => ['head', 'Podtytuł - Kontakt'],
            'title_contact' => ['head', 'Tytuł - Kontakt'],
            'company_data_heading' => ['head', 'Dane firmy nagłówek - Kontakt'],
            'contact_details_heading' => ['head', 'Dane kontaktowe nagłówek - Kontakt'],
            'location_heading' => ['head', 'Lokalizacja nagłówek - Kontakt'],
        ]
    ];
    const ARTICLE_INDEX = [
        'name' => 'article.index',
        'module' => true,
        'fields' => [
            'text1' => ['text', 'Text na stronie głównej']
        ]
    ];
    const ARTICLE_CATEGORY_INDEX = [
        'name' => 'article_category.index',
        'module' => true,
        'fields' => [
            'text1' => ['text', '']
        ]
    ];
    const OFFER_INDEX = [
        'name' => 'offer.index',
        'module' => true,
        'fields' => [
            'text1' => ['text', '']
        ]
    ];
    const OFFER_CATEGORY_INDEX = [
        'name' => 'offer_category.index',
        'module' => true,
        'fields' => [
            'text1' => ['text', '']
        ]
    ];
    const REALIZATION_INDEX = [
        'name' => 'realization.index',
        'module' => true,
        'fields' => [
            'text1' => ['text', '']
        ]
    ];
    const REALIZATION_CATEGORY_INDEX = [
        'name' => 'realization_category.index',
        'module' => true,
        'fields' => [
            'text1' => ['text', '']
        ]
    ];


    static function getNames() : array {
        $class = new ReflectionClass(get_called_class());
        $types = array_values($class->getConstants());
        $names = [];
        foreach ($types as $type) {
            $names[] = $type['name'];
        }
        return $names;
    }

    static function getByName($name) : array {
        $class = new ReflectionClass(get_called_class());
        $types = array_values($class->getConstants());
        foreach ($types as $type) {
            if($type['name'] == $name)
                return $type;
        }
//        return $names;
    }
}
