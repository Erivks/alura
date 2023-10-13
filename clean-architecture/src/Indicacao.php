<?php

namespace Src;

class Indicacao {
    private Aluno $indicador;
    private Aluno $indicado;
    private \DateTimeImmutable $data;

    public function __construct(Aluno $indicador, Aluno $indicado)
    {
        $this->indicador    = $indicador;
        $this->indicado     = $indicado;
        $this->data         = new \DateTimeImmutable();
    }
}