<?php

namespace Src\Gamificacao\Dominio\Selo;

use Src\Shared\Dominio\CPF;

interface SeloRepository {
    public function adiciona(Selo $selo): void;
    public function selosDeAlunoComCpf(CPF $cpf); 
}