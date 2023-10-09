<?php

namespace Src\Relatorio;

class ArquivoXml {
    private string $nomeElementoPai;

    public function __construct(String $nomeElementoPai) {
        $this->nomeElementoPai = $nomeElementoPai;
    }

    public function salvar(Conteudo $conteudoExportado): String {
        $elementoXml = new \SimpleXMLElement("<{$this->nomeElementoPai}/>");
        foreach ($conteudoExportado->conteudo() as $item => $valor) {
            $elementoXml->addChild($item, $valor);
        }

        $caminhoArquivo = tempnam(sys_get_temp_dir(), "XML");
        $elementoXml->asXML($caminhoArquivo);

        return $caminhoArquivo;
    }
}