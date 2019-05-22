<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    protected $fillable = ['name'];

    public function user()
    {
        return $this->hasMany(User::class);
    }

    public function leaveApplication()
    {
        return $this->hasMany(LeaveApplication::class);
    }
}
