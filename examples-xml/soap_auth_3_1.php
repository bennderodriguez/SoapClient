<?php

/**
 * Consumo soap SAP PHP
 * Ing. Bernabe Gutierrez Rodriguez
 * 03/10/2018
 */
$SOAP_AUTH = array('login' => 'webservice',
    'password' => 'webservice',
    'encoding' => 'utf-8',
    "sap-client" => "350"
);

$WSDL = "http://s4qa.gruposanchez.com.mx:8000/sap/bc/srt/wsdl/flv_10000A101AD0/bndg_url/sap/bc/srt/rfc/sap/zpruebaphp/350/zpruebaphp/zpruebaphp?sap-client=350";

$client = new SoapClient($WSDL, $SOAP_AUTH);

#Setup input parameters (SAP Likes to Capitalise the parameter names)
$params = array(
    "Pregistro" => "Hola Gerardo",
    "Pvalor" => "Estamos transaccionando",
);


try {
    $result = $client->Zpruebaphp($params);
    var_dump($result);
} catch (SoapFault $exception) {
    print_r($exception);
    die();
}
?>