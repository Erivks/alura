<?php

namespace Src\Academico\Dominio;

interface Evento {
    public function momento(): \DateTimeImmutable;
}