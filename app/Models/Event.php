<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Menu;


class Event extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'address',
        'date_sign_up',
        'date_begin',
        'date_end',
        'number_student',
        'number_teacher',
        'menu_id',
        'thumb',
        'thumb_active',
        'content',
        'active' ,
        'teacher_id',
        'score'
    ];

    public function menu()
    {
        return $this->hasOne(Menu::class, 'id', 'menu_id')
            ->withDefault(['name' => '']);
    }

    public function teacher()
    {
        return $this->hasOne(User::class, 'id', 'teacher_id')
            ->withDefault(['name'=>'']);
    }
}
