<?php

namespace Src\Shared\Dominio;

class CPF {
    private String $numero;

    public function __construct(String $numero)
    {
        $this->setNumero($numero);
    }

    private function setNumero(String $numero): Void {
        $opcoes = [
            "options" => [
                "regexp" => '/\d{3}\.\d{3}\.\d{3}\-\d{2}/'
            ]
        ];

        if (filter_var($numero, FILTER_VALIDATE_REGEXP, $opcoes) === false) {
            throw new \InvalidArgumentException("CPF no formato inválido");
        }

        $this->numero = $numero;
    }

    public function __toString(): String {
        return $this->numero;
    }
}