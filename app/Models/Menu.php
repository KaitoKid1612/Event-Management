<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'number',
        'content',
        'update_at'
    ];

    public function events()
    {
        return $this->hasMany(Event::class, 'menu_id', 'id');
    }
}
