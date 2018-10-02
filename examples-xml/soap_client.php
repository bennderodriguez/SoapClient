<?php

$username = "webservice";
$password = "webservice";
$url = "http://s4qa.gruposanchez.com.mx:8000/sap/bc/srt/wsdl/flv_10002A111AD1/bndg_url/sap/bc/srt/rfc/sap/zws_crea_pedido/350/zws_crea_pedido/zws_crea_pedido";

//Create the client object
$soapclient = new SoapClient($url);

//Use the functions of the client, the params of the function are in 
//the associative array
$params = array('sap-client' => '350', 'CityName' => 'Alicante');
$response = $soapclient->getWeather($params);

var_dump($response);

// Get the Cities By Country
$param = array('CountryName' => 'Spain');
$response = $soapclient->getCitiesByCountry($param);

var_dump($response);
