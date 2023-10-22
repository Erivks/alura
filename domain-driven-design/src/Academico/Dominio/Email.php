<?php

namespace Src\Academico\Dominio;

class Email {
    private String $endereco;

    public function __construct(String $endereco) {
        if (filter_var($endereco, FILTER_VALIDATE_EMAIL) === false) {
            throw new \InvalidArgumentException("Email inválido");
        }

        $this->endereco = $endereco;
    }

    public function __toString(): String
    {
        return $this->endereco;
    }
}