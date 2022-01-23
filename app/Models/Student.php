<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Student extends Authenticatable
{
    use Notifiable;

    protected $table = 'students';
    protected $fillable = [
        'student_id',
        'roll_no',
        'name',
        'password',
        'gender',
        'email',
        'dob',
        'phone',
        'address',
        'score',
        'status',
        'class_id',
        'image'
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    public function classe()
    {
        return $this->hasOne(Classe::class, 'id')
            ->withDefault(['name'=> '']) ;
    }

    public function diemdanh()
    {
        return $this->hasOne(Diemdanh::class, 'id')
            ->withDefault(['name'=> '']) ;
    }

    public function cart()
    {
        return $this->hasOne(Cart::class, 'id')
            ->withDefault(['name'=> '']) ;
    }
}
