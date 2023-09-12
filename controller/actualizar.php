<?php 

require_once "../config/config.php";
require_once "../model/db.php";
$id = $_GET["id"];
$fecha = $_POST["fecha"];
$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$direccion = $_POST["direccion"];
$tiempoRes = $_POST["tiempoRes"];
$telefono = $_POST["telefono"];
$numSeg = $_POST["numSeg"];
$sabado = $_POST["sabado"];
$viernes = $_POST["viernes"];
$jueves = $_POST["jueves"];
$miercoles = $_POST["miercoles"];
$martes = $_POST["martes"];
$lunes = $_POST["lunes"];
$horasDisp = $_POST["horasDisp"];
$nocturno = $_POST["nocturno"];
$empDes = $_POST["empDes"];

$query = "UPDATE solicitud SET fecha='$fecha' ,nombre ='$nombre' ,apellido ='$apellido', direccion ='$direccion'
,tiempoRes ='$tiempoRes' ,telefono ='$telefono' ,numSeg ='$numSeg' WHERE id ='$id'";

$consulta = consultar($query);
if(!$consulta){
    echo "no charcho padrino";
}else{
    header('Location: ../index.php?exito=1');
}

?>