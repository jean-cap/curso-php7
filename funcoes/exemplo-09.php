<?php

/*Funções recursivas*/

$hierarquia = [
    [
        'nome_cargo' => 'CEO',
        'subordinados' => [
            [
                'nome_cargo' => 'Diretor Comercial',
                'subordinados' => [
                    [
                        'nome_cargo' => 'Gerente de Vendas'
                    ]
                ]
            ],
            [
                'nome_cargo' => 'Diretor Financeiro',
                'subordinados' => [
                    [
                        'nome_cargo' => 'Gerente de Contas a Pagar',
                        'subordinados' => [
                            [
                                'nome_cargo' => 'Supervisor de Pagamentos'
                            ]
                        ]
                    ],
                    [
                        'nome_cargo' => 'Gerente de Compras',
                        'subordinados' => [
                            [
                                'nome_cargo' => 'Supervisor de Suprimentos'
                            ]
                        ]
                    ]
                ]
            ]
        ]
    ]
];

function exibe(array $cargos): string
{
    $html = '<ul>';

    foreach ($cargos as $cargo) {
        $html .= '<li>';
        $html .= $cargo['nome_cargo'];
        if (isset($cargo['subordinados']) && count($cargo['subordinados']) > 0) {
            $html .= exibe($cargo['subordinados']);
        }
        $html .= '</li>';
    }

    $html .= '</ul>';

    return $html;
}

echo exibe($hierarquia);