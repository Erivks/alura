<?php

namespace Src\Academico\Dominio\Aluno;

use Src\Shared\Dominio\Evento;
use Src\Shared\Dominio\Evento\OuvinteEvento;
class LogAlunoMatriculado extends OuvinteEvento {
    
    /** @param AlunoMatriculado $alunoMatriculado */
    public function reageAo(Evento $alunoMatriculado): void {
        fprintf(
            STDERR,
            "Aluno com CPF %s foi matriculado na data %s",
            (string) $alunoMatriculado->cpfAluno(),
            $alunoMatriculado->momento()->format("d/m/Y")
        );
    }

    public function sabeProcessar(Evento $evento): bool {
        return $evento->nome() === "aluno_matriculado";
    }
}