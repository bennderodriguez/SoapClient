<?php
$url = "http://ws.cdyne.com/ip2geo/ip2geo.asmx?wsdl";
try {
 $client = new SoapClient($url, [ "trace" => 1 ] );
 $result = $client->ResolveIP( [ "ipAddress" => "201.168.143.162", "licenseKey" => "0" ] );
 echo 'result array';
 print_r($result);
 
 echo 'parse json: ';
 
 echo json_encode($result);
} catch ( SoapFault $e ) {
 echo $e->getMessage();
}
//echo PHP_EOL;