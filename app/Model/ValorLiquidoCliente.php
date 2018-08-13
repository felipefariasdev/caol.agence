<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class ValorLiquidoCliente extends Model
{
    protected $table = "valor_liquido_cliente";

    public function valorLiquidoCliente($ano, $no_fantasia, $valorLiquidoCliente){
        $valorLiquidoClienteWhere = ['ano'=>$ano];
        if($no_fantasia){
            $valorLiquidoClienteWhere = array_merge($valorLiquidoClienteWhere,['no_fantasia'=>$no_fantasia]);
        }
        return $valorLiquidoCliente
            ->where($valorLiquidoClienteWhere)
            ->orderBy('mesOrderBy')->get();
    }

}
