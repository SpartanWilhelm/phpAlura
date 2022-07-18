<?php

use Alura\Banco\Modelo\Conta\Conta;
use Alura\Banco\Modelo\Conta\ContaPoupanca;
use Alura\Banco\Modelo\Conta\Titular;
use Alura\Banco\Modelo\CPF;
use Alura\Banco\Modelo\Endereco;

require_once 'autoload.php';

$conta = new Conta(
    new Titular(
        new CPF(numero: '123.456.789-00'), 
        'Vinícius Dias', 
        new Endereco(cidade: 'Petropolis', bairro: 'bairro teste', rua: 'Rua Lá', numero: '37')
    )
);
$conta->deposita(valorADepositar: 500);
$conta->saca(valorASacar: 100);

echo $conta->recuperaSaldo();