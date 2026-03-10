<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Spatie\Translatable\HasTranslations;
use App\Models\Base;

class DuoiProduct extends Base
{
  use HasFactory, HasTranslations;

  protected $table = 'duoi_products';

  public $translatable = ['title'];

  protected $fillable = [
    'eldas_number',
    'em_number',
    'ean_number',
    'number',
    'title',
    'gehaeuse',
    'fabrikat',
    'kategorie',
    'beschreibung',
    'volt',
    'ampere',
    'pole',
    'schutzart',
    'hilfskontakt',
    'ek',
    'uvp_egh',
    'uvp_installateur',
    'form_data',
    'form_data_saesseli',
    'ferratec_shop_url_de',
    'ferratec_shop_url_fr',
    'publish',
    'has_image',
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
