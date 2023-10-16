<?php

namespace Src\Testes;

use PHPUnit\Framework\TestCase;
use Src\Dominio\Aluno\Aluno;

class AlunoTest extends TestCase {
    public function testNaoDeveConterMaisDeDoisTelefones() {
        $this->expectException(\Exception::class);
        Aluno::comCpfEmailENome("123.456.789-70", "erick@teste.com", "Erick")
        ->addTelefone("21", "966751452")
        ->addTelefone("21", "966751457")
        ->addTelefone("21", "966751456");
    }
}