<?php

namespace App\Http\Controllers;

use App\ValorLiquidoCliente;

class RelatoriosController extends Controller
{

    public function valorLiquidoCliente(ValorLiquidoCliente $valorLiquidoCliente)
    {
        $ano = !empty($_GET['ano'])?$_GET['ano']:2007;
        $data = ["valorLiquidoCliente" => $valorLiquidoCliente->where(['ano'=>$ano])->orderBy('mesOrderBy')->get(),"ano"=>$ano];

        return view('relatorios/valorLiquidoCliente',$data);
    }
    public function relatorioConsultor()
    {
        return view('relatorios/relatorioConsultor',[]);
    }
}
