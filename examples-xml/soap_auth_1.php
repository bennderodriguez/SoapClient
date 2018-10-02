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
    "EtPosCabecero" => array("ZwsPosPedido" => array(
            "Mandt" => "110",
            "Ticket" => "12",
            "Factura" => "12122",
            "DocType" => "ZVCA",
            "FechaAlta" => "27/09/2018",
            "SalesOrg" => "1",
            "DistrChan" => "1",
            "Division" => "15",
            "SalesOff" => "0A",
            "PurchNoC" => "1",
            "Pmnttrms" => "1",
            "PartRole" => "1",
            "PartNumb" => "1",
            "Country" => "1",
            "Langu" => "1",
            "Name" => "1",
            "City" => "1",
            "Street" => "1",
            "PostlCode" => "1",
            "Status" => "1",
            "Registros" => "1",
            "FechaCurrent" => "1",
            "PedidoSap" => "1",
            "EntregaSap" => "1",
            "FacturaSap" => "1",
        ),
    ),
    "EtPosDetalle" => array("ZwsPosPedidos" => array(
            "Mandt" => "110",
            "Ticket" => "12",
            "Factura" => "12122",
            "DocType" => "ZVCA",
            "ItmNumber" => "1",
            "Material" => "1",
            "StoreLoc" => "1",
            "ReqQty" => "1",
            "Kbetr" => "1",
            "Lore" => "1",
        ),
    ),
     "EtBusinesspData" => array("item" => array(
            "Kunnr" => "110",
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
            "Matnr" => "110",
            "Maktx" => "1",
            "Matkl" => "1",
            "Meins" => "1",
            "Mtart" => "1",
        ),
    ),
    "EtPricebpData" => array("item" => array(
            "Matnr" => "110",
            "Maktg" => "1",
            "Knumh" => "1",
            "Kbetr" => "1",
            "Konwa" => "1",
            "Kunnr" => "1",
            "Kdmat" => "1",
        ),
    ),
    "EtPricematData" => array("item" => array(
            "Matnr" => "110",
            "Maktg" => "1",
            "Knumh" => "1",
            "Kbetr" => "1",
            "Konwa" => "1",
        ),
    ),
    "EtPricesucData" => array("item" => array(
            "Matnr" => "110",
            "Maktg" => "1",
            "Knumh" => "1",
            "Kbetr" => "1",
            "Konwa" => "1",
            "Vkbur" => "1",
        ),
    ),
    "Opcion" => "0"
);

$xmlr = new SimpleXMLElement("<ZwsPosPedido></ZwsPosPedido>");
$xmlr->addChild('Mandt', '');
$xmlr->addChild('Ticket', '12');
$xmlr->addChild('Factura', '12122');
$xmlr->addChild('DocType', 'ZVCA');
$xmlr->addChild('FechaAlta', '27/09/2018');
$xmlr->addChild('SalesOrg', '1');
$xmlr->addChild('DistrChan', '1');
$xmlr->addChild('Division', '15');
$xmlr->addChild('SalesOff', '0A');
$xmlr->addChild('PurchNoC', '1');
$xmlr->addChild('Pmnttrms', '1');
$xmlr->addChild('PartRole', '1');
$xmlr->addChild('PartNumb', '1');
$xmlr->addChild('Country', '1');
$xmlr->addChild('Langu', '1');
$xmlr->addChild('Name', '1');
$xmlr->addChild('City', '1');
$xmlr->addChild('Street', '1');
$xmlr->addChild('PostlCode', '1');
$xmlr->addChild('Status', '1');
$xmlr->addChild('Registros', '1');
$xmlr->addChild('FechaCurrent', '1');
$xmlr->addChild('PedidoSap', '1');
$xmlr->addChild('EntregaSap', '1');
$xmlr->addChild('FacturaSap', '1');

echo '<pre>'.json_encode($params, JSON_PRETTY_PRINT).'</pre>';

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