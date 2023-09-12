<?php
session_start();
require_once "config/config.php";
require_once "model/db.php";
if (!isset($_SESSION['email'])) {
    header("Location: view/login.php");
}
$rol = $_SESSION['rol'];
$id = $_SESSION['id'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Control de Solicitudes</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="style/index.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="scripts/index.js"></script>


<body>
    <?php
    require_once "view/menu.php";
    ?>
    <div class="container">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-6">
                        <h2>Manejo de <b>Solicitudes</b></h2>
                    </div>
                    <div class="col-sm-6">
                        <a href="view/solicitud.php" class="btn
                                    btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i>
                            <span>Agregar</span></a>
                    </div>
                </div>
            </div>
            <?php
            if ($rol == 1) {
                $sql = "SELECT * FROM solicitud WHERE id_Usuario=" . $id;
            } else {
                $sql = "SELECT * FROM solicitud";
            }
            if (num_rows($sql) > 0) {
                echo '<table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Dirección</th>
                        <th>Telefono</th>
                        <th>Seguro Social</th>';
                if ($rol == 2) {
                    echo '<th>Acciones</th>';
                }
                echo '</tr>
                </thead>';
                $result = consultar($sql);
                while ($row = mysqli_fetch_array($result)) {
                    echo '<tbody>
                    <tr>
                        <td>' . $row["id"] . '</td>
                        <td>' . $row["nombre"] . '</td>
                        <td>' . $row["apellido"] . '</td>
                        <td>' . $row["direccion"] . '</td>
                        <td>' . $row["telefono"] . '</td>
                        <td>' . $row["numSeg"] . '</td>';
                    if ($rol == 2) {
                        echo '<td>
                            <a href="view/update.php?id=' . $row["id"] . '" class="edit" data-toggle="modal"><i class="material-icons"
                                    data-toggle="tooltip" title="Edit">&#xE254;</i></a>
                            <a href="view/delete.php?id=' . $row["id"] . '" class="delete" data-toggle="modal"><i class="material-icons"
                                    data-toggle="tooltip" title="Delete">&#xE872;</i></a>
                        </td>';
                    }
                    echo '</tr>
                </tbody>';
                }
                echo '</table>';
            } else {
                echo '<div class="alert alert-danger"><em>No se encontraron registros :(</em></div>';
            }

            ?>

        </div>
    </div>
</body>

</html>