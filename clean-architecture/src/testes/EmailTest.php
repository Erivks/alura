<?php

namespace Src\Testes;

use PHPUnit\Framework\TestCase;
use Src\Email;

class EmailTest extends TestCase {
    public function testEmailDeveSerValido() {
        $this->expectException(\InvalidArgumentException::class);
        new Email("Email invalido");
    }

    public function testEmailDeveSerRepresentadoComoString() {
        $email = new Email("erick.santos@planium.io");
        $this->assertSame("erick.santos@planium.io", (string)$email);
    }
}