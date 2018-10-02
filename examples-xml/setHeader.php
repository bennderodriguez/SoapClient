<?php

$username = "webservice";
$password = "webservice";
$url = "http://s4qa.gruposanchez.com.mx:8000/sap/bc/srt/wsdl/flv_10002A111AD1/bndg_url/sap/bc/srt/rfc/sap/zws_crea_pedido/350/zws_crea_pedido/zws_crea_pedido?sap-client=350";

// Crear un flujo
$opciones = array(
    'http' => array(
        'method' => "POST",
        'header' => "Accept-language: en\r\n" .
        "Authorization: Basic " . base64_encode("$username:$password").
        //"Cookie: cCresweb=zrWzurPHtr7f39/f39/LzM3O39/f39+ekY2anQ=="
        "Cookie: cCresweb=zr66xrDHtr7f39/f39/LzM3O39/f39+ekY2anQ=="
       
    )
);

$contexto = stream_context_create($opciones);

echo $data = file_get_contents($url, false, $contexto);
