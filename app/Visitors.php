<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Nicolaslopezj\Searchable\SearchableTrait;

class Visitors extends Model
{
    use SearchableTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'fname', 'lname', 'phone', 'company_name', 'nat_id', 'avatar'
    ];

    protected $searchable = [
        'columns' => [
            'visitors.nat_id' => 10
        ],
    ];

    public function visit()
    {
        return $this->hasMany(Visit::class,'visitor_id');
    }

    public function getAvatarAttribute($value)
    {
        return avatarResized() . $value;
    }


}
