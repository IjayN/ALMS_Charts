<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Holidays extends Model
{
  use Notifiable, SoftDeletes;

  protected $dates = ['deleted_at'];

  /**
   * The attributes that are mass assignable.
   *
   * @var array
   */
  protected $fillable = [
      'holiday_type', 'holiday_date'
  ];
}
