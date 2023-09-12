<?php

function conectar(){
	$con = @mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB) or die('No se pudo conectar a la bd por : ' . mysqli_connect_error());
	return $con;
}

function consultar($query){
	$con = conectar();
	if (!$consul = mysqli_query($con, $query)) {
		echo "SQL: " . $query;
		die(mysqli_error($con) . ' Error en la consulta SQL ejecutada');
	}
	return $consul;
}

function num_rows($query){
	$con = conectar();
	if (!$consul = mysqli_query($con, $query)) {
		echo "SQL: ".$query;
		die('Error en la consunta SQL');
	}
	$rows = $consul->num_rows;
	return $rows;
}


function insertarSQL($tabla, $campo, $valores){
	if (!$consult = consultar("INSERT INTO $tabla($campo) VALUES($valores)")) {
		die("Ha ocurrido un error al insertar los datos en la tabla $tabla");
	}
	return $consult;
}
function DeleteSQL($tabla, $condicion){
	if (!$consult = consultar("DELETE FROM $tabla WHERE $condicion")) {
		die("Ha ocurrido un error al eliminar la tabla $tabla");
	}
	return $consult;
}

function UpdateSQL($tabla, $campo, $condicion){
	if (!$consult = consultar("UPDATE $tabla set $campo WHERE $condicion")) {
		die("Ha ocurrido un error al actualizar los datos en la tabla $tabla");
	}
	return $consult;
}

function SelectSQL($tabla, $condicion){
	if (!$consult = consultar("SELECT * FROM $tabla WHERE $condicion")) {
		die("Ha ocurrido un error al mostrar los datos de '$tabla'");
	}
	return $consult;
}
