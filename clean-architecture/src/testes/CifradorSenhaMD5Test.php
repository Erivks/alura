<?php

namespace Src\Testes;

use PHPUnit\Framework\TestCase;
use Src\Infra\Aluno\CifradorSenhaMD5;

class CifradorSenhaMD5Test extends TestCase {
    public function testSenhaDeveSerIgualAoHash() {
        $cifrador = new CifradorSenhaMD5();
        $senha = "080116";
        $senhaCifrada = md5($senha);
        $result = $cifrador->verificar($senha, $senhaCifrada);
        $this->assertTrue($result);
    }
}