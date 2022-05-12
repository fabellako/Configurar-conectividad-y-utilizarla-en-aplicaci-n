<?php

$conectarBD=mysqli_connect("localhost","root","","BANCOLIA4");
if (!$conectarBD) {
    die ("No hay conexion de la conejera");
} else{

    echo "Conexion establecida";
}

?>