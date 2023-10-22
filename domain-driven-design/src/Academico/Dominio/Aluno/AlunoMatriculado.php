<?php

namespace Src\Academico\Dominio\Aluno;

use Src\Shared\Dominio\CPF;
use Src\Academico\Dominio\Evento;

class AlunoMatriculado implements Evento {
    public \DateTimeImmutable $momento;
    public CPF $cpfAluno;

    public function __construct(CPF $cpfAluno) {
        $this->momento = new \DateTimeImmutable();
        $this->cpfAluno = $cpfAluno;
    }

    public function cpfAluno(): CPF {
        return $this->cpfAluno;
    }

    public function momento(): \DateTimeImmutable {
        return $this->momento;
    }


}