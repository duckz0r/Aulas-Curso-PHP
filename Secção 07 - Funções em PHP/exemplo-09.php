<?php

$hierarquia = array(
    array(
        'nome_cargo' => 'CEO',
        'subordinados' => array(
            array(
                'nome_cargo' => 'Diretor Comercial',
                'subordinados'=>array(
                    array(
                        'nome_cargo' => 'Gerente de Vendas'
                    )
                )
            ),
            array(
                'nome_cargo' => 'Diretor Financeiro',
                'subordinados' => array(
                    array(
                        'nome_cargo' => 'Gerente de Contas a Pagar',
                        'subordinados' => array(
                            array(
                                'nome_cargo'=>'Supervisor de Pagamentos'
                            )
                        )
                    ),
                    array(
                        'nome_cargo' => 'Gerente de Compras',
                        'subordinados' => array(
                            array(
                                'nome_cargo' => 'Supervisor de Stocks'
                            )
                        )
                    )
                )
            )
        )
    )
);

function mostra($cargos){

    $html = '<ul>';
    foreach($cargos as $cargo){

        $html .= '<li>';
        $html .= $cargo['nome_cargo'];
        if (isset($cargo['subordinados']) && count($cargo['subordinados']) > 0) {

            $html .= mostra($cargo['subordinados']);
        }
        $html .= '</li>';
    }
    $html .= '</ul>';

    return $html;
}

echo mostra($hierarquia);

?>