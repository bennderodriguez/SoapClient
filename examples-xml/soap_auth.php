<?php

#Define Authentication 
$SOAP_AUTH = array('login' => 'webservice',
    'password' => 'webservice');

#Specify WSDL
$WSDL = "http://s4dev.gruposanchez.com.mx:8000/sap/bc/srt/wsdl/flv_10002A101AD1/bndg_url/sap/bc/srt/rfc/sap/zws_punto_venta/110/zws_punto_venta/enalce?sap-client=110";

#Create Client Object, download and parse WSDL
$client = new SoapClient($WSDL, $SOAP_AUTH);

#Setup input parameters (SAP Likes to Capitalise the parameter names)
$params = array
    (
    "EtBusinesspData" => array("item" => array(
            "Kunnr" => "1",
            "Name1" => "1",
            "Stcd1" => "1",
            "Ort02" => "1",
            "Stras" => "1",
            "Mcod3" => "1",
            "Regio" => "1",
            "Land1" => "1",
            "Pstlz" => "1",
            "Telf1" => "1",
            "Erdat" => "1",
            "Altkn" => "1",
        ),
    ),
    "EtItemData" => array("item" => array(
            "Matnr" => "1",
            "Maktx" => "1",
            "Matkl" => "1",
            "Meins" => "1",
            "Mtart" => "1",
        ),
    ),
    "EtPricebpData" => array("item" => array(
            "Matnr" => "1",
            "Maktg" => "1",
            "Knumh" => "1",
            "Kbetr" => "1",
            "Konwa" => "1",
            "Kunnr" => "1",
            "Kdmat" => "1",
        ),
    ),
    "EtPricematData" => array("item" => array(
            "Matnr" => "1",
            "Maktg" => "1",
            "Knumh" => "1",
            "Kbetr" => "1",
            "Konwa" => "1",
        ),
    ),
    "EtPricesucData" => array("item" => array(
            "Matnr" => "1",
            "Maktg" => "1",
            "Knumh" => "1",
            "Kbetr" => "1",
            "Konwa" => "1",
            "Vkbur" => "1",
        ),
    ),
    "Opcion" => "0"
);

$rom = $client->__getFunctions();
//$rom = $client->
echo '<pre>' . json_encode($rom) . '</pre>';

#Call Operation (Function). Catch and display any errors
try {
    $result = $client->ZwsDataPto($params);
    var_dump($result);
    // $result2 =$client->__getFunctions();
} catch (SoapFault $exception) {
    print "***Caught Exception***\n";
    //print_r($exception);
    echo '<pre>' . json_encode($exception) . '</pre>';
    print "***END Exception***\n";
    die();
}
?>