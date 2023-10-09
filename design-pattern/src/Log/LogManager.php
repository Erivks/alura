<?php

namespace Src\Log;

abstract class LogManager {
    /**
     * @param String $severidade - Severidade da mensagem a ser logada.
     * @param String $mensagem - Mensagem a ser logada.
     * 
     * @return Void
     */
    public function log(String $severidade, String $mensagem): Void {
        /** @var LogWritter $logWritter */
        $logWritter = $this->criarLogWritter();

        $dataAtual = date("d/m/Y");
        $mensagemFormatada = "[$dataAtual][$severidade]: $mensagem";
        $logWritter->escreve($mensagemFormatada);
    }

    abstract public function criarLogWritter(): LogWritter;
}