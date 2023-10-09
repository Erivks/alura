<?php

namespace Src\Relatorio;

interface iArquivo {
    public function salvar(Conteudo $conteudoExportado): string;
}