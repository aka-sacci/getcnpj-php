# getcnpj-php

A simple project that returns the data of a organization with a valid brazilian EIN (CNPJ);

I developed this to study some concepts and functionalities of Composer and PHPUnit, so, a simple unitary test is attached to the project.

To make the requisition of data, [a external API was used](https://www.receitaws.com.br/). As it is free, the API has a limit of 3 queries per minute for each IP. There some another paid plans that increase this limit, but, for this project, subscribing to any of them is unnecessary.

## How to use in your project (via Composer)

Install the package:
>composer require aka-sacci/getcnpj-php

Require the dependencies of Composer:
>require_once "vendor/autoload.php";

Import the namespace to your project:
>use \AkaSacci\GetcnpjPhp\Search;

Declare the instance of the class:
>$mySearch = new Search();

Search to a CNPJ and get the data!
>$data = $mySearch->getDataFromCNPJ($sringCNPJ);


## Test scripts

To use the tests scripts, you must have the PHPUnit 8 or superior installed in yout project.

To run the simpler test, use:
>  vendor/bin/phpunit vendor/aka-sacci/getcnpj-php/tests --colors=always

To save the results in a TXT, use:
>  vendor/bin/phpunit vendor/aka-sacci/getcnpj-php/tests --testdox-text=tests_report.txt


