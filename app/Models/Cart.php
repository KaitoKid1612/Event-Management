<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;
    protected $table='carts';
    protected $fillable = [
        'user_id',
        'event_id',
        'name',
        'roll_no',
        'class_id'
    ];

    public function events()
    {
        return $this->belongsTo(Event::class, 'event_id', 'id');
    }

    public function students()
    {
        return $this->hasMany(Student::class, 'roll_no', 'name', 'id');
    }
}
