<?php

$errorMSG = "";

//Kunnr
if (empty($_POST["Kunnr"])) {
    $errorMSG = "Kunnr is required ";
} else {
    $Kunnr = $_POST["Kunnr"];
}
//Name1
if (empty($_POST["Name1"])) {
    $errorMSG .= "Name1 is required ";
} else {
    $Name1 = $_POST["Name1"];
}
//Stcd1
if (empty($_POST["Stcd1"])) {
    $errorMSG .= "Stcd1 is required ";
} else {
    $Stcd1 = $_POST["Stcd1"];
}
//Ort02
if (empty($_POST["Ort02"])) {
    $errorMSG .= "Ort02 is required ";
} else {
    $Ort02 = $_POST["Ort02"];
}
//Stras
if (empty($_POST["Stras"])) {
    $errorMSG .= "Stras is required ";
} else {
    $Stras = $_POST["Stras"];
}
//Mcod3
if (empty($_POST["Mcod3"])) {
    $errorMSG .= "Mcod3 is required ";
} else {
    $Mcod3 = $_POST["Mcod3"];
}
//Regio
if (empty($_POST["Regio"])) {
    $errorMSG .= "Regio is required ";
} else {
    $Regio = $_POST["Regio"];
}
//Land1
if (empty($_POST["Land1"])) {
    $errorMSG .= "Land1 is required ";
} else {
    $Land1 = $_POST["Land1"];
}
//Pstlz
if (empty($_POST["Pstlz"])) {
    $errorMSG .= "Pstlz is required ";
} else {
    $Pstlz = $_POST["Pstlz"];
}
//Telf1
if (empty($_POST["Telf1"])) {
    $errorMSG .= "Telf1 is required ";
} else {
    $Telf1 = $_POST["Telf1"];
}
//Erdat
if (empty($_POST["Erdat"])) {
    $errorMSG .= "Erdat is required ";
} else {
    $Erdat = $_POST["Erdat"];
}
//Altkn
if (empty($_POST["Altkn"])) {
    $errorMSG .= "Altkn is required ";
} else {
    $Altkn = $_POST["Altkn"];
}
//Maktx
if (empty($_POST["Maktx"])) {
    $errorMSG .= "Maktx is required ";
} else {
    $Maktx = $_POST["Maktx"];
}
//Matnr
if (empty($_POST["Matnr"])) {
    $errorMSG .= "Matnr is required ";
} else {
    $Matnr = $_POST["Matnr"];
}
//Matkl
if (empty($_POST["Matkl"])) {
    $errorMSG .= "Matkl is required ";
} else {
    $Matkl = $_POST["Matkl"];
}
//Meins
if (empty($_POST["Meins"])) {
    $errorMSG .= "Meins is required ";
} else {
    $Meins = $_POST["Meins"];
}
//Mtart
if (empty($_POST["Mtart"])) {
    $errorMSG .= "Mtart is required ";
} else {
    $Mtart = $_POST["Mtart"];
}
//Maktg
if (empty($_POST["Maktg"])) {
    $errorMSG .= "Maktg is required ";
} else {
    $Maktg = $_POST["Maktg"];
}
//Knumh
if (empty($_POST["Knumh"])) {
    $errorMSG .= "Knumh is required ";
} else {
    $Knumh = $_POST["Knumh"];
}
//Kbetr
if (empty($_POST["Kbetr"])) {
    $errorMSG .= "Kbetr is required ";
} else {
    $Kbetr = $_POST["Kbetr"];
}
//Konwa
if (empty($_POST["Konwa"])) {
    $errorMSG .= "Konwa is required ";
} else {
    $Konwa = $_POST["Konwa"];
}
//Kdmat
if (empty($_POST["Kdmat"])) {
    $errorMSG .= "Kdmat is required ";
} else {
    $Kdmat = $_POST["Kdmat"];
}
//Vkbur
if (empty($_POST["Vkbur"])) {
    $errorMSG .= "Vkbur is required ";
} else {
    $Vkbur = $_POST["Vkbur"];
}


// redirect to success page
if ($errorMSG == ""){
   echo "success";
}else{
    if($errorMSG == ""){
        echo "Something went wrong :(";
    } else {
        echo $errorMSG;
    }
}