<?php
require_once "../config/config.php";
require_once "../model/db.php";
header("Content-Type: text/html;charset=utf-8");
$email = $_POST["mail"];
$pass = $_POST["password"];
$name = $_POST["name"];
$rol = 1;


//Filtro anti-XSS
$name = htmlspecialchars(mysqli_real_escape_string(conectar(), $name));
$pass = htmlspecialchars(mysqli_real_escape_string(conectar(), $pass));
$email = htmlspecialchars(mysqli_real_escape_string(conectar(), $email));


//Escribimos la consulta necesaria
$consultaUsuarios = "SELECT * FROM persona";

//Obtenemos los resultados
$verificacion = consultar($consultaUsuarios);
$obtDatos = mysqli_fetch_array($verificacion);
$emailBD = $obtDatos['email'];

//Si el input de usuario o contraseña está vacío, mostramos un mensaje de error
//Si el valor del input del usuario es igual a alguno que ya exista, mostramos un mensaje de error
if ($email == $emailBD) {
    header('Location: login.php?error=4');
} else {
    $consulta = insertarSQL("persona", "name,email,rol,pass", "'".$name."','".$email."','".$rol."','".$pass."'");
    if (!$consulta) {
        header("Location: ../view/login.php?error=5");
    } else {
        header('Location: ../view/login.php?exito=1');
        exit();
    }
}
?>