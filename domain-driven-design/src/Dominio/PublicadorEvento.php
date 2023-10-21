<?php

namespace Src\Dominio;

use Src\Dominio\Aluno\OuvinteEvento;

class PublicadorEvento {
    private array $ouvintes;

    public function addOuvinte(OuvinteEvento $ouvinte): void {
        $this->ouvintes[] = $ouvinte;
    }

    public function publicar(Evento $evento): void {
        foreach ($this->ouvintes as $ouvinte) {
            $ouvinte->processa($evento);
        }
    }
}