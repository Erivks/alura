<?php

namespace Src\Shared\Dominio\Evento;

use Src\Shared\Dominio\Evento;

abstract class OuvinteEvento {
    public function processa(Evento $evento): void {
        if ($this->sabeProcessar($evento)) {
            $this->reageAo($evento);
        }
    }

    abstract public function sabeProcessar(Evento $evento): bool;
    abstract public function reageAo(Evento $evento): void;
}