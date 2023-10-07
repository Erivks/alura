<?php

namespace Src\Http;

class CurlHttpAdapter implements HttpAdapter {
    public function post(String $url, Array $data = []): void {
        $curl = curl_init($url);
        curl_setopt($curl, CURLOPT_POST, json_encode($data));
    
        curl_exec($curl);
    }
}