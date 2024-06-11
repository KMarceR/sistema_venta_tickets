<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuario extends Model
{
    use HasFactory;

    public function tipo_usuario()
    {
        return $this->belongsTo(Tipo_Usuario::class, 'id_tipo_usuario', 'id_tipo_usuario');
    }
}
