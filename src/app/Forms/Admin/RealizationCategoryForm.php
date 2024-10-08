<?php


namespace App\Forms\Admin;


use App\Helpers\Form;
use App\Models\RealizationCategory;
use App\Models\BaseModel;
use App\Models\Page;
use App\Models\PageType;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Log;

class RealizationCategoryForm extends Form
{

    const FIELDS = [
        'title' => [
            'name' => 'title',
            'type' => 'text',
            'label' => 'admin.realization_category.title',
            'rules' => ['max:255', 'min:2', 'required'],
            'attrs' => [
                'seoUrl' => true,
                'seoTitle' => true,
            ]
        ],
        'lead' => [
            'name' => 'lead',
            'type' => 'checkbox',
            'label' => 'admin.realization_category.lead',
            'rules' => [],
            'options' => [],
        ],
        'text' => [
            'name' => 'text',
            'type' => 'textarea',
            'label' => 'admin.realization_category.text',
            'class' => 'ckeditorStandard',
            'rules' => [],
            'options' => [],
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

        parent::__construct($model, RealizationCategory::class);
    }
}
