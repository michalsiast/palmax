<?php


namespace App\Forms\Admin;


use App\Helpers\Form;
use App\Models\Article;
use App\Models\BaseModel;
use App\Models\ConstField;
use App\Models\Page;
use App\Models\PageType;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Log;

class ConstFieldForm extends Form
{

    const FIELDS = [
        'page_title' => [
            'name' => 'page_title',
            'type' => 'text',
            'label' => 'admin.const_field.page_title',
            'rules' => [],
        ],
        'company_name' => [
            'name' => 'company_name',
            'type' => 'text',
            'label' => 'admin.const_field.company_name',
            'rules' => [],
        ],
        'company_description' => [
            'name' => 'company_description',
            'type' => 'textarea',
            'label' => 'admin.const_field.company_description',
            'rules' => [],
            'row' => 5,
            'class' => 'ckeditorStandard',
        ],
        'company_address' => [
            'name' => 'company_address',
            'type' => 'text',
            'label' => 'admin.const_field.company_address',
            'rules' => [],
        ],
        'company_city' => [
            'name' => 'company_city',
            'type' => 'text',
            'label' => 'admin.const_field.company_city',
            'rules' => [],
        ],
        'bank_account_number' => [
            'name' => 'bank_account_number',
            'type' => 'text',
            'label' => 'admin.const_field.bank_account_number',
            'rules' => [],
        ],
        'company_post_code' => [
            'name' => 'company_post_code',
            'type' => 'text',
            'label' => 'admin.const_field.company_post_code',
            'rules' => [],
        ],
        'company_country' => [
            'name' => 'company_country',
            'type' => 'text',
            'label' => 'admin.const_field.company_country',
            'rules' => [],
        ],
        'company_nip' => [
            'name' => 'company_nip',
            'type' => 'text',
            'label' => 'admin.const_field.company_nip',
            'rules' => [],
        ],
        'company_krs' => [
            'name' => 'company_krs',
            'type' => 'text',
            'label' => 'admin.const_field.company_krs',
            'rules' => [],
        ],
        'phone' => [
            'name' => 'phone',
            'type' => 'text',
            'label' => 'admin.const_field.phone',
            'rules' => [],
        ],
        'phone2' => [
            'name' => 'phone2',
            'type' => 'text',
            'label' => 'admin.const_field.phone2',
            'rules' => [],
        ],
        'email' => [
            'name' => 'email',
            'type' => 'text',
            'label' => 'admin.const_field.email',
            'rules' => [],
        ],
        'email2' => [
            'name' => 'email2',
            'type' => 'text',
            'label' => 'admin.const_field.email2',
            'rules' => [],
        ],
        'contact_form_email' => [
            'name' => 'contact_form_email',
            'type' => 'text',
            'label' => 'admin.const_field.contact_form_email',
            'rules' => [],
        ],
        'google_map' => [
            'name' => 'google_map',
            'type' => 'text',
            'label' => 'admin.const_field.google_maps',
            'rules' => [],
        ],
        'google_map_iframe' => [
            'name' => 'google_map_iframe',
            'type' => 'text',
            'label' => 'admin.const_field.google_maps_iframe',
            'rules' => [],
        ],
        'facebook' => [
            'name' => 'facebook',
            'type' => 'text',
            'label' => 'Facebook',
            'rules' => [],
        ],
        'instagram' => [
            'name' => 'instagram',
            'type' => 'text',
            'label' => 'Instagram',
            'rules' => [],
        ],
        'company_data_heading' => [
            'name' => 'company_data_heading',
            'type' => 'text',
            'label' => 'Nagłówek Dane firmy',
            'rules' => [],
        ],
        'company_data_heading_bank' => [
            'name' => 'company_data_heading_bank',
            'type' => 'text',
            'label' => 'Nr. banku tekst',
            'rules' => [],
        ],
        'company_data_heading_nip' => [
            'name' => 'company_data_heading_nip',
            'type' => 'text',
            'label' => 'NIP tekst',
            'rules' => [],
        ],
        'contact_person_heading' => [
            'name' => 'contact_person_heading',
            'type' => 'text',
            'label' => 'Nagłówek Osoba kontaktowa',
            'rules' => [],
        ],
        'contact_person_description' => [
            'name' => 'contact_person_description',
            'type' => 'text',
            'label' => 'Opis Osoba kontaktowa',
            'rules' => [],
        ],
        'contact_details_heading' => [
            'name' => 'contact_details_heading',
            'type' => 'text',
            'label' => 'Nagłówek dane kontaktowe',
            'rules' => [],
        ],
        'contact_banner_heading_1' => [
            'name' => 'contact_banner_heading_1',
            'type' => 'text',
            'label' => 'Kontakt banner - Nagłówek 1',
            'rules' => [],
        ],
        'contact_banner_heading_2' => [
            'name' => 'contact_banner_heading_2',
            'type' => 'text',
            'label' => 'Kontakt banner - Nagłówek 2',
            'rules' => [],
        ],
        'contact_banner_text_number' => [
            'name' => 'contact_banner_text_number',
            'type' => 'text',
            'label' => 'Kontakt banner - Tekst przy numerze',
            'rules' => [],
        ],
        'copyright' => [
            'name' => 'copyright',
            'type' => 'text',
            'label' => 'Copyright',
            'rules' => [],
        ],
        'contact_form_rule' => [
            'name' => 'contact_form_rule',
            'type' => 'textarea',
            'label' => 'admin.const_field.contact_form_rule',
            'rules' => [],
            'row' => 5,
            'class' => 'ckeditorStandard',
        ],
    ];

    public function __construct($model = null)
    {
        foreach (self::FIELDS as $name => $field) {
            $this->modelFields[$name] = $field;
        }

        parent::__construct($model, ConstField::class);
    }
}
