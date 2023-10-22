<?php

namespace Src\Gamificacao\App;

use Src\Gamificacao\Dominio\Selo\Selo;
use Src\Gamificacao\Dominio\Selo\SeloRepository;
use Src\Shared\Dominio\Evento\OuvinteEvento;
use Src\Shared\Dominio\Evento;

class GeraSeloNovato implements OuvinteEvento {

    private SeloRepository $seloRepository;

    public function __construct(SeloRepository $seloRepository)
    {
        $this->seloRepository = $seloRepository;   
    }

    public function sabeProcessar(Evento $evento): bool {
        return $evento->nome() === "aluno_matriculado";
    }

    public function reageAo(Evento $evento): void {
        $dadosEvento = $evento->toArray();
        $cpf = $dadosEvento["cpf"];

        $selo = new Selo($cpf, Selo::NOVATO);
        $this->seloRepository->adiciona($selo);
    }
}