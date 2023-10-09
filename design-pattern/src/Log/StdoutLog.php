<?php

namespace Src\Log;

class StdoutLog implements LogWritter {
    public function escreve(String $mensagemFormatada): Void {
        echo($mensagemFormatada);
    }
}