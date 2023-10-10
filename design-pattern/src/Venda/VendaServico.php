<?php

namespace Src\Venda;

class VendaServico extends Venda {
    private string $nomePrestador;

    public function __construct(\DateTimeInterface $dataRealizacao, String $nomePrestador)
    {
        parent::__construct($dataRealizacao);
        $this->nomePrestador = $nomePrestador;
    } 
}