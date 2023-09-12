<?php 

session_start();
require_once "../config/config.php";
require_once "../model/db.php";
header("Content-Type: text/html;charset=utf-8");
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
if(isset($_SESSION)){
    $id = $_SESSION['id'];
}


//Filtro anti-XSS
$fecha = htmlspecialchars(mysqli_real_escape_string(conectar(), $fecha));
$nombre = htmlspecialchars(mysqli_real_escape_string(conectar(), $nombre));
$apellido = htmlspecialchars(mysqli_real_escape_string(conectar(), $apellido));
$direccion = htmlspecialchars(mysqli_real_escape_string(conectar(), $direccion));
$tiempoRes = htmlspecialchars(mysqli_real_escape_string(conectar(), $tiempoRes));
$telefono = htmlspecialchars(mysqli_real_escape_string(conectar(), $telefono));
$numSeg = htmlspecialchars(mysqli_real_escape_string(conectar(), $numSeg));
$sabado = htmlspecialchars(mysqli_real_escape_string(conectar(), $sabado));
$viernes = htmlspecialchars(mysqli_real_escape_string(conectar(), $viernes));
$jueves = htmlspecialchars(mysqli_real_escape_string(conectar(), $jueves));
$miercoles = htmlspecialchars(mysqli_real_escape_string(conectar(), $miercoles));
$martes = htmlspecialchars(mysqli_real_escape_string(conectar(), $martes));
$lunes = htmlspecialchars(mysqli_real_escape_string(conectar(), $lunes));
$horasDisp = htmlspecialchars(mysqli_real_escape_string(conectar(), $horasDisp));
$nocturno = htmlspecialchars(mysqli_real_escape_string(conectar(), $nocturno));
$empDes = htmlspecialchars(mysqli_real_escape_string(conectar(), $empDes));


$consulta = insertarSQL("solicitud", "fecha,nombre,apellido,direccion,tiempoRes,telefono,numSeg,sabado,
                        viernes,jueves,miercoles,martes,lunes,horasDisp,nocturno,empDes,id_Usuario",
                        "'".$fecha."','".$nombre."','".$apellido."','".$direccion."','".$tiempoRes."','".$telefono."',
                        '".$numSeg."','".$sabado."','".$viernes."','".$jueves."','".$miercoles."','".$martes."',
                        '".$lunes."','".$horasDisp."','".$nocturno."','".$empDes."','".$id."'");
    if (!$consulta) {
        header("Location: ../view/solicitud.php?error=5");
    } else {
        header('Location: ../index.php?exito=1');
        exit();
    }
?>