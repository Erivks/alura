<?php

namespace Src\Academico\Dominio\Aluno;

use Src\Shared\Dominio\CPF;

interface AlunoRepository {
    public function addAluno(Aluno $aluno): Void;
    public function getByCpf(CPF $cpf): Aluno;

    /** @return Aluno[] */
    public function getAll(): Array;
}