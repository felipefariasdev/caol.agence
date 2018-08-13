CREATE 
    ALGORITHM = UNDEFINED 
    DEFINER = `felipefarias`@`%` 
    SQL SECURITY DEFINER
VIEW `valor_liquido_cliente` AS
    SELECT 
        `cc`.`co_cliente` AS `co_cliente`,
        `cc`.`no_razao` AS `no_razao`,
        `cc`.`no_fantasia` AS `no_fantasia`,
        SUM(`c_f`.`total`) AS `total_faturamento_bruno`,
        ((SUM(`c_f`.`total`) * SUM(`c_f`.`total_imp_inc`)) / 100) AS `valor_impostos`,
        ((SUM(`c_f`.`total`) * SUM(`c_f`.`comissao_cn`)) / 100) AS `valor_comissao`,
        DATE_FORMAT(`c_f`.`data_emissao`, '%m') AS `mesOrderBy`,
        DATE_FORMAT(`c_f`.`data_emissao`, '%M') AS `mes`,
        DATE_FORMAT(`c_f`.`data_emissao`, '%Y') AS `ano`,
        (SUM(`c_f`.`total`) - (((SUM(`c_f`.`total`) * SUM(`c_f`.`total_imp_inc`)) / 100) + ((SUM(`c_f`.`total`) * SUM(`c_f`.`comissao_cn`)) / 100))) AS `total_faturamento_liquido`
    FROM
        (`cao_cliente` `cc`
        JOIN `cao_fatura` `c_f` ON ((`c_f`.`co_cliente` = `cc`.`co_cliente`)))
    WHERE
        (`cc`.`tp_cliente` = 'A')
    GROUP BY `c_f`.`data_emissao` , `cc`.`co_cliente` , `cc`.`no_razao` , `cc`.`no_fantasia`
    ORDER BY `mesOrderBy` , `total_faturamento_liquido` DESC