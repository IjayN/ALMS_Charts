<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class LeaveApplication extends Model
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];
    protected $table = 'leave_application';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'type', 'startDate', 'user_id', 'endDate','no_of_relievers', 'reliever','reliever2','reliever3' ,'leave_days', 'releiver_approval','reliever2_approval','reliever3_approval','PM', 'HOD', 'HR', 'MD','department_id','usertype_id'
    ];

    public function user()
    {
        //return $this->belongsTo(User::class, 'userD');
        return $this->belongsTo(User::class);
    }

    public function reason()
    {
        return $this->hasOne(Reason::class);
    }

    public function department(){
        return $this->belongsTo(Department::class);
    }

    public function reliever(){
        return $this->belongsTo(User::class, 'reliever');
    }
}
