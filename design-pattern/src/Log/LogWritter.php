<?php

namespace Src\Log;

interface LogWritter {
    public function escreve(String $mensagemFormatada): Void;
}