<?php

namespace App\Http\Controllers;

use App\Model\ValorLiquidoCliente;
use App\Model\Cliente;

class RelatoriosController extends Controller
{

    public function valorLiquidoCliente(ValorLiquidoCliente $valorLiquidoCliente, Cliente $cliente)
    {
        $ano = !empty($_GET['ano'])?$_GET['ano']:2007;
        $no_fantasia = !empty($_GET['no_fantasia'])?$_GET['no_fantasia']:'';

        $return = [
            "valorLiquidoCliente" => $valorLiquidoCliente->valorLiquidoCliente($ano, $no_fantasia, $valorLiquidoCliente),
            "ano" => $ano,
            'cliente'=>$cliente->getClientesTipoA($cliente),
            'no_fantasia'=>$no_fantasia
        ];

        return view('relatorios/valorLiquidoCliente', $return);
    }
    public function relatorioConsultor()
    {
        return view('relatorios/relatorioConsultor',[]);
    }
}
