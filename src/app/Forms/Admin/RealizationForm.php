<?php


namespace App\Forms\Admin;


use App\Helpers\Form;
use App\Models\Realization;
use App\Models\BaseModel;
use App\Models\Page;
use App\Models\PageType;
use App\Models\RealizationCategory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Log;

class RealizationForm extends Form
{

    const FIELDS = [
        'realization_category_id' => [
            'name' => 'realization_category_id',
            'type' => 'select',
            'label' => 'admin.realization_category.singular',
            'rules' => [],
            'options' => [],
        ],
        'title' => [
            'name' => 'title',
            'type' => 'text',
            'label' => 'admin.realization.title',
            'rules' => ['max:255', 'min:2', 'required'],
            'attrs' => [
                'seoUrl' => true,
                'seoTitle' => true,
            ]
        ],
        'lead' => [
            'name' => 'lead',
            'type' => 'text',
            'label' => 'admin.realization.lead',
            'rules' => [],
        ],
        'active' => [
            'name' => 'active',
            'type' => 'checkbox',
            'label' => 'admin.active',
            'rules' => [],
            'options' => [],
        ],
    ];

    public function __construct($model = null)
    {
        foreach (self::FIELDS as $name => $field) {
            $this->modelFields[$name] = $field;
        }

        $categories = RealizationCategory::with([])->adminLocale()->get();
        foreach ($categories as $category) {
            $this->modelFields['realization_category_id']['options'][$category->id] = $category->title;
        }

        parent::__construct($model, Realization::class);
    }
}
