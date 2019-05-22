<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reason extends Model
{
    protected $fillable =   ['leave_application_id','reliever','reliever2','reliever3','pm','hod','hr','md'];

    public function leave(){
        return $this->belongsTo(LeaveApplication::class, 'leave_application_id');
    }
}
