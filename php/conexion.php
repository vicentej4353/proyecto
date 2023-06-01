<?php
$conexion = new mysqli ("naturalmountain.com.es","naturalmountain","Septiembre97","vmm_proyecto_solvam");
if ($conexion->connect_error){
    die('no se ha podido conectar');
}else{
    echo "conectada";
}

?>

