<?php
namespace App\Model;

use Illuminate\Database\Eloquent\Model;


class Cliente extends Model
{
    protected $table='cao_cliente';

    public function getClientesTipoA($cliente){
        return $cliente
            ->where(['tp_cliente'=>'A'])->orderBy('no_fantasia')->get();
    }
}