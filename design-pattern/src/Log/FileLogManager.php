<?php

namespace Src\Log;

/**
 * [Description FileLogManager]
 */
class FileLogManager extends LogManager {

    public String $caminhoArquivo;

    /**
     * @param String $caminhoArquivo
     */
    public function __construct(String $caminhoArquivo) {
        $this->caminhoArquivo = $caminhoArquivo;
    }

    /**
     * @return LogWritter
     */
    public function criarLogWritter(): LogWritter {
        return new FileLog($this->caminhoArquivo);
    }
}