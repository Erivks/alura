<?php

namespace Src\Academico\App;

use Src\Dominio\Aluno\Aluno;

interface EnviaEmailIndicacao {
    public function enviaPara(Aluno $alunoIndicado): void;
}