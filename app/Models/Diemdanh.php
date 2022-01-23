<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Diemdanh extends Model
{
    use HasFactory;
    protected $table='diemdanhs';
    protected $fillable = [
        'event_id',
        'roll_no',
        'status',
        'note',
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
