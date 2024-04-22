<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cambio extends Model
{
    use HasFactory;

    public function origen()
    {
        return $this->belongsTo(Aula::class, 'origen_id');
    }

    public function destino()
    {
        return $this->hasMany(Aula::class, 'destino_id');
    }

    public function ordenador()
    {
        return $this->belongsTo(Ordenador::class);
    }
}
