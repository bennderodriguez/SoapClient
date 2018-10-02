<?php

#Define Authentication 
$SOAP_AUTH = array('login' => 'webservice',
    'password' => 'webservice',
    'encoding' => 'utf-8',
    "sap-client"=>"350",
);

#Specify WSDL
$WSDL = "http://s4qa.gruposanchez.com.mx:8000/sap/bc/srt/wsdl/flv_10000A101AD0/bndg_url/sap/bc/srt/rfc/sap/zpruebagetphp/350/zpruebagetphp/zpruebagetphp?sap-client=350";


#Create Client Object, download and parse WSDL
$client = new SoapClient($WSDL, $SOAP_AUTH);



#Setup input parameters (SAP Likes to Capitalise the parameter names)
$params = array(
    "EtItemData" => array(
        "Opcion" => "MA",
        "MA" => "1",
    ),
    //"sap-client"=>"350",
    "Opcion" => "MA",
        )
;

//$params = array(
//    "Pregistro" => "Bernabe",
//    "Pvalor" => "Gutierrez",
//        )
//;


//echo '<pre>' . json_encode($params, JSON_PRETTY_PRINT) . '</pre>';
echo '<pre>' . json_encode($client->__getTypes(), JSON_PRETTY_PRINT) . '</pre>';
//echo '<pre>' . json_encode($client->__getFunctions(), JSON_PRETTY_PRINT) . '</pre>';
#Call Operation (Function). Catch and display any errors

//var_dump($client->__getLastResponse());
try {
    $result = $client->Zpruebagetphp($params);


    // $result2 =$client->__getFunctions();
} catch (SoapFault $exception) {
    print "***Caught Exception***\n";
    //print_r($exception);
    echo '<pre>' . json_encode($exception) . '</pre>';
    print "***END Exception***\n";
    die();
}

//var_dump($result);
echo '<pre>' . json_encode($result, JSON_PRETTY_PRINT) . '</pre>';
?>