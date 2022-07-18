<?php

require_once 'autoload.php';

use Alura\Banco\Service\ControladorDeBonificacoes;
use Alura\Banco\Modelo\Conta\{ContaPoupanca, ContaCorrente, Titular};
use Alura\Banco\Modelo\{CPF, Endereco, Funcionario};

$umFuncionario = new Funcionario('Vinicius Dias', 
    new CPF (numero: '123.456.789-00'),
    cargo: 'Desenvolvedor',
    salario: 1000
);

$umaFuncionaria = new Funcionario('Patrícia', 
    new CPF ('987.654.321-00'),
    'Gerente',
    3000
);

$controlador = new ControladorDeBonificacoes();
$controlador->adicionaBonificacaoDe($umFuncionario);
$controlador->adicionaBonificacaoDe($umaFuncionaria);

echo $controlador->recuperaTotal();