<?php
// Array with names
$a[] = "alguna tesis con a ";
$a[] = "Replicacion de base de datos";
$a[] = "Aplicacion para consultorio dental";


// get the q parameter from URL
$q = $_REQUEST["q"];

$hint = "";

// lookup all hints from array if $q is different from "" 
if ($q !== "") {
    $q = strtolower($q);
    $len=strlen($q);
    foreach($a as $name) {
        if (stristr($q, substr($name, 0, $len))) {
            if ($hint === "") {
                $hint = $name;
            } else {
                $hint .= "<br /> $name";
            }
        }
    }
}

// Output "no suggestion" if no hint was found or output correct values 
echo $hint === "" ? "<br />no se encontraron tesis con ese nombre" : $hint;
?>