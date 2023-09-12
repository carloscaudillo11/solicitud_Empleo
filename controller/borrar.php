<?php 
require_once "../config/config.php";
require_once "../model/db.php";
$id = $_POST['id'];
if(DeleteSQL("solicitud","id = ".$id)){
    header("Location: ../index.php");
}else{
    header("Location: ../index.php?error=6");
}
?>