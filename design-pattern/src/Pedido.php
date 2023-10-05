<?php

namespace Src;

class Pedido {
    public String $nomeCliente;
    public \DateTimeInterface $dataFinalizacao;
    public Orcamento $orcamento;
}