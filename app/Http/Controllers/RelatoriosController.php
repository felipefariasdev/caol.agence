<?php

namespace App\Http\Controllers;

use App\ValorLiquidoCliente;
use App\Cliente;

class RelatoriosController extends Controller
{

    public function valorLiquidoCliente(ValorLiquidoCliente $valorLiquidoCliente, Cliente $cliente)
    {
        $ano = !empty($_GET['ano'])?$_GET['ano']:2007;
        $no_fantasia = !empty($_GET['no_fantasia'])?$_GET['no_fantasia']:'';

        $cliente = $cliente
            ->where(['tp_cliente'=>'A'])->orderBy('no_fantasia')->get();

        $valorLiquidoClienteWhere = ['ano'=>$ano];
        if($no_fantasia){
            $valorLiquidoClienteWhere = array_merge($valorLiquidoClienteWhere,['no_fantasia'=>$no_fantasia]);
        }
        $valorLiquidoCliente = $valorLiquidoCliente
            ->where($valorLiquidoClienteWhere)
            ->orderBy('mesOrderBy')->get();
        $return = ["valorLiquidoCliente" => $valorLiquidoCliente,"ano" => $ano, 'cliente'=>$cliente,'no_fantasia'=>$no_fantasia];

        return view('relatorios/valorLiquidoCliente', $return);
    }
    public function relatorioConsultor()
    {
        return view('relatorios/relatorioConsultor',[]);
    }
}
