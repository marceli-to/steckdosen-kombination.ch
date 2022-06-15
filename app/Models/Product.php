<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Base;

class Product extends Base
{
  use HasFactory;

  protected $fillable = [
    'eldas_number',
    'em_number',
    'description',
    'cee_63a_5p',
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
    '40a_63a',
    'ls_schalter',
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
    'publish',
  ];

  protected $casts = [
    'created_at' => 'date:d.m.Y',
    'updated_at' => 'date:d.m.Y',
  ];

  //protected $appends = ['em_number'];

  public function scopeActive($query)
  {
    return $query->where('publish', 1)->where('has_image', 1);
  }


  /**
   * Get the user's full name.
   *
   * @param  string  $value
   * @return string
   */
  public function getEmNumberAttribute($value)
  {
    return str_replace(['/', ' '], [''], $value);
  }

}
