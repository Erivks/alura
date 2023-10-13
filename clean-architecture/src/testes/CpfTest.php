<?php

namespace Src\Testes;

use PHPUnit\Framework\TestCase;
use Src\CPF;

class CpfTest extends TestCase {
    public function testCpfDeveSerValido() {
        $this->expectException(\InvalidArgumentException::class);
        new CPF("12345678970");
    }

    public function testCpfDeveSerRepresentadoComoString() {
        $cpf = new CPF("197.126.478-16");
        $this->assertSame("197.126.478-16", (string)$cpf);
    }
}