<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Base;

class TrainingSubscriber extends Base
{
  protected $fillable = [
    'firstname',
    'name', 
    'company', 
    'phone', 
    'email', 
    'participants', 
    'date', 
  ];

  protected $casts = [
    'date' => 'date:d.m.Y',
    'created_at' => 'date:d.m.Y',
    'updated_at' => 'date:d.m.Y',
  ];

  /**
   * Set the date for a date.
   *
   * @param  string $value
   * @return void
   */

  public function setDateAttribute($value)
  {
    $this->attributes['date'] = \Carbon\Carbon::parse($value)->format('Y-m-d');
  }

  /**
   * Get the date for a date.
   *
   * @param  string $value
   * @return string $date
   */

  public function getDateAttribute($value)
  {   
    return date('d. F Y', strtotime($value));
  }
}
