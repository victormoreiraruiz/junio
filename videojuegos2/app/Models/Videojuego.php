<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Videojuego extends Model
{
    use HasFactory;

    public function distribuidora() {
        return $this->belongsTo(Distribuidora::class);
    }

    public function posesiones()
    {
        return $this->hasMany(User::class, 'posesiones');
    }

}
