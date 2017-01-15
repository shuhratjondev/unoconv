<?php

require __DIR__ . '/../vendor/autoload.php';

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);




// Example start

use Unoconv\Converter;
use Unoconv\UnoconvParameters;
use Unoconv\Format;

$converter = new Converter();
$parameters = (new UnoconvParameters())
    ->setInputFile(__DIR__ . '/data/odt.odt')
    ->setOutputFormat(Format::FORMAT_WEB_HTML);

$result = $converter->convert($parameters);

// Example finish


echo $result;
