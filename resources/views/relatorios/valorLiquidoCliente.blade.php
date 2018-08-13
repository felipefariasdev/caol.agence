@extends('layouts.app')
<div class="container">
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

                    <?php if($key==1 && $v->mes=='January'){
                        echo "<span style='background-color: #005cbf;color:#e2e3e5'>";
                        $key++;
                    }else{

                        $style='';
                    }
                    ?>
                    <?php if($key==2 && $v->mes=='February' && $style==''){
                        echo "<span style='background-color: #005cbf;color:#e2e3e5'>";
                        $key++;
                    }else{

                        $style='';
                    } ?>

                    <?php if($key==3 && $v->mes=='March' && $style==''){
                        echo "<span style='background-color: #005cbf;color:#e2e3e5'>";
                        $key++;
                    }else{
                        $style='';

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
    </div>
</div>