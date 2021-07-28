<?php

namespace AkaSacci\tests;

use PHPUnit\Framework\TestCase;
use  AkaSacci\GetcnpjPhp\Search;

class SearchTest extends TestCase
{
    /**
    * @dataProvider dadosTeste
    */
    public function testGetDataFromCNPJDefaultUsage(string $input, $esperado)
    {
        $resultado = new Search();
        $resultado = $resultado->getDataFromCNPJ($input);
        $esperado = json_decode($esperado);
        $esperado = json_encode($esperado);
        //devido às quebras de linha, o esperado deve ser submetido à um decode e encode
        $this->assertEquals($esperado, json_encode($resultado));

        /*
        vendor/bin/phpunit diretório-de-testes/
        //--colors=always deixa coloridinho uiui
        //--testdox-text=nome-do-arq.txt retorna a analise do arquivo em um txt
        */
    }

    public function dadosTeste()
    {
        return [
            "GET CNPJ Prefeitura de Bom Jesus dos Perdões" => [
                "52359692000162",
            '{

            "atividade_principal": [
              {
                "text": "Administração pública em geral",
                "code": "84.11-6-00"
              }
            ],
            "data_situacao": "03/11/2005",
            "tipo": "MATRIZ",
            "nome": "MUNICIPIO DE BOM JESUS DOS PERDOES",
            "efr": "MUNICÍPIO DE BOM JESUS DOS PERDOES",
            "uf": "SP",
            "situacao": "ATIVA",
            "bairro": "CENTRO",
            "logradouro": "R DOM DUARTE LEOPOLDO",
            "numero": "83",
            "cep": "12.955-000",
            "municipio": "BOM JESUS DOS PERDOES",
            "porte": "DEMAIS",
            "abertura": "05/09/1986",
            "natureza_juridica": "124-4 - Município",
            "fantasia": "BOM JESUS DOS PERDOES GABINETE PREFEITO",
            "cnpj": "52.359.692/0001-62",
            "ultima_atualizacao": "2021-07-08T03:33:46.429Z",
            "status": "OK",
            "complemento": "",
            "email": "",
            "telefone": "",
            "motivo_situacao": "",
            "situacao_especial": "",
            "data_situacao_especial": "",
            "atividades_secundarias": [
              {
                "code": "00.00-0-00",
                "text": "Não informada"
              }
            ],
            "capital_social": "0.00",
            "qsa": [
              
            ],
            "extra": {
              
            },
            "billing": {
              "free": true,
              "database": true
            }
          }'
            ],

            "GET CNPJ JHONATAN CARECA" => [
            "25072293000143",
            '{
              "atividade_principal": [
                {
                  "text": "Instalação e manutenção elétrica",
                  "code": "43.21-5-00"
                }
              ],
              "data_situacao": "24/06/2016",
              "tipo": "MATRIZ",
              "nome": "JHONATAN TABAJARA DE OLIVEIRA 39628061801",
              "uf": "SP",
              "telefone": "(11) 5554-6146",
              "email": "jhonatanjt.9@gmail.com",
              "atividades_secundarias": [
                {
                  "text": "Reparação e manutenção de computadores e de equipamentos periféricos",
                  "code": "95.11-8-00"
                },
                {
                  "text": "Comércio varejista de outros artigos de uso pessoal e doméstico não especificados anteriormente",
                  "code": "47.59-8-99"
                }
              ],
              "qsa": [
                
              ],
              "situacao": "ATIVA",
              "bairro": "MASCATE",
              "logradouro": "R CAPELA DO DIVINO",
              "numero": "40",
              "cep": "12.960-000",
              "municipio": "NAZARE PAULISTA",
              "porte": "MICRO EMPRESA",
              "abertura": "24/06/2016",
              "natureza_juridica": "213-5 - Empresário (Individual)",
              "fantasia": "PROTEGIDOS",
              "cnpj": "25.072.293/0001-43",
              "ultima_atualizacao": "2021-06-26T18:49:05.987Z",
              "status": "OK",
              "complemento": "",
              "efr": "",
              "motivo_situacao": "",
              "situacao_especial": "",
              "data_situacao_especial": "",
              "capital_social": "1000.00",
              "extra": {
                
              },
              "billing": {
                "free": true,
                "database": true
              }
            }'
            ],
            "GET CNPJ Cãobeleleiro Banho e Tosa" => [
              "24.048.051/0001-51",
              '{
                "atividade_principal": [
                  {
                    "text": "Higiene e embelezamento de animais domésticos",
                    "code": "96.09-2-08"
                  }
                ],
                "data_situacao": "26/01/2016",
                "tipo": "MATRIZ",
                "nome": "GERSON PINTO SACCI 34580082842",
                "uf": "SP",
                "telefone": "(11) 4350-8128",
                "atividades_secundarias": [
                  {
                    "text": "Comércio varejista de animais vivos e de artigos e alimentos para animais de estimação",
                    "code": "47.89-0-04"
                  }
                ],
                "qsa": [
                  
                ],
                "situacao": "ATIVA",
                "bairro": "CENTRO",
                "logradouro": "R JOAO DE PASSOS",
                "numero": "484",
                "cep": "12.960-000",
                "municipio": "NAZARE PAULISTA",
                "porte": "MICRO EMPRESA",
                "abertura": "26/01/2016",
                "natureza_juridica": "213-5 - Empresário (Individual)",
                "fantasia": "CAOBELEREIRO",
                "cnpj": "24.048.051/0001-51",
                "ultima_atualizacao": "2021-06-25T20:42:53.845Z",
                "status": "OK",
                "complemento": "",
                "email": "",
                "efr": "",
                "motivo_situacao": "",
                "situacao_especial": "",
                "data_situacao_especial": "",
                "capital_social": "3000.00",
                "extra": {
                  
                },
                "billing": {
                  "free": true,
                  "database": true
                }
              }'
            ],

            "ERROR TOO MANY REQUESTS" => [
              '1',
              '{
                "status": "ERROR",
                "message": "Espere um minuto para tentar fazer uma nova requisição!",
                "errorCode": 101
              }'
            ]
        ];
    }
}
