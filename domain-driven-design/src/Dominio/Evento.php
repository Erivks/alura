<?php

namespace Src\Dominio;

interface Evento {
    public function momento(): \DateTimeImmutable;
}