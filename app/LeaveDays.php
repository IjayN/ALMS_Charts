<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LeaveDays extends Model
{
    protected $fillable = ['annualDays', 'daysGone', 'user_id','leaveId', 'daysRemaining', 'year'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
