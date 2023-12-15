<?php
include_once('../config/config.php');
include('Paciente.php');


$p = new Paciente();
$data = $p->getAll();

if (isset($_GET['id']) && !empty($_GET['id'])) {
    $remove = $p->delete($_GET['id']);
    if ($remove) {
        header('Location:' . ROOT . '/Paciente/index.php');
    } else {
        $mensaje = '<div class="alert alert-danger"> Error al Eliminar</div>';

    }
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Sesiones</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="../styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>

<body>
    <?php include('../menu.php') ?>

    <div class="container">
        <h1 class="text-center my-5">Calendario</h1>
        <div class="row mb-5">
            <?php
            while ($pt = mysqli_fetch_object($data)) {
                $date = $pt->fecha_sesion;
                echo "<div class='col'>";
                echo "<div class='border border-info p-4'>";
                echo "<h5> <img src='" . ROOT . "/images/$pt->imagen' width='60' height='60'/>
                            $pt->primer_nombre $pt->segundo_nombre $pt->primer_apellido $pt->segundo_apellido  </h5>";
                echo "<p> <b  class='text-primary'>Fecha de la Sesión:</b> <br>" . date('d-M-Y H:i', strtotime($date)) . "</p>";
                echo "<div class='text-center'>";
                echo "<a class='btn btn-success' href='" . ROOT . "/Paciente/edit.php?id=$pt->id'> Modificar </a> - <a class='btn btn-danger' href='" . ROOT . "/Paciente/index.php?id=$pt->id'> Eliminar </a>";
                echo "</div>";
                echo "</div>";
                echo "</div>";
            }
            ?>
        </div>
    </div>
    
    <?php include('../footer.php') ?>
    
</body>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
    crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
    crossorigin="anonymous"></script>

</html>