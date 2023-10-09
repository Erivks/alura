<?php

namespace Src\Relatorio;

class ArquivoZip implements iArquivo {
    private string $nomeArquivoLocal;

    public function __construct(String $nomeArquivoLocal) {
        $this->nomeArquivoLocal = $nomeArquivoLocal;
    }

    public function salvar(Conteudo $conteudoExportado): String {
        $caminhoArquivo = tempnam(sys_get_temp_dir(), "ZIP");
        $arquivoZip = new \ZipArchive();        
        $arquivoZip->open($caminhoArquivo);
        $arquivoZip->addFromString($this->nomeArquivoLocal, serialize($conteudoExportado->conteudo()));
        $arquivoZip->close();

        return $caminhoArquivo;
    }
}