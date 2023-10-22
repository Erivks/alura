<?php

namespace Src\Gamificacao\Dominio\Selo;

use Src\Shared\Dominio\CPF;

class Selo {
    private CPF $cpfAluno;
    private string $nome;
    const NOVATO = "novato";

    public function __construct(CPF $cpfAluno, String $nome) {
        $this->cpfAluno = $cpfAluno;
        $this->nome     = $nome;
    }

    public function cpfAluno(): CPF {
        return $this->cpfAluno;
    }
}