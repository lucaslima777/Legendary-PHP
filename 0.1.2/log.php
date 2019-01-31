<?php

require __DIR__ . '/vendor/autoload.php';

use Monolog\Logger;
use Monolog\Handler\StreamHandler;

$logger = new Logger('log');
$logger->pushHandler(new StreamHandler('./app.log'), Logger::WARNING);

$logger->error('Erro gerado via monolog');

?>