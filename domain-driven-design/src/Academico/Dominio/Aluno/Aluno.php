<?php

namespace Src\Academico\Dominio\Aluno;

use Src\Academico\Dominio\Email;
use Src\Shared\Dominio\CPF;

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
        $this->telefone = [];
    }

    public function addTelefone(String $ddd, String $numero): self {
        if (count($this->telefone) === 2) {
            throw new \Exception("Aluno com mais de 2 telefones");
        }

        $this->telefone[] = new Telefone($ddd, $numero);
        return $this;
    }

    public function getCpf(): CPF {
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