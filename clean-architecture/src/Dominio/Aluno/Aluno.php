<?php

namespace Src\Dominio\Aluno;

use Src\Dominio\{CPF, Email};

class Aluno {
    private CPF $cpf;
    private String $nome;
    private Email $email;
    private array $telefone;

    public static function comCpfEmailENome(String $cpf, String $email, String $nome): Aluno {
        return new Aluno(new CPF($cpf), new Email($email), $nome); 
    }

    public function __construct(CPF $cpf, Email $email, String $nome) {
        $this->cpf      = $cpf;
        $this->email    = $email;
        $this->nome     = $nome;
    }

    public function addTelefone(String $ddd, String $numero): self {
        $this->telefone[] = new Telefone($ddd, $numero);
        return $this;
    }

    public function getCpf(): String {
        return $this->cpf;
    }

    public function getNome(): String {
        return $this->nome;
    }

    public function getEmail(): String {
        return $this->email;
    }

    public function getTelefone(): Array {
        return $this->telefone;
    }
}