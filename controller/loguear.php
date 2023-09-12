<?php

session_start();
require_once "../config/config.php";
require_once "../model/db.php";
header("Content-Type: text/html;charset=utf-8");

$email = $_POST['email'];
$pass = $_POST['pass'];

$verificacion = SelectSQL("persona","email='".$email."'");
$obtDatos = mysqli_fetch_array($verificacion);

if ($email == $obtDatos['email']) {
  if ($pass == $obtDatos['pass']) {
    $_SESSION['id'] = $obtDatos['id'];
    $_SESSION['nombre'] = $obtDatos['name'];
    $_SESSION['email'] = $obtDatos['email'];
    $_SESSION['rol'] = $obtDatos['rol'];
    header("Location: ../index.php");
  }else
    header("Location: ../view/login.php?error=1");
}else
  header("Location: ../view/login.php?error=2");


?>