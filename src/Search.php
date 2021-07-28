<?php

namespace AkaSacci\GetcnpjPhp;

use Exception;

class Search
{

    private $url = 'https://www.receitaws.com.br/v1/cnpj/';

    public function getDataFromCNPJ(string $cnpj): array
    {

        $cnpj = preg_replace('/[^0-9]/im', '', $cnpj);

        try {
            return $this->queryData($cnpj);
        } catch (Exception $e) {
            return $arrayError = array(
               'status' => 'ERROR',
               'message' => $e->getMessage(),
               'errorCode' => $e->getCode()
            );
        }
    }

    public function queryData(string $cnpj): array
    {
        $getData = @file_get_contents($this->url . $cnpj);//o uso de @ suprime o warning
        if ($getData === false) {
            throw new Exception("Espere um minuto para tentar fazer uma nova requisição!", 101);
        } else {
            return (array) json_decode($getData);
        }
    }
}
