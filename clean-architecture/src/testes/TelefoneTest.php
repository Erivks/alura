<?php

namespace Src\Testes;

use PHPUnit\Framework\TestCase;
use Src\Telefone;

class TelefoneTest extends TestCase {
    public function testDddDeveSerValido() {
        $this->expectException(\InvalidArgumentException::class);
        new Telefone("2", "40028922");
    }

    public function testNumeroDeveSerValido() {
        $this->expectException(\InvalidArgumentException::class);
        new Telefone("21", "6675740");
    }

    public function testTelefoneDeveSerRepresentadoComoString() {
        $telefone = new Telefone("21", "966757404");
        $this->assertSame("(21) 966757404", (string)$telefone);
    }
}