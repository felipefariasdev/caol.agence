@extends('layouts.app')
@section('content')


        <h3>Clientes / Relatório</h3>

        <form>
            <div class="form-group">
                <label for="exampleSelect1">Selecione o ano</label>
                <select class="form-control" name="ano">
                    <?php for($i=7;$i<=8;$i++) {?>

                    <?php
                    $ano_selecionado = $ano;
                    $ano_linha = '200'.$i;
                    ?>
                    <option <?php if($ano_selecionado==$ano_linha) echo 'selected';?>><?php echo $ano_linha?></option>
                    <?php }?>
                </select>
            </div>

            <div class="form-group">
                <label for="exampleSelect1">Selecione o Cliente</label>
                <select class="form-control" name="no_fantasia">
                    <option value="">Todos</option>
                    <?php foreach($cliente as $v) {?>
                    <?php if($v->no_fantasia){?>
                    <option <?php if($no_fantasia==$v->no_fantasia) echo 'selected';?>><?php echo $v->no_fantasia?></option>
                    <?php }?>
                    <?php }?>
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Buscar</button>
        </form>

        <div class="bd-example">
            <table class="table">
                <thead>
                <tr>
                    <th scope="row">Empresa</th>
                    <th>R$ Bruno</th>
                    <th>R$ Impostos</th>
                    <th>R$ Comissão</th>
                    <th>R$ Liquido</th>
                    <th>Mês</th>
                </tr>
                </thead>
                <tbody>
                <?php
                $total_geral_faturamento_liquido = 0;
                $key=1;
                $total_geral_faturamento_liquido_janeiro = 0;
                $total_geral_faturamento_liquido_fevereiro = 0;
                $total_geral_faturamento_liquido_marco = 0;
                $total_geral_faturamento_liquido_abril = 0;
                $total_geral_faturamento_liquido_maio = 0;
                $total_geral_faturamento_liquido_junho = 0;
                $total_geral_faturamento_liquido_julho = 0;
                $total_geral_faturamento_liquido_agosto = 0;
                $total_geral_faturamento_liquido_setembro = 0;
                $total_geral_faturamento_liquido_outubro = 0;
                $total_geral_faturamento_liquido_novembro = 0;
                $total_geral_faturamento_liquido_dezembro = 0;
                foreach($valorLiquidoCliente as $v):
                ?>



                <tr class="{{$v->mes=='January'?'table-info':''}} {{$v->mes=='January'?'table-info':''}}{{$v->mes=='February'?'table-danger':''}}{{$v->mes==''?'table-danger':''}}{{$v->mes=='April'?'table-active':''}}
                {{$v->mes=='June'?'table-warning':''}}
                {{$v->mes=='August'?'table-success':''}}
                        ">



                    <th scope="row">


                        <?php echo $v->no_fantasia?></th>
                    <td>



                        R$ {{ number_format($v->total_faturamento_bruno, 2, ',', '.') }}

                    </td>
                    <td>
                        R$ {{ number_format($v->valor_impostos, 2, ',', '.') }}
                    </td>
                    <td> R$ {{ number_format($v->valor_comissao, 2, ',', '.') }}</td>





                    <td>

                        <?php

                        if($v->mes=='January'){
                            $total_geral_faturamento_liquido_janeiro += $v->total_faturamento_liquido;
                        }
                        if($v->mes=='February'){
                            $total_geral_faturamento_liquido_fevereiro += $v->total_faturamento_liquido;
                        }
                        if($v->mes=='March'){
                            $total_geral_faturamento_liquido_marco += $v->total_faturamento_liquido;
                        }
                        if($v->mes=='April'){
                            $total_geral_faturamento_liquido_abril += $v->total_faturamento_liquido;
                        }
                        if($v->mes=='May'){
                            $total_geral_faturamento_liquido_maio += $v->total_faturamento_liquido;
                        }
                        if($v->mes=='June'){
                            $total_geral_faturamento_liquido_junho += $v->total_faturamento_liquido;
                        }
                        if($v->mes=='July'){
                            $total_geral_faturamento_liquido_julho += $v->total_faturamento_liquido;
                        }
                        if($v->mes=='August'){
                            $total_geral_faturamento_liquido_agosto += $v->total_faturamento_liquido;
                        }
                        if($v->mes=='September'){
                            $total_geral_faturamento_liquido_setembro += $v->total_faturamento_liquido;
                        }
                        if($v->mes=='October'){
                            $total_geral_faturamento_liquido_outubro += $v->total_faturamento_liquido;
                        }
                        if($v->mes=='November'){
                            $total_geral_faturamento_liquido_novembro += $v->total_faturamento_liquido;
                        }
                        if($v->mes=='December'){
                            $total_geral_faturamento_liquido_dezembro += $v->total_faturamento_liquido;
                        }

                        if($key==1 && $v->mes=='January'){
                            echo "<span style='background-color: #005cbf;color:#e2e3e5'>";
                            $key++;

                        }else{

                            $style='';
                        }

                        ?>
                        <?php
                        $qtdFevereiro=0;
                        if($key==2 && $v->mes=='February' && $style==''){
                            echo "<span style='background-color: #005cbf;color:#e2e3e5'>";
                            $key++;
                            $qtdFevereiro++;
                        }else{

                            $style='';
                            $qtdFevereiro++;
                        } ?>

                        <?php
                        $qtdMarco=0;
                        if($key==3 && $v->mes=='March' && $style==''){
                            echo "<span style='background-color: #005cbf;color:#e2e3e5'>";
                            $key++;
                            $qtdMarco++;
                        }else{
                            $qtdMarco++;

                        } ?>
                        <?php if($key==4 && $v->mes=='April' && $style==''){
                            echo "<span style='background-color: #005cbf;color:#e2e3e5'>";
                            $key++;
                        }else{
                            $style='';

                        } ?>

                        <?php if($key==5 && $v->mes=='May' && $style==''){
                            echo "<span style='background-color: #005cbf;color:#e2e3e5'>";
                            $key++;
                        }else{
                            $style='';

                        } ?>

                        <?php if($key==6 && $v->mes=='June' && $style==''){
                            echo "<span style='background-color: #005cbf;color:#e2e3e5'>";
                            $key++;
                        }else{
                            $style='';

                        } ?>

                        <?php if($key==7&& $v->mes=='July' && $style==''){
                            echo "<span style='background-color: #005cbf;color:#e2e3e5'>";
                            $key++;
                        }else{
                            $style='';

                        } ?>

                        <?php if($key==8&& $v->mes=='August' && $style==''){
                            echo "<span style='background-color: #005cbf;color:#e2e3e5'>";
                            $key++;
                        }else{
                            $style='';

                        } ?>

                        <?php if($key==9&& $v->mes=='September' && $style==''){
                            echo "<span style='background-color: #005cbf;color:#e2e3e5'>";
                            $key++;
                        }else{
                            $style='';

                        } ?>

                        <?php if($key==9&& $v->mes=='October' && $style==''){
                            echo "<span style='background-color: #005cbf;color:#e2e3e5'>";
                            $key++;
                        }else{
                            $style='';

                        } ?>

                        <?php if($key==9&& $v->mes=='November' && $style==''){
                            echo "<span style='background-color: #005cbf;color:#e2e3e5'>";
                            $key++;
                        }else{
                            $style='';

                        } ?>

                        <?php if($key==9&& $v->mes=='December' && $style==''){
                            echo "<span style='background-color: #005cbf;color:#e2e3e5'>";
                            $key++;
                        }else{
                            $style='';

                        } ?>



                        R$ {{ number_format($v->total_faturamento_liquido, 2, ',', '.') }}
                    </td>
                    <td>{{$v->mes}}</td>
                </tr>





                <?php
                $total_geral_faturamento_liquido +=$v->total_faturamento_liquido;
                endforeach;
                ?>
                </tbody>
                <tfoot>
                <tr>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th scope="row">
                        R$ {{ number_format($total_geral_faturamento_liquido, 2, ',', '.') }}
                    </th>
                    <th></th>

                </tr>
                </tfoot>

            </table>

            <h3>Resumo de cada mês</h3>

            <div class="bd-example">
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="row">MÊS</th>
                        <th>R$ TOTAL LIQUIDO</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td scope="row">JANEIRO</td>
                        <td>R$ {{ number_format($total_geral_faturamento_liquido_janeiro, 2, ',', '.') }}</td>
                    </tr>
                    <tr>
                        <td scope="row">FEVEREIRO</td>
                        <td>R$ {{ number_format($total_geral_faturamento_liquido_fevereiro, 2, ',', '.') }}</td>
                    </tr>
                    <tr>
                        <td scope="row">MARÇO</td>
                        <td>R$ {{ number_format($total_geral_faturamento_liquido_marco, 2, ',', '.') }}</td>
                    </tr>
                    <tr>
                        <td scope="row">ABRIL</td>
                        <td>R$ {{ number_format($total_geral_faturamento_liquido_abril, 2, ',', '.') }}</td>
                    </tr>
                    <tr>
                        <td scope="row">Maio</td>
                        <td>R$ {{ number_format($total_geral_faturamento_liquido_maio, 2, ',', '.') }}</td>
                    </tr>
                    <tr>
                        <td scope="row">Junho</td>
                        <td>R$ {{ number_format($total_geral_faturamento_liquido_junho, 2, ',', '.') }}</td>
                    </tr>
                    <tr>
                        <td scope="row">Julho</td>
                        <td>R$ {{ number_format($total_geral_faturamento_liquido_julho, 2, ',', '.') }}</td>
                    </tr>
                    <tr>
                        <td scope="row">Agosto</td>
                        <td>R$ {{ number_format($total_geral_faturamento_liquido_agosto, 2, ',', '.') }}</td>
                    </tr>
                    <tr>
                        <td scope="row">Setembro</td>
                        <td>R$ {{ number_format($total_geral_faturamento_liquido_setembro, 2, ',', '.') }}</td>
                    </tr>
                    <tr>
                        <td scope="row">Outubro</td>
                        <td>R$ {{ number_format($total_geral_faturamento_liquido_outubro, 2, ',', '.') }}</td>
                    </tr>
                    <tr>
                        <td scope="row">Novembro</td>
                        <td>R$ {{ number_format($total_geral_faturamento_liquido_novembro, 2, ',', '.') }}</td>
                    </tr>
                    <tr>
                        <td scope="row">Dezembro</td>
                        <td>R$ {{ number_format($total_geral_faturamento_liquido_dezembro, 2, ',', '.') }}</td>
                    </tr>
                    </tbody>
                </table>



            </div>

@stop

