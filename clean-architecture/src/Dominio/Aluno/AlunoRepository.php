<?php

namespace Src\Dominio\Aluno;

use Src\Dominio\CPF;

interface AlunoRepository {
    public function addAluno(Aluno $aluno): Void;
    public function getByCpf(CPF $cpf): Aluno;

    /** @return Aluno[] */
    public function getAll(): Array;
}