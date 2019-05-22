<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ForcedLeave extends Model
{
    protected $fillable = ['reason', 'active', 'user_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
