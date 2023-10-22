<?php

namespace Src\Shared\Dominio;

abstract class Evento {
    private \DateTimeImmutable $momento;

    public function momento(): \DateTimeImmutable {
        return $this->momento;
    }

    public function toArray(): array {
        return get_object_vars($this);
    }
    
    abstract public function nome(): string;
}