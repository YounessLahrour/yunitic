<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Empleado;
class Cliente extends Model
{
    //
    public function empleados()
    {
        return $this->belongsToMany('App\Empleado')
        ->withTimestamps()
        ->withPivot('id','estadoOrden', 'marcaEquipo', 'cliente_id');
    }

    public static function nombreCliente($id){
        $cliente=Cliente::find($id);
        $nombre=$cliente->nombre;
        $apellido=$cliente->apellido;
        return "$nombre, $apellido";
    }
}
