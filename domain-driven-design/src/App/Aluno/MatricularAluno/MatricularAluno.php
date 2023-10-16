<?php

namespace Src\Aplicacao\Aluno\MatricularAluno;

use Src\Dominio\Aluno\Aluno;
use Src\Dominio\Aluno\AlunoRepository;

class MatricularAluno
{
    private AlunoRepository $repositorioDeAluno;

    public function __construct(AlunoRepository $repositorioDeAluno)
    {
        $this->repositorioDeAluno = $repositorioDeAluno;
    }

    public function executa(MatricularAlunoDto $dados): void
    {
        $aluno = Aluno::comCpfEmailENome($dados->cpfAluno, $dados->nomeAluno, $dados->emailAluno);
        $this->repositorioDeAluno->addAluno($aluno);
    }
}
