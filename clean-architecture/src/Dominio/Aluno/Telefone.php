<?php

namespace Src\Dominio\Aluno;

use InvalidArgumentException;

class Telefone {
    private String $ddd;
    private String $numero;

    public function __construct(String $ddd, String $numero)
    {
        $this->setDdd($ddd);  
        $this->setNumero($numero);  
    }

    private function setDdd(String $ddd): Void {
        $opcoes = [
            "options" => [
                "regexp" => '/\d{2}/'
            ]
        ];

        if (filter_var($ddd, FILTER_VALIDATE_REGEXP, $opcoes) === false) {
            throw new InvalidArgumentException("DDD no formato inválido");
        }

        $this->ddd = $ddd;
    }

    private function setNumero(String $numero): Void {
        $opcoes = [
            "options" => [
                "regexp" => '/\d{8,9}/'
            ]
        ];

        if (filter_var($numero, FILTER_VALIDATE_REGEXP, $opcoes) === false) {
            throw new InvalidArgumentException("Numero no formato inválido");
        }

        $this->numero = $numero;
    }

    public function getDdd(): String {
        return $this->ddd;
    }

    public function getNumero(): String {
        return $this->numero;
    }

    public function __toString(): String {
        return "({$this->ddd}) {$this->numero}";
    }
}