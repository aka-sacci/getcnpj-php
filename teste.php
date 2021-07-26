<?php

require_once "vendor/autoload.php";
use \AkaSacci\GetcnpjPhp\Search;

$mySearch = new Search();

$resut = $mySearch->getDataFromCNPJ('52359692000162');

print_r($resut);


?>