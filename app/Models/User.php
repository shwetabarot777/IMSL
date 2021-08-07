<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Hash;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'full_name',
        'username',
        'photo',
        'phone',
        'email',
        'password',
        'address',
        'role',
        'status'
    ];
    public function setPasswordAttribute($password){
    $this->attributes['password'] = Hash::needsRehash($password) ? Hash::make($password) : $password;
}

  
}
