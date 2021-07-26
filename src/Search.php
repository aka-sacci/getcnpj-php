<?php

namespace AkaSacci\GetcnpjPhp;

class Search {

    private $url = 'https://www.receitaws.com.br/v1/cnpj/';

    public function getDataFromCNPJ(string $cnpj): array{

        $cnpj = preg_replace('/[^0-9]/im', '', $cnpj);
        $getData = file_get_contents($this->url . $cnpj);
        return (array) json_decode($getData);
    }

}

?>