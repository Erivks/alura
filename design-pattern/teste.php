<?php
use Src\{CalculadoraDeDesconto, CalculadoraDeImpostos, Orcamento};
use Src\Impostos\{Iss, Icms};
require_once("vendor/autoload.php");

$orcamento = new Orcamento();
$orcamento->valor = 364;
$orcamento->quantidade = 10;

// STRATEGY
$calculadora = new CalculadoraDeImpostos();
print_r($calculadora->calcula($orcamento, new Icms()));

echo "\n";

// CHAIN OF RESPONSIBILITY
$calculadoraDesconto = new CalculadoraDeDesconto();
print_r($calculadoraDesconto->calcula($orcamento));