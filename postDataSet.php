<?php

$errorMSG = "";
$a=array();
if (empty($_POST["Kunnr"])) {
    $errorMSG .= "Kunnr is required ";
    array_push($a,"Kunnr is required ");
} else {
    $Kunnr = $_POST["Kunnr"];
}
if (empty($_POST["Name1"])) {
    $errorMSG .= "Name1 is required ";
    array_push($a,"Name1 is required ");
} else {
    $Name1 = $_POST["Name1"];
}
if (empty($_POST["Stcd1"])) {
    $errorMSG .= "Stcd1 is required ";
    array_push($a,"Stcd1 is required ");
} else {
    $Stcd1 = $_POST["Stcd1"];
}
if (empty($_POST["Mcod3"])) {
    $errorMSG .= "Mcod3 is required ";
    array_push($a,"Mcod3 is required ");
} else {
    $Mcod3 = $_POST["Mcod3"];
}
if (empty($_POST["Regio"])) {
    $errorMSG .= "Regio is required ";
    array_push($a,"Regio is required ");
} else {
    $Regio = $_POST["Regio"];
}
if (empty($_POST["Land1"])) {
    $errorMSG .= "Land1 is required ";
    array_push($a,"Land1 is required ");
} else {
    $Land1 = $_POST["Land1"];
}
if (empty($_POST["Pstlz"])) {
    $errorMSG .= "Pstlz is required ";
    array_push($a,"Pstlz is required ");
} else {
    $Pstlz = $_POST["Pstlz"];
}
if (empty($_POST["Telf1"])) {
    $errorMSG .= "Telf1 is required ";
    array_push($a,"Telf1 is required ");
} else {
    $Telf1 = $_POST["Telf1"];
}
if (empty($_POST["Erdat"])) {
    $errorMSG .= "Erdat is required ";
    array_push($a,"Erdat is required ");
} else {
    $Erdat = $_POST["Erdat"];
}
if (empty($_POST["Altkn"])) {
    $errorMSG .= "Altkn is required ";
    array_push($a,"Altkn is required ");
} else {
    $Altkn = $_POST["Altkn"];
}
//EtItemData//
if (empty($_POST["Maktx"])) {
    $errorMSG .= "Maktx is required ";
    array_push($a,"Maktx is required ");
} else {
    $Maktx = $_POST["Maktx"];
}
if (empty($_POST["Matnr"])) {
    $errorMSG .= "Matnr is required ";
    array_push($a,"Matnr is required ");
} else {
    $Matnr = $_POST["Matnr"];
}
if (empty($_POST["Matkl"])) {
    $errorMSG .= "Matkl is required ";
    array_push($a,"Matkl is required ");
} else {
    $Matkl = $_POST["Matkl"];
}
if (empty($_POST["Meins"])) {
    $errorMSG .= "Meins is required ";
    array_push($a,"Meins is required ");
} else {
    $Meins = $_POST["Meins"];
}
if (empty($_POST["Mtart"])) {
    $errorMSG .= "Mtart is required ";
    array_push($a,"Mtart is required ");
} else {
    $Mtart = $_POST["Mtart"];
}
//EtPricebpData
if (empty($_POST["Matnr"])) {
    $errorMSG .= "Matnr is required ";
    array_push($a,"Matnr is required ");
} else {
    $Matnr = $_POST["Matnr"];
}
if (empty($_POST["Maktg"])) {
    $errorMSG .= "Maktg is required ";
    array_push($a,"Maktg is required ");
} else {
    $Maktg = $_POST["Maktg"];
}
if (empty($_POST["Knumh"])) {
    $errorMSG .= "Knumh is required ";
    array_push($a,"Knumh is required ");
} else {
    $Knumh = $_POST["Knumh"];
}
if (empty($_POST["Kbetr"])) {
    $errorMSG .= "Kbetr is required ";
    array_push($a,"Kbetr is required ");
} else {
    $Kbetr = $_POST["Kbetr"];
}
if (empty($_POST["Konwa"])) {
    $errorMSG .= "Konwa is required ";
    array_push($a,"Konwa is required ");
} else {
    $Konwa = $_POST["Konwa"];
}
if (empty($_POST["Kunnr"])) {
    $errorMSG .= "Kunnr is required ";
    array_push($a,"Kunnr is required ");
} else {
    $Kunnr = $_POST["Kunnr"];
}
if (empty($_POST["Kdmat"])) {
    $errorMSG .= "Kdmat is required ";
    array_push($a,"Kdmat is required ");
} else {
    $Kdmat = $_POST["Kdmat"];
}
//EtPricematData

if (empty($_POST["Matnr"])) {
    $errorMSG .= "Matnr is required ";
    array_push($a,"Matnr is required ");
} else {
    $Matnr = $_POST["Matnr"];
}
if (empty($_POST["Maktg"])) {
    $errorMSG .= "Maktg is required ";
    array_push($a,"Maktg is required ");
} else {
    $Maktg = $_POST["Maktg"];
}
if (empty($_POST["Knumh"])) {
    $errorMSG .= "Knumh is required ";
    array_push($a,"Knumh is required ");
} else {
    $Knumh = $_POST["Knumh"];
}
if (empty($_POST["Kbetr"])) {
    $errorMSG .= "Kbetr is required ";
    array_push($a,"Kbetr is required ");
} else {
    $Kbetr = $_POST["Kbetr"];
}
if (empty($_POST["Konwa"])) {
    $errorMSG .= "Konwa is required ";
    array_push($a,"Konwa is required ");
} else {
    $Konwa = $_POST["Konwa"];
}

//EtPricesucData

if (empty($_POST["Matnr"])) {
    $errorMSG .= "Matnr is required ";
    array_push($a,"Matnr is required ");
} else {
    $Matnr = $_POST["Matnr"];
}
if (empty($_POST["Maktg"])) {
    $errorMSG .= "Maktg is required ";
    array_push($a,"Maktg is required ");
} else {
    $Maktg = $_POST["Maktg"];
}
if (empty($_POST["Knumh"])) {
    $errorMSG .= "Knumh is required ";
    array_push($a,"Knumh is required ");
} else {
    $Knumh = $_POST["Knumh"];
}
if (empty($_POST["Kbetr"])) {
    $errorMSG .= "Kbetr is required ";
    array_push($a,"Kbetr is required ");
} else {
    $Kbetr = $_POST["Kbetr"];
}
if (empty($_POST["Konwa"])) {
    $errorMSG .= "Konwa is required ";
    array_push($a,"Konwa is required ");
} else {
    $Konwa = $_POST["Konwa"];
}
if (empty($_POST["Vkbur"])) {
    $errorMSG .= "Vkbur is required ";
    array_push($a,"Vkbur is required ");
} else {
    $Vkbur = $_POST["Vkbur"];
}

