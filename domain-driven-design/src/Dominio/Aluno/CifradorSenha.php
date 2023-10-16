<?php

namespace Src\Dominio\Aluno;

interface CifradorSenha {
    public function cifrar(String $senha): String;
    public function verificar(String $senhaOriginal, String $senhaCifrada): Bool;
}