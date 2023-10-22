<?php

namespace Src\Infra\Selo;

use Src\Dominio\CPF;
use Src\Dominio\Selo\Selo;
use Src\Dominio\Selo\SeloRepository;

class SeloRepositoryMemory implements SeloRepository {
    private array $selos = [];

    public function adiciona(Selo $selo): void
    {
        $this->selos[] = $selo;
    }

    public function selosDeAlunoComCpf(CPF $cpf)
    {
        return array_filter($this->selos, fn (Selo $selo) => $selo->cpfAluno() === $cpf);
    }


}