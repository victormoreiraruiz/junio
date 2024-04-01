<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Desarrolladora extends Model
{
    use HasFactory;

    public function distribuidoras() {
        return $this->hasMany(Distribuidora::class);
    }

}
