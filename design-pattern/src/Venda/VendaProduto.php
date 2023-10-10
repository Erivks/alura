<?php

namespace Src\Venda;

class VendaProduto extends Venda {
    /**
     * @var int Peso em gramas
     */
    private int $pesoProduto;

    public function __construct(\DateTimeInterface $dataRealizacao, String $pesoProduto)
    {
        parent::__construct($dataRealizacao);
        $this->pesoProduto = $pesoProduto;
    } 
}