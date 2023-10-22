<?php

namespace Src\Academico\App\Aluno\MatricularAluno;

use Src\Dominio\Aluno\Aluno;
use Src\Dominio\Aluno\AlunoMatriculado;
use Src\Dominio\Aluno\AlunoRepository;
use Src\Dominio\Aluno\LogAlunoMatriculado;
use Src\Dominio\PublicadorEvento;

class MatricularAluno
{
    private AlunoRepository $repositorioDeAluno;
    private PublicadorEvento $publicadorEvento;

    public function __construct(AlunoRepository $repositorioDeAluno)
    {
        $this->repositorioDeAluno   = $repositorioDeAluno;
        $this->publicadorEvento     = new PublicadorEvento();
        $this->publicadorEvento->addOuvinte(new LogAlunoMatriculado());
    }

    public function executa(MatricularAlunoDto $dados): void
    {
        $aluno = Aluno::comCpfEmailENome($dados->cpfAluno, $dados->nomeAluno, $dados->emailAluno);
        $this->repositorioDeAluno->addAluno($aluno);

        $evento = new AlunoMatriculado($aluno->getCpf());
        $this->publicadorEvento->publicar($evento);
    }
}
