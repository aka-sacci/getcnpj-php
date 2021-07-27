<?php

use PHPUnit\Framework\TestCase;
use  AkaSacci\GetcnpjPhp\Search;


class SearchTest extends TestCase {

    /**
    * @dataProvider dadosTeste
    */

    public function testGetDataFromCNPJDefaultUsage(string $input, $esperado){
        $resultado = new Search();
        $resultado = $resultado->getDataFromCNPJ($input);
        $esperado = json_decode($esperado);
        $esperado = json_encode($esperado); //devido às quebras de linha, o esperado deve ser submetido à um decode e encode
        $this->assertEquals($esperado, json_encode($resultado));
        
        /*
        vendor/bin/phpunit diretório-de-testes/ 
        //--colors=always deixa coloridinho uiui
        //--testdox-text=nome-do-arq.txt retorna a analise do arquivo em um txt
        */


    }

    public function dadosTeste(){
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

        "GET CNPJ DELL" => [
            "72381189000110",
            '{
                "atividade_principal": [
                  {
                    "text": "Suporte técnico, manutenção e outros serviços em tecnologia da informação",
                    "code": "62.09-1-00"
                  }
                ],
                "data_situacao": "03/11/2005",
                "tipo": "MATRIZ",
                "nome": "DELL COMPUTADORES DO BRASIL LTDA",
                "uf": "RS",
                "telefone": "(51) 3274-5500",
                "email": "br_tax@dell.com",
                "atividades_secundarias": [
                  {
                    "text": "Fabricação de equipamentos de informática",
                    "code": "26.21-3-00"
                  },
                  {
                    "text": "Tratamento e disposição de resíduos não-perigosos",
                    "code": "38.21-1-00"
                  },
                  {
                    "text": "Representantes comerciais e agentes do comércio de mercadorias em geral não especializado",
                    "code": "46.19-2-00"
                  },
                  {
                    "text": "Comércio atacadista de equipamentos de informática",
                    "code": "46.51-6-01"
                  },
                  {
                    "text": "Comércio atacadista de suprimentos para informática",
                    "code": "46.51-6-02"
                  },
                  {
                    "text": "Comércio varejista especializado de equipamentos e suprimentos de informática",
                    "code": "47.51-2-01"
                  },
                  {
                    "text": "Desenvolvimento e licenciamento de programas de computador não-customizáveis",
                    "code": "62.03-1-00"
                  },
                  {
                    "text": "Consultoria em tecnologia da informação",
                    "code": "62.04-0-00"
                  },
                  {
                    "text": "Tratamento de dados, provedores de serviços de aplicação e serviços de hospedagem na internet",
                    "code": "63.11-9-00"
                  },
                  {
                    "text": "Portais, provedores de conteúdo e outros serviços de informação na internet",
                    "code": "63.19-4-00"
                  },
                  {
                    "text": "Outras sociedades de participação, exceto holdings",
                    "code": "64.63-8-00"
                  },
                  {
                    "text": "Pesquisa e desenvolvimento experimental em ciências físicas e naturais",
                    "code": "72.10-0-00"
                  },
                  {
                    "text": "Outras atividades de publicidade não especificadas anteriormente",
                    "code": "73.19-0-99"
                  },
                  {
                    "text": "Atividades de intermediação e agenciamento de serviços e negócios em geral, exceto imobiliários",
                    "code": "74.90-1-04"
                  },
                  {
                    "text": "Aluguel de outras máquinas e equipamentos comerciais e industriais não especificados anteriormente, sem operador",
                    "code": "77.39-0-99"
                  },
                  {
                    "text": "Serviços combinados de escritório e apoio administrativo",
                    "code": "82.11-3-00"
                  },
                  {
                    "text": "Preparação de documentos e serviços especializados de apoio administrativo não especificados anteriormente",
                    "code": "82.19-9-99"
                  },
                  {
                    "text": "Treinamento em informática",
                    "code": "85.99-6-03"
                  },
                  {
                    "text": "Treinamento em desenvolvimento profissional e gerencial",
                    "code": "85.99-6-04"
                  },
                  {
                    "text": "Reparação e manutenção de computadores e de equipamentos periféricos",
                    "code": "95.11-8-00"
                  }
                ],
                "qsa": [
                  {
                    "qual": "37-Sócio Pessoa Jurídica Domiciliado no Exterior",
                    "pais_origem": "PAÍSES BAIXOS (HOLANDA)",
                    "nome_rep_legal": "CARLOS FERNANDO COUTO DE OLIVEIRA SOUTO",
                    "qual_rep_legal": "17-Procurador",
                    "nome": "DELL GLOBAL BV"
                  },
                  {
                    "qual": "05-Administrador",
                    "nome": "JOAO BATISTA RIBEIRO"
                  },
                  {
                    "qual": "37-Sócio Pessoa Jurídica Domiciliado no Exterior",
                    "pais_origem": "PAÍSES BAIXOS (HOLANDA)",
                    "nome_rep_legal": "CARLOS FERNANDO COUTO DE OLIVEIRA SOUTO",
                    "qual_rep_legal": "17-Procurador",
                    "nome": "DELL GLOBAL HOLDINGS III B.V."
                  },
                  {
                    "qual": "05-Administrador",
                    "nome": "DIEGO TOMASETTO PUERTA"
                  }
                ],
                "situacao": "ATIVA",
                "bairro": "INDUSTRIAL",
                "logradouro": "AV INDUSTRIAL BELGRAF",
                "numero": "400",
                "cep": "92.990-000",
                "municipio": "ELDORADO DO SUL",
                "porte": "DEMAIS",
                "abertura": "24/06/1993",
                "natureza_juridica": "206-2 - Sociedade Empresária Limitada",
                "cnpj": "72.381.189/0001-10",
                "ultima_atualizacao": "2021-07-26T15:06:28.409Z",
                "status": "OK",
                "fantasia": "",
                "complemento": "",
                "efr": "",
                "motivo_situacao": "",
                "situacao_especial": "",
                "data_situacao_especial": "",
                "capital_social": "930607325.00",
                "extra": {
                  
                },
                "billing": {
                  "free": true,
                  "database": true
                }
              }'
        ]
        ];
    }

}

?>