<?php
include('config/config.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Microtraumas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

</head>


<body>
    <?php include('menu.php') ?>
    <div class="carrusel m-5">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="images/microtraumas/1.jpg" alt="First slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="images/microtraumas/3.jpg" alt="Second slide">
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="images/microtraumas/4.jpg" alt="Third slide">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
            </a>
        </div>
    </div>
    <hr class="featurette-divider">
    <div class="container info">
        <div class="row">
            <div class="col-lg-6 d-flex align-items-center flex-column">
                <img src="images/microtraumas/5.jpg" class="rounded-circle mb-3" width="200" height="200">
                <h2 class="text-primary">¿Qué es un microtrauma?</h2>
                <p class="text-justify">El microtrauma psíquico se refiere a experiencias emocionales o psicológicas
                    negativas que son
                    pequeñas pero frecuentes, y que pueden tener un impacto acumulativo en su bienestar emocional a lo
                    largo del tiempo</p>

            </div>
            <div class="col-lg-6 d-flex align-items-center flex-column">
                <img src="images/microtraumas/2.jpg" class="rounded-circle mb-3" width="200" height="200">
                <h2 class="text-primary">¿Por qué es importante?</h2>
                <p class="text-justify">Si has sentido que tu vida esta completa, que no debes quejarte de nada o que
                    deberias estar
                    realmente feliz y no encuentras la razón de tu tristeza, posiblemente hayas acumulado microtraumas.
                    Al ser eventos que crees que no es de alto impacto, piensas que no es grave y no hiciste nada para
                    arreglarlo. Haber sido rechazado en el colegió, haber sido ignorado por un amigo, compararte por
                    redes sociales con los demás, no alcanzar la felicidad plena, demostrar poco tus emociones u otros
                    eventos que parecen de menor importancia son en realidad la demostración del sutil daño de los
                    microtraumas.
                </p>
            </div>
        </div>
        <hr class="featurette-divider">
        <div class="row featurette">
            <div class="col-md-7">
                <h2 class="featurette-heading text-primary ">Microtraumas de las emociones</h2>
                <p>Las emociones sirven como un músculo intangible, es por eso que como hayas reaccionado ante los
                    sucesos de tu vida llegan a ser más importantes que los sucesos en sí. Para aceptar los micro
                    traumas emocionales se busca estar consciente de que los detona, y si hace parte de una solución
                    externa o un autocontrol de emociones.
                </p>
            </div>
            <div class="col-md-5">
                <img class="featurette-img img-fluid" src="images/microtraumas/detonantes.jpeg" width="350px"
                    height="350px">

            </div>
        </div>
        <hr class="featurette-divider">
        <div class="row featurette">
            <div class="col-md-5 ">
                <img class="featurette-img img-fluid" src="images/microtraumas/control.jpeg" width="350px"
                    height="350px">
            </div>
            <div class="col-md-7 mt-5">
                <h2 class="featurette-heading text-primary mt-2">Microtraumas de las transiciones</h2>
                <p class="text-justify">Los microtraumas a los sucesos que pasan en nuestra vida se debe a un reloj
                    social, a una comparación
                    de lo que deberíamos haber hecho a cierta edad o de las maneras que debimos actuar ante ciertos
                    acontecimientos. Con esto se suma los microtraumas a atreverse a hacer cosas nuevas, miedo a morir,
                    o de haber perdido el rumbo.</p>
                <p class="text-justify">Soy demasiado joven para sentirme así. Según Elliot Jaques un clasico
                    comportamiento de crisis de
                    edad media es tratar de prolongar su juventud, comprando carros, tener sexo casual, hacer cualquier
                    proceso que lo haga ver joven. Soy demasiado viejo para esto. = Por otro lado tenemos un mapa mental
                    de las cosas que debimos haber logrado para la edad que tenemos, nos comparamos con un yo
                    idealizado, que no hubiese cometido errores, que hubiese podido haber aceptado las oportunidades de
                    la vida, todo comparandonos con relojes sociales, y que al final no deberían determinar que debió
                    haber pasado en cada momento de nuestras vidas y hacer caso a lo que podemos cambiar, y cambiar de
                    emoción a las que no o pensamiento a las que no.</p>
            </div>

        </div>
        <hr class="featurette-divider">
        <div class="container d-flex justify-content-center ">
            <div class="row">
                <div class="col-md-4 mb-5">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                        ¿Cómo establecer límites?
                    </button>
                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">¿Cómo establecer límites?</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="embed-responsive embed-responsive-21by9 d-flex justify-content-center">
                                        <iframe class="embed-responsive-item"
                                            src="https://www.youtube.com/embed/ttWp4MHjm6I"></iframe>
                                    </div>
                                    <p class="p-modal mt-5">En este podcast hablamos de emociones. De tus mecanismos
                                        internos: ¿Por qué hacés
                                        lo que hacés?¿Por qué no podés expresar

                                        ciertas emociones y otras sí? ¿Por qué te sentís mal a veces? ¿Por qué hay cosas
                                        que te angustian, que te generan miedo, nostalgia, o que te dan placer? ¿Cómo
                                        regular tus emociones para sentirte equilibrado/a? La gestión emocional es la
                                        CLAVE para vivir una vida con sentido. ¡Y está en tus manos aprenderlo! ¿La
                                        puerta de entrada a este proceso? Psicología al Desnudo. De la mano de la
                                        Psicóloga Clínica Marina Mammoliti.</p>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-md-4  mb-5">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal2">
                        Granularidad emocional
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog"
                        aria-labelledby="exampleModalLabel2" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel2">Granularidad emocional</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="embed-responsive embed-responsive-21by9 d-flex justify-content-center">
                                        <iframe class="embed-responsive-item"
                                            src="https://www.youtube.com/embed/B_c4QfdicLk"></iframe>
                                    </div>

                                    <p class="p-modal mt-2">La granularidad emocional es una destreza que nos ayuda a
                                        responder mejor a las
                                        situaciones. Las personas que construyen con mayor precisión sus experiencias
                                        emocionales tienen mejor salud y conservan mejor sus capacidades mentales en el
                                        envejecimiento.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-md-4  mb-5">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal3">
                        El reloj social
                    </button>

                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal3" tabindex="-1" role="dialog"
                        aria-labelledby="exampleModalLabel3" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel3">El reloj social</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="modal-body">
                                        <div
                                            class="embed-responsive embed-responsive-21by9 d-flex justify-content-center">
                                            <iframe class="embed-responsive-item"
                                                src="https://www.youtube.com/embed/F9-Pys1TP80"></iframe>
                                        </div>
                                        <p class="p-modal mt-2">
                                            El reloj social es un concepto que se refiere al conjunto de expectativas
                                            sociales que marcan el momento adecuado para realizar ciertos eventos o
                                            transiciones en la vida, como el matrimonio, la paternidad, el trabajo o la
                                            jubilación

                                        </p>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <?php include('footer.php') ?>

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