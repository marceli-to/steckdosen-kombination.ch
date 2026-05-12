<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;
use App\Models\Base;

class MennekesProduct extends Base
{
  use HasFactory, HasTranslations;

  protected $table = 'mennekes_products';

  public $translatable = ['title'];

  protected $fillable = [
    'eldas_number',
    'em_number',
    'ean_number',
    'title',
    'description',
    'cee_63a_5p',
    'cee_63a',
    'cee_125a',
    'cee_32a_5p',
    'cee_16a_5p',
    'ch_16a_t25',
    'cee_16a_3p',
    'ch_16a_t23',
    'data_ports',
    'fi_switch',
    'fi_ls',
    'schuko',
    'ch_10a_t13',
    'fabrikat',
    'fi_40a_63a',
    'ls_switch',
    'fabrikat_absicherung',
    'schutzart',
    'anschluss',
    'gehaeuse',
    'number',
    'kategorie',
    'beschreibung',
    'ek',
    'uvp_egh',
    'uvp_installateur',
    'has_image',
    'form_data',
    'form_data_saesseli',
    'ferratec_shop_url_de',
    'ferratec_shop_url_fr',
    'publish',
  ];

  protected $casts = [
    'created_at' => 'date:d.m.Y',
    'updated_at' => 'date:d.m.Y',
    'title' => 'array',
  ];

  protected $attributes = [
    'title' => '{
      "de": "null", "en": "null", "fr": "null", "it": "null"
    }',
  ];

  public function scopeActive($query)
  {
    return $query->where('publish', 1)->where('has_image', 1);
  }

}
