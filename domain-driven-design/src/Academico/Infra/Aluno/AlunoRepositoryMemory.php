<?php

namespace Src\Academico\Infra\Aluno;

use Src\Academico\Dominio\Aluno\Aluno;
use Src\Academico\Dominio\Aluno\AlunoRepository;
use Src\Shared\Dominio\CPF;

class AlunoRepositoryMemory implements AlunoRepository {
    
    private array $alunos;

    public function addAluno(Aluno $aluno): void
    {
        $this->alunos[] = $aluno;
    }

    public function getByCpf(CPF $cpf): Aluno
    {
        $alunos = array_filter(
            $this->alunos,
            fn (Aluno $aluno) => $aluno->getCpf() == $cpf
        );

        if (count($alunos) === 0) {
            throw new \Exception("Não foi possivel encontrar o aluno com o CPF $cpf");
        }

        return $alunos[0];
    }

    public function getAll(): array
    {
        return $this->alunos;
    }
}