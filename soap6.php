<?php

$usuario = "webservice";
$pass = "webservice";
$wsdl = "http://s4dev.gruposanchez.com.mx:8000/sap/bc/srt/wsdl/flv_10002A101AD1/bndg_url/sap/bc/srt/rfc/sap/zws_punto_venta/110/zws_punto_venta/enalce?sap-client=110";
$client = new SoapClient($wsdl, array(
'location' => 'http://schemas.xmlsoap.org/soap/envelope/',
'uri' => '',
'trace' => 1,
'soap_version' => 'SOAP_1_1',
'login' => $usuario,
'password' => $pass
));
var_dump($client);
$array1 = 
          array
          ( 
           "EtBusinesspData" => array( "item" => array(   
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
           "EtItemData" => array( "item" => array(   
                                   "Matnr" => "1",
                                   "Maktx" => "1",
                                   "Matkl" => "1",
                                   "Meins" => "1",
                                   "Mtart" => "1",
                                            ),
            ),
           "EtPricebpData" => array( "item" => array(   
                                   "Matnr" => "1",
                                   "Maktg" => "1",
                                   "Knumh" => "1",
                                   "Kbetr" => "1",
                                   "Konwa" => "1",
                                   "Kunnr" => "1",
                                   "Kdmat" => "1",
                                            ),
            ),
           "EtPricematData" => array( "item" => array(   
                                   "Matnr" => "1",
                                   "Maktg" => "1",
                                   "Knumh" => "1",
                                   "Kbetr" => "1",
                                   "Konwa" => "1",
                                            ),
            ),
           "EtPricesucData" => array( "item" => array(   
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
$array2 = array('soapaction' => 'urn:sap-com:document:sap:soap:functions:mc-style:ZWS_CREA_PEDIDO:ZwsPosPedidoRequest',
                            'uri' => 'http://s4dev.gruposanchez.com.mx:8000/sap/bc/srt/wsdl/flv_10002A101AD1/bndg_url/sap/bc/srt/rfc/sap/zws_punto_venta/110/zws_punto_venta/enalce?sap-client=110');
$auth = "<username>webservice</username>";
$auth .= "<password>webservice</password>";
$auth_block = new SoapVar( $auth, XSD_ANYXML, NULL, NULL, NULL, NULL );

$header = new SoapHeader( 'http://schemas.xmlsoap.org/soap/envelope/', 'Header', $auth_block );

$client->__setSoapHeaders( $header );

echo '<h2>Fault</h2><pre>';
var_dump($client->__getFunctions());
print_r($client);
echo '</pre>';

try{

        $response = $client->ZwsDataPto($array1, $array2, $header);
        
        var_dump($response);
        $xml = simplexml_load_string($response);
        foreach( $xml->children() as $child ) {
            echo $child->EtBusinesspData;
        }
    }
    catch (SoapFault $exception){
          echo "<pre>" .$exception.  "</pre>";
          echo "<pre>" .get_class($exception).  "</pre>";
        //var_dump(get_class($exception));
        //var_dump($exception);
    }
?>


