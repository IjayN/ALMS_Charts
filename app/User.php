<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Passport\HasApiTokens;
use Illuminate\Database\Eloquent\SoftDeletes;
use Storage;
use Nicolaslopezj\Searchable\SearchableTrait;


class User extends Authenticatable
{
    use Notifiable, HasApiTokens, SoftDeletes, SearchableTrait;

    protected $dates = ['deleted_at'];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'active', 'department_id', 'nat_id', 'NSSF', 'NHIF', 'KRA_Pin', 'avatar', 'type_id', 'status', 'pushToken','employee_no','phone_no','category','reset_code'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token', 'activation_token'
    ];

    protected $appends = ['avatar_url'];

    public function getAvatarUrlAttribute()
    {
        return Storage::url('avatars/' . $this->id . '/' . $this->avatar);
    }

    public function leave()
    {
        return $this->hasMany(LeaveApplication::class);
    }

    public function department()
    {
        return $this->belongsTo(Department::class);
    }

    public function type()
    {
        return $this->belongsTo(Type::class);
    }

    public function getAvatarAttribute($value)
    {
        return appUrl() . avatarResized() . $value;

    }

    protected $searchable = [
        'columns' => [

        ],
    ];

    public function visit()
    {
        return $this->hasMany(Visit::class);
    }

    public function leaveDays()
    {
        return $this->hasOne(LeaveDays::class);
    }

    public function forcedLeave()
    {
        return $this->hasMany(ForcedLeave::class);
    }

}
