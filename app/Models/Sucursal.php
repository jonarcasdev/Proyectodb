<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sucursal extends Model
{
    use HasFactory;

    //Para poder ver en el nombre en el index de sucursales
    public function cliente()
    {
        return $this->belongsTo(Cliente::class);
    }
}
