<?php

namespace Src;

use Src\Http\HttpAdapter;
use Src\EstadosOrcamento\Finalizado;

class RegistroOrcamento {

    private HttpAdapter $http;

    public function __construct(HttpAdapter $http) {
        $this->http = $http;
    }

    public function registrar(Orcamento $orcamento): Void {
        if (!$orcamento->estadoAtual instanceof Finalizado) {
            throw new \Exception("Orçamento precisa ser Finalizado!");
        }

        $this->http->post("", [
            "valor" => $orcamento->valor
        ]);
    }
}