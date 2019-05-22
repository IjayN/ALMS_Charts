<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Nicolaslopezj\Searchable\SearchableTrait;

class Type extends Model
{
    use SearchableTrait;
    protected $fillable = ['name'];

    public function user()
    {
        return $this->hasMany(User::class);
    }
    protected $searchable = [
        'columns' => [
            'types.name' =>  10
        ],
    ];
}
