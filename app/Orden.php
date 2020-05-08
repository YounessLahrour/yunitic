<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Empleado;
use App\Cliente;
class Orden extends Model
{
    //
    public function empleado(){
        return $this->belongsTo('App\Empleado','empleado_id')
        ->withTimestamps()
        ->withPivot('nombre', 'apellido');
     }

     public static function nombreCliente($id){
        $cliente=Cliente::find($id);
        $nombre=$cliente->nombre;
        $apellido=$cliente->apellido;
        return "$nombre, $apellido";
    }

    public static function nombreEmpleado($id){
        $empleado=Empleado::find($id);
        $nombre=$empleado->nombre;
        $apellido=$empleado->apellido;
        return "$nombre, $apellido";
    }

    public function scopeEstado($query, $v){
        if(!isset($v)){
           return $query;
        }
        if(isset($v)){
            return $query->where('estadoOrden', 'like', $v);
        }
    }
    public function scopeSerial($query, $v){
        if(!isset($v)){
           return $query;
        }
        if($v=='%'){
            return $query;
        }
        if(isset($v)){
            return $query->where('serialOrden', 'like', $v);
        }
    }


}
