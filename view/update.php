<?php 

require_once "../config/config.php";
require_once "../model/db.php";
$id = $_GET['id'];
$verificacion = SelectSQL("solicitud","id=".$id);
$obtDatos = mysqli_fetch_array($verificacion);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>Modificar Solicitud</title>

    <!-- Icons font CSS-->
    <link href="../vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="../vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="../vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="../vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="../style/solicitud.css" rel="stylesheet" media="all">
</head>

<body>
    <div class="page-wrapper bg-gra-light  p-t-130 p-b-100 font-poppins">
        <div class="wrapper wrapper--w680">
            <div class="card card-4">
                <div class="card-body">
                    <h3 class="title">FORMULARIO DE SOLICITUD DE EMPLEO</h3>
                    <h4 class="title">SE PODRÍA REQUERIR UN CONTROL DE CONSUMO
                        DE DROGAS A LOS POSTULANTES</h4>
                    <form action="../controller/actualizar.php?id=<?php echo $id?>" method="POST">
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <div class="input-group-icon">
                                        <input class="input--style-4 js-datepicker" type="text" name="fecha" placeholder="Fecha" 
                                        value="<?php echo $obtDatos['fecha']?>">
                                        <i class="zmdi zmdi-calendar-note input-icon js-btn-calendar"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <input class="input--style-4" type="text" name="nombre" placeholder="Nombre"
                                    value="<?php echo $obtDatos['nombre']?>">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <input class="input--style-4" type="text" name="apellido" placeholder="Apellido"
                                    value="<?php echo $obtDatos['apellido']?>">
                                </div>
                            </div>
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <input class="input--style-4" type="text" name="direccion" placeholder="Dirección"
                                    value="<?php echo $obtDatos['direccion']?>">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <input class="input--style-4" type="number" name="tiempoRes" placeholder="Tiempo de residencia"
                                    value="<?php echo $obtDatos['tiempoRes']?>">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <input class="input--style-4" type="tel" name="telefono" placeholder="Telefono"
                                    value="<?php echo $obtDatos['telefono']?>">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <input class="input--style-4" type="number" name="numSeg" placeholder="Numero de seguro social"
                                    value="<?php echo $obtDatos['numSeg']?>">
                                </div>
                            </div>
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                
                            </div>
                            <div class="col-2">
                                <label class="label">Dias/Horas disponibles para trabajar:</label>
                                <div class="input-group">
                                    <input class="input--style-4" type="number" name="sabado" placeholder="Sabado"
                                    value="<?php echo $obtDatos['sabado']?>">
                                </div>
                                <div class="input-group">
                                    <input class="input--style-4" type="number" name="viernes" placeholder="Viernes"
                                    value="<?php echo $obtDatos['viernes']?>">
                                </div>
                                <div class="input-group">
                                    <input class="input--style-4" type="number" name="jueves" placeholder="Jueves"
                                    value="<?php echo $obtDatos['jueves']?>">
                                </div>
                                <div class="input-group">
                                    <input class="input--style-4" type="number" name="miercoles" placeholder="Miercoles"
                                    value="<?php echo $obtDatos['miercoles']?>">
                                </div>
                                <div class="input-group">
                                    <input class="input--style-4" type="number" name="martes" placeholder="Martes"
                                    value="<?php echo $obtDatos['martes']?>">
                                </div>
                                <div class="input-group">
                                    <input class="input--style-4" type="number" name="lunes" placeholder="Lunes"
                                    value="<?php echo $obtDatos['lunes']?>">
                                </div>
                            </div>
                        </div>
                        <div class="row row-space">
                            <div class="col-2">
                                <div class="input-group">
                                    <label class="label">¿Cuántas horas semanales pueden trabajar?</label>
                                    <input class="input--style-4" type="number" name="horasDisp"
                                    value="<?php echo $obtDatos['horasDisp']?>">
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="input-group">
                                    <br>
                                    <label class="label">¿Puede trabajar en horario nocturno?</label>
                                    <div class="p-t-10">
                                        <label class="radio-container m-r-45">Si
                                            <input type="radio" checked="checked" name="nocturno" value="Si">
                                            <span class="checkmark"></span>
                                        </label>
                                        <label class="radio-container">No
                                            <input type="radio" name="nocturno" value="No">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="input-group">
                            <br>
                            <label class="label">Empleo deseado:</label>
                            <div class="p-t-10">
                                <label class="radio-container m-r-45">TIEMPO COMPLETO SOLAMENTE
                                    <input type="radio" checked="checked" name="empDes" value="TIEMPO COMPLETO SOLAMENTE">
                                    <span class="checkmark"></span>
                                </label>
                                <label class="radio-container">TIEMPO PARCIAL SOLAMENTE
                                    <input type="radio" name="empDes" value="TIEMPO PARCIAL SOLAMENTE">
                                    <span class="checkmark"></span>
                                </label>
                                <br><br>
                                <label class="radio-container">TIEMPO COMPLETO O PARCIAL
                                    <input type="radio" name="empDes" value="TIEMPO COMPLETO O PARCIAL">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                        </div>
                        <div class="p-t-15">
                            <button class="btn btn--radius-2 btn--blue" type="submit">Enviar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="../vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="../vendor/select2/select2.min.js"></script>
    <script src="../vendor/datepicker/moment.min.js"></script>
    <script src="../vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="../scripts/solicitud.js"></script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>