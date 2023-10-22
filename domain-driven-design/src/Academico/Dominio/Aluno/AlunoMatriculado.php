<?php

namespace Src\Academico\Dominio\Aluno;

use Src\Shared\Dominio\CPF;
use Src\Shared\Dominio\Evento;

class AlunoMatriculado extends Evento {
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

    public function toArray(): array {
        return get_object_vars($this);
    }

    public function nome(): string {
        return "aluno_matriculado";
    }

}