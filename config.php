<?php

use Greenter\See;
use Greenter\Ws\Services\SunatEndpoints;

$see = new See();
$see->setService(SunatEndpoints::FE_BETA);
$see->setCertificate(file_get_contents(__DIR__.'/certificate.pem'));
$see->setCredentials('20000000001MODDATOS', 'moddatos');

return $see;