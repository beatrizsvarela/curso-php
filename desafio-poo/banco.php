<?php

require_once 'src/Conta.php';
require_once 'src/Titular.php';
require_once 'src/Cpf.php';

$beatriz = new Titular(new Cpf('123.456.789-10'), 'Beatriz');
$primeiraConta = new Conta($beatriz);
$primeiraConta->depositar(500);
$primeiraConta->sacar(300);


echo $primeiraConta->getNomeTitular() . PHP_EOL;
echo $primeiraConta->getCpfTitular() . PHP_EOL;
echo $primeiraConta->recuperarSaldo() . PHP_EOL;

$segundaConta = new Conta(new Titular (new Cpf('687.345.123-10'), 'Ana Beatriz'));
var_dump($segundaConta);

echo Conta::recuperaNumeroDeContas() . PHP_EOL;