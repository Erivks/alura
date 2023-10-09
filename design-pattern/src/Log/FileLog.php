<?php

namespace Src\Log;

class FileLog implements LogWritter {
    private $arquivo;

    public function __construct(String $caminhoArquivo) {
        $this->arquivo = fopen($caminhoArquivo, "w");
    }

    public function escreve(String $mensagemFormatada): Void {
        fwrite($this->arquivo, $mensagemFormatada . PHP_EOL);
    }

    public function __destruct() {
        fclose($this->arquivo);
    }
}