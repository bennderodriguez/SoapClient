<?php

include 'postDataSet.php';

if ($errorMSG == "") {
    echo 'hola';
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
                "Kunnr" => $Kunnr,
                "Name1" => $Name1,
                "Stcd1" => $Stcd1,
                "Ort02" => $Ort02,
                "Stras" => $Stras,
                "Mcod3" => $Mcod3,
                "Regio" => $Regio,
                "Land1" => $Land1,
                "Pstlz" => $Pstlz,
                "Telf1" => $Telf1,
                "Erdat" => $Erdat,
                "Altkn" => $Altkn,
            ),
        ),
        "EtItemData" => array("item" => array(
                "Matnr" => $Matnr,
                "Maktx" => $Maktx,
                "Matkl" => $Matkl,
                "Meins" => $Meins,
                "Mtart" => $Mtart,
            ),
        ),
        "EtPricebpData" => array("item" => array(
                "Matnr" => $Matnr,
                "Maktg" => $Maktg,
                "Knumh" => $Knumh,
                "Kbetr" => $Kbetr,
                "Konwa" => $Konwa,
                "Kunnr" => $Kunnr,
                "Kdmat" => $Kdmat,
            ),
        ),
        "EtPricematData" => array("item" => array(
                "Matnr" => $Matnr,
                "Maktg" => $Maktg,
                "Knumh" => $Knumh,
                "Kbetr" => $Kbetr,
                "Konwa" => $Konwa,
            ),
        ),
        "EtPricesucData" => array("item" => array(
                "Matnr" => $Matnr,
                "Maktg" => $Maktg,
                "Knumh" => $Knumh,
                "Kbetr" => $Kbetr,
                "Konwa" => $Konwa,
                "Vkbur" => $Vkbur,
            ),
        ),
        "Opcion" => "0"
    );

#Call Operation (Function). Catch and display any errors
    try {
        $result = $client->ZwsDataPto($params);
        var_dump($result);
        // $result2 =$client->__getFunctions();
    } catch (SoapFault $exception) {
        header('Content-Type: application/json');
        $error = array("SapInternalError" => $exception);
        echo json_encode($error, JSON_PRETTY_PRINT) ;
        die();
    }

#Out the results
    print_r($result);
} else {
    if ($errorMSG == "") {
        echo "Something went wrong :(";
    } else {
        header('Content-Type: application/json');
        $arr = array("dataSetError"=>$a);
        echo json_encode($arr, JSON_PRETTY_PRINT);
        
    }
}
?>