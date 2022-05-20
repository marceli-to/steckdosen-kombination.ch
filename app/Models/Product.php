<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Base;

class Product extends Base
{
  use HasFactory;

  protected $fillable = [
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
  ];

  protected $casts = [
    'created_at' => 'date:d.m.Y',
    'updated_at' => 'date:d.m.Y',
  ];

}
