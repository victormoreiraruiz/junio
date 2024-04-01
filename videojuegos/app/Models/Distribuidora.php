<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Distribuidora extends Model
{
    use HasFactory;

    public function desarrolladora() {
        return $this->belongsTo(Desarrolladora::class);
    }

    public function videojuegos() {
        return $this->hasMany(Videojuego::class);
    }


}
