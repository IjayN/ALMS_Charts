<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Visit extends Model
{
    protected $fillable = ['reason', 'time_in', 'time_out', 'user_id', 'visitor_id'];

    public function visitor()
    {
        return $this->belongsTo(Visitors::class,'visitor_id');
    }

    public function employee()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
