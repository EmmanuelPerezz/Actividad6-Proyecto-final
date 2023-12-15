<?php
include('config/config.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Servicios Psicológicos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>

<body>
    <?php include('menu.php') ?>

    <div class="container">
        <div class="row py-5">
            <div class="col-12 my-auto">
                <div class="row text-center">
                    <div class="col-lg-12 mb-4 d-flex flex-column justify-content-center aling-items-center">
                        <div class=" index-card card  copyable">
                            <div class="card-body ">
                                <h1 class="card-title text-primary mb-5">¡Prioriza la salud mental! 🌈 </h1>
                                <p class="card-text px-5">
                                    Descubre nuestros servicios psicológicos personalizados. Con nuestra plataforma, los
                                    psicólogos pueden gestionar fácilmente citas a través de un calendario integrado.
                                </p>
                                <p>¡Hola Construyamos juntos un camino hacia el bienestar emocional! 🧠✨</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container py-5">
        <h2 class="text-center mb-4">Contáctanos</h2>
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="card shadow">
                    <div class="card-body p-4">
                        <form>
                            <div class="form-group mb-3">
                                <label for="nombre">Nombre</label>
                                <input type="text" class="form-control" id="nombre" placeholder="Tu nombre">
                            </div>
                            <div class="form-group mb-3">
                                <label for="correo">Correo electrónico</label>
                                <input type="email" class="form-control" id="correo" placeholder="nombre@ejemplo.com">
                            </div>
                            <div class="form-group mb-3">
                                <label for="mensaje">Mensaje</label>
                                <textarea class="form-control" id="mensaje" rows="3"
                                    placeholder="Tu mensaje"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Enviar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include('footer.php') ?>
</body>



</html>