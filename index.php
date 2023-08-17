<?php
include('conexion.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Security-Policy" content="frame-src 'self' https://www.youtube.com;">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Sitio web de Psicología</title>
</head>

<body>
    <nav class="navbar navbar-dark fixed-top">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="offcanvas offcanvas-end text" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">Navegador</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body">
                    <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                        <li class="nav-item">
                            <a class="nav-link" href="registro.php">Registro</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="inicio.php">Inicio sesión</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.php">Psicología - Inicioㅤ</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="informacion.php">Información</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>



    <div class="container mt-5">
        <section class="slider">
            <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner border border-dark rounded">
                    <div class="carousel-item active">
                        <img src="images/psicologia.jpg" class="img-fluid d-block w-100 carousel-image" alt="imagen referente a la psicologia">
                    </div>
                    <div class="carousel-item">
                        <img src="images/psicologia4.jpg" class="img-fluid d-block w-100 carousel-image" alt="imagen referente a la psicologia">
                    </div>
                    <div class="carousel-item">
                        <img src="images/psicologia3.jpg" class="img-fluid d-block w-100 carousel-image" alt="imagen referente a la psicologia">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon rounded-circle bg-black" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
                    <span class="carousel-control-next-icon rounded-circle bg-black" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>

                <!-- Indicadores -->
                <ol class="carousel-indicators">
                    <li data-bs-target="#carouselExampleAutoplaying" data-bs-slide-to="0" class="active"></li>
                    <li data-bs-target="#carouselExampleAutoplaying" data-bs-slide-to="1"></li>
                    <li data-bs-target="#carouselExampleAutoplaying" data-bs-slide-to="2"></li>
                </ol>

            </div>
        </section>
    </div>




    <section class="pt-4">
        <div class="container">
            <div class="row">
                <div class="col-md-4 mt-3">
                    <h2>La Psicología</h2>
                    <p>La psicología o sicología es una ciencia social y una disciplina académica enfocadas en el análisis y la comprensión de la conducta humana y de los procesos mentales experimentados por individuos y por grupos sociales durante momentos y situaciones determinadas.</p>
                    <p>La psicología tiene un campo de estudio vasto, ya que se centra en la mente y la experiencia humanas, desde diversas perspectivas, corrientes y metodologías. Algunas de ellas son más próximas a las ciencias duras y al empleo del método científico, mientras que otras no lo consideran apropiado para el objeto de estudio, y prefieren construir métodos y abordajes propios. </p>
                </div>
                <div class="video col-md-4 mt-3">
                    <h3>Breve explicación de la Psicología</h3>
                    <div class="embed-responsive embed-responsive-16by9 mx-auto" style="max-width: 400px;">
                        <iframe src="https://www.youtube.com/embed/rxayEDYfjbU?si=X7ZMXY94q9at4eQu" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                    </div>
                </div>
                <div class="col-md-4 mt-3">
                    <ul>
                        <h2>Objetivos de la Psicología</h2>
                        <li style="margin-bottom: 10px;">Describir: El comportamiento humano.</li>
                        <li style="margin-bottom: 10px;">Explicar: El comportamiento no basta solo con describirlo, es necesario explicarlo.</li>
                        <li style="margin-bottom: 10px;">Predecir: Realizar predicciones sobre la forma en la que pensamos y actuamos.</li>
                        <li style="margin-bottom: 10px;">Modificar: La psicologia se esfuerza por cambiar y edificar transformaciones constructivas y duraderas en la vida de las personas.</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="container mt-3">
            <div class="row">
                <div class="col-lg-6">
                    <form method="post">
                        <h2>Dejanos un mensaje</h2>
                        <div class="form-group">
                            <label for="nombre">Nombre:</label>
                            <input placeholder="Digite su nombre" type="text" name="nombre" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="mensaje">Mensaje:</label>
                            <textarea name="comentario" class="form-control" placeholder="Digite un mensaje para nosotros"></textarea>
                        </div>
                        <button name="btn-env" type="submit" class="btn-form btn btn-primary mt-3" id="btnEnviar">Enviar</button>
                    </form>
                </div>
                <div class="col-lg-6 mt-4">
                    <h2>Consejo para tranquilizarte</h2>
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Inhala</th>
                                    <th>Exhala</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Inhalar 7 segundos</td>
                                    <td>Sostener 7 segundos</td>
                                </tr>
                                <tr>
                                    <td>Exhalar 7 segundos</td>
                                    <td>Sostener 7 segundos</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <footer>
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-4 mb-4">
                    <h4>Información del Creador</h4>
                    <p>Nombre del Creador: Andres Felipe Restrepo</p>
                    <p>Correo electrónico: andsama@gmail.com</p>
                    <p>Teléfono: 311 7632158</p>
                </div>
                <div class="col-sm-4 mb-4">
                    <h4>Redes Sociales</h4>
                    <a href="https://www.facebook.com/" target="_blank"><img class="icon" src="images/facebook.png" alt="icono referente a la red social facebook"></a>&nbsp;&nbsp;&nbsp;&nbsp;
                    <a href="https://twitter.com/" target="_blank"><img class="icon2" src="images/x-logo.avif" alt="icono referente a la red social x"></a>&nbsp;&nbsp;&nbsp;&nbsp;
                    <a href="https://www.instagram.com/" target="_blank"><img class="icon" src="images/instagram.png" alt="icono referente a la red social instagram"></a>
                </div>
                <div class="col-sm-4 mb-4">
                    <h4>Links de Interés</h4>
                    <ul>
                        <li><a style="color:white" href="https://aulavirtual.ibero.edu.co/" target="_blank">Aula virtual</a></li>
                        <li><a style="color:white" href="https://www.ibero.edu.co/" target="_blank">Sitio Web de la U</a></li>
                        <li><a style="color:white" href="https://aulavirtual.ibero.edu.co/" target="_blank">Aula virtual</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

</body>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="alertas.js"></script>
<script src="jquery.js"></script>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const btnEnviar = document.getElementById("btnEnviar");

        btnEnviar.addEventListener("click", function(event) {
            const nombre = document.querySelector("input[name='nombre']").value;
            const comentario = document.querySelector("textarea[name='comentario']").value;

            if (nombre === "" || comentario === "") {
                mostrarAlerta('warning', 'Campos vacios', 'Digita todos los campos');
                event.preventDefault();
            } else {
                mostrarAlerta('success', 'Se ah enviado tu comentario ¡Gracias!', '');
            }
        });
    });
</script>

<?php
if (isset($_POST['btn-env'])) {
    $nom = $_POST['nombre'];
    $comen = $_POST['comentario'];

    if ($nom == "" || $comen == "") {
        echo "<script> 
            mostrarAlerta('warning', 'Campos vacios', 'Digita todos los campos');
        </script>";
    } else {
        $result = $conexion->prepare("INSERT INTO comentarios(nombre,comentario)VALUES(?,?)");
        $result->bind_param("ss", $nom, $comen);
        $result->execute();
        echo "<script> 
            mostrarAlerta('success', 'Se ah enviado tu comentario ¡Gracias!', '');
            setTimeout(function() {
                window.location.href = 'index.php';
            }, 4000); 
        </script>";
    }
}
?>

</html>