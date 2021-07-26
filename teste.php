<?php

require_once "vendor/autoload.php";
use \AkaSacci\GetcnpjPhp\Search;
$mySearch = new Search();
$cnpj = "1"; //caso não haja nenhum dado no $_GET, a requisição é feita com um número planejado para dar erro.

if(isset($_GET['cnpj'])){
$cnpj = $_GET['cnpj'];
}

$resut = $mySearch->getDataFromCNPJ($cnpj);
print_r($resut);


?>