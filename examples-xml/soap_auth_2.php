<?php

#Define Authentication 
$SOAP_AUTH = array('login' => 'webservice',
    'password' => 'webservice',
    'encoding' => 'utf-8',
    "sap-client" => "350",
        //"exceptions" => 1,
        //'use' => SOAP_LITERAL,
        //'style' => SOAP_DOCUMENT,
);

#Specify WSDL
$WSDL = "http://s4qa.gruposanchez.com.mx:8000/sap/bc/srt/wsdl/flv_10000A101AD0/bndg_url/sap/bc/srt/rfc/sap/zpruebaphp/350/zpruebasphp/zpruebasphp?sap-client=350";


#Create Client Object, download and parse WSDL
$client = new SoapClient($WSDL, $SOAP_AUTH);

#Setup input parameters (SAP Likes to Capitalise the parameter names)
$params = array(
    "pruebaphp" => array(
        "Zpruebaphp" => array(
            "Pregistro" => "Bernabe",
            "Pvalor" => "Gutierrez",
        )
    ),
        );

//$params = array(
//    "Pregistro" => "Bernabe",
//    "Pvalor" => "Gutierrez",
//        )
//;

$soapHeader = array(
);

echo '<pre>' . json_encode($params, JSON_PRETTY_PRINT) . '</pre>';
echo '<pre>' . json_encode($client->__getTypes(), JSON_PRETTY_PRINT) . '</pre>';
echo '<pre>' . json_encode($client->__getFunctions(), JSON_PRETTY_PRINT) . '</pre>';
//echo '<pre>' . json_encode($client->__soapCall("ZpruebaphpResponse ",$params), JSON_PRETTY_PRINT) . '</pre>';
echo '<pre>' . json_encode($client->__getTypes(), JSON_PRETTY_PRINT) . '</pre>';
#Call Operation (Function). Catch and display any errors
//var_dump($client->__getLastResponse());
try {
    $result = $client->Zpruebaphp($params);
    var_dump($result);

    // $result2 =$client->__getFunctions();
} catch (SoapFault $exception) {
    //print_r($exception);
    echo '<pre>' . json_encode($exception, JSON_PRETTY_PRINT) . '</pre>';
    die();
}
?>