<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class estado extends Model
{
    use HasFactory;

    public $timestamps = true;
        //Para poder ver en el nombre en el index de sucursales
    // Define la relación con el modelo Cliente
    public function cliente()
    {
        return $this->belongsTo(Cliente::class);
    }

    // Define la relación con el modelo Usuario
    public function usuario()
    {
        return $this->belongsTo(Usuario::class);
    }

    // Define la relación con el modelo Mensajero
    public function mensajero()
    {
        return $this->belongsTo(Mensajero::class);
    }

    // Define la relación con el modelo Servicio
    public function servicio()
    {
        return $this->belongsTo(Servicio::class);
    }



}
