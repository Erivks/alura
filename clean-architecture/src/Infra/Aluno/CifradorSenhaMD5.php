<?php

namespace Src\Infra\Aluno;

use Src\Dominio\Aluno\CifradorSenha;

class CifradorSenhaMD5 implements CifradorSenha {
    public function cifrar(String $senha): String {
        return md5($senha);
    }

    public function verificar(String $senhaOriginal, String $senhaCifrada): Bool {
        return md5($senhaOriginal) === $senhaCifrada;
    }
}