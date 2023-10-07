<?php

namespace Src\Http;

interface HttpAdapter {
    public function post(String $url, Array $data = []): void;
}