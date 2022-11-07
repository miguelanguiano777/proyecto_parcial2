<?php

    include 'conexion.php';

    $producto = $_POST["producto"];
    $precio = $_POST["precio"];
    $pago = $_POST["pago"];
    $metodo = $_POST["metodo"];
    $fecha_compra = $_POST["fecha_compra"];

    $sql = "INSERT INTO usuarios (producto, precio, metodo, pago, fecha_compra)". 
    "VALUES ('".$producto."', ".$precio.", ".$pago.",'".$metodo."','".$fecha_compra."')";

    if($conexion->query($sql) === TRUE){
     echo "Registro guardado con éxito <a href='consultarDatos.php'>Regresar</a>";
    }
    else{
     echo "Error: " .$sql. "<br>" .$consexion->error."<br><br><a href='consultarDatos.php'>Regresar</a>;";

    }

    $conexion->close();

?>