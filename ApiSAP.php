<?php

#Define Authentication 
$SOAP_AUTH = array('login' => 'webservice',
    'password' => 'webservice');

#Specify WSDL
$WSDL = "http://s4dev.gruposanchez.com.mx:8000/sap/bc/srt/wsdl/flv_10002A101AD1/bndg_url/sap/bc/srt/rfc/sap/zws_punto_venta/110/zws_punto_venta/enalce?sap-client=110";
//$WSDL = "http://s4qa.gruposanchez.com.mx:8000/sap/bc/srt/wsdl/flv_10002A111AD1/bndg_url/sap/bc/srt/rfc/sap/zws_crea_pedido/350/zws_crea_pedido/zws_crea_pedido?sap-client=350";

#Create Client Object, download and parse WSDL
//$client = new SoapClient($WSDL, $SOAP_AUTH);
$client = new SoapClient($WSDL, $SOAP_AUTH);

#Setup input parameters (SAP Likes to Capitalise the parameter names)
$params = array
    (
    "EtPosCabecero" => array("ZwsPosPedido" => array(
            "Mandt" => "",
            "Ticket" => "12",
            "Factura" => "12122",
            "DocType" => "ZVCA",
            "DistrChan" => "1000",
            "Division" => "15",
            "SalesOff" => "0A",
            "Pmnttrms" => "VM03",
            "PartNumb" => "0001",
        ),
    ),
    "EtPosDetalle" => array("ZwsPosPedido" => array(
            "Mandt" => "",
            "Ticket" => "12",
            "Factura" => "12122",
            "DocType" => "ZVCA",
            "ItmNumber" => "kg",
            "Material" => "1",
            "Plant" => "1",
            "StoreLoc" => "1",
            "ReqQty" => "1",
            "SalesUnit" => "1",
            "Kbetr" => "1",
            "Lote" => "1",
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

var_dump($xmlr);
//var_dump($params);
print_r($client->__getFunctions());
//#Call Operation (Function). Catch and display any errors
try {
    $result = $client->ZwsPosPedido($xmlr);
    
    var_dump($result);
    // $result2 =$client->__getFunctions();
} catch (SoapFault $exception) {
    header('Content-Type: application/json');
    $error = array("SapInternalError" => $exception);
    echo json_encode($error, JSON_PRETTY_PRINT);
    die();
}

#Out the results
print_r($result);
