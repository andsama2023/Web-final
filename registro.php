<?php
include("conexion.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="style.css?v=1">
  <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  <title>Document</title>
</head>

<body class="body5">
  <nav class="navbar navbar-dark fixed-top">
    <div class="container-fluid">
      <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div style=" background-color: #345995;" class="offcanvas offcanvas-end text" tabindex="-1" id="offcanvasDarkNavbar" aria-labelledby="offcanvasDarkNavbarLabel">
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
  <br><br><br>

  <div class="container">
    <div class="row">
      <div class="col-sm-3"></div>
      <div class="col-sm-7">
        <form method="post">
          <br><br>
          <div id="login-box">
            <h1 style="font-family: Georgia, 'Times New Roman', Times, serif;">Registro</h1>
            <label style="font-family: Georgia, 'Times New Roman', Times, serif;">Nombre</label><br>
            <input type="text" placeholder="Digite su nombre" class="form-control text-center" name="nombre"><br>
            <label style="font-family: Georgia, 'Times New Roman', Times, serif;">Documento</label><br>
            <input type="number" placeholder="Digite su Documento" class="form-control text-center" name="documento"><br>
            <label style="font-family: Georgia, 'Times New Roman', Times, serif;">Dirección</label><br>
            <input type="text" placeholder="Digite su Dirección" class="form-control text-center" name="direccion"><br>
            <label style="font-family: Georgia, 'Times New Roman', Times, serif;">Contraseña</label>
            <input type="password" placeholder="Digite su contraseña" class="form-control text-center" id="password" name="contrasena"><i style="color:#fff; margin-top:-20px;margin-right:20px" id="eye" class="position-absolute top-5 end-0 translate-middle uil uil-eye-slash showHidePw"></i>
            <br>
            <label style="font-family: Georgia, 'Times New Roman', Times, serif;">Confirmar</label>
            <input type="password" placeholder="Confirme su contraseña" class="form-control text-center" id="password_show" name="confir_con"><i style="color:#fff; margin-top:-20px; margin-right:20px ; " id="show_eye" class="position-absolute top-5 end-0 translate-middle uil uil-eye-slash showHidePw"></i>
            <br><br>
            <button class="form-control" type="submit" style="font-family: Georgia, 'Times New Roman', Times, serif;" name="btn-regi">Registrate</button><br>
            <p style="color: white; font-family: Georgia, 'Times New Roman', Times, serif;">¿Ya tienes cuenta?<a href="inicio.php">Inicia sesión</a></p>
          </div>
      </div>
    </div>
    </form>
  </div>
  

  <footer class="foot-page">
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
            <li><a style="color:white" href=" https://aulavirtual.ibero.edu.co/" target="_blank">Aula virtual</a></li>
            <li><a style="color:white" href="https://www.ibero.edu.co/" target="_blank">Sitio Web de la U</a></li>
            <li><a style="color:white" href="https://aulavirtual.ibero.edu.co/" target="_blank">Aula virtual</a></li>
          </ul>
        </div>
      </div>
    </div>
  </footer>

  <script>
    var ojo = document.getElementById('eye');
    var Input = document.getElementById('password');
    ojo.addEventListener("click", function() {
      if (Input.type == "password") {
        Input.type = "text";
        ojo.style.opacity = 0.8;
      } else {
        Input.type = "password";
        ojo.style.opacity = 0.2;
      }
    })

    var eye = document.getElementById('show_eye')
    var Inputs = document.getElementById('password_show');
    eye.addEventListener("click", function() {
      if (Inputs.type == "password") {
        Inputs.type = "text";
        eye.style.opacity = 0.8;
      } else {
        Inputs.type = "password";
        eye.style.opacity = 0.2;
      }
    })
  </script>


  <script>
    document.addEventListener("DOMContentLoaded", function() {
      const btnRegi = document.querySelector("button[name='btn-regi']");

      btnRegi.addEventListener("click", function(event) {
        const nombre = document.querySelector("input[name='nombre']").value;
        const doc = document.querySelector("input[name='documento']").value;
        const dir = document.querySelector("input[name='direccion']").value;
        const con = document.querySelector("input[name='contrasena']").value;
        const confCon = document.querySelector("input[name='confir_con']").value;

        if (con !== confCon) {
          mostrarAlerta('error', 'Contraseñas no coinciden', 'Las contraseñas no son iguales');
          event.preventDefault();
        } else if (nombre === "" || doc === "" || dir === "" || con === "" || confCon === "") {
          mostrarAlerta('warning', 'Campos vacíos', 'Digita todos los campos');
          event.preventDefault();
        }
      });
    });
  </script>

  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script src="alertas.js"></script>
  <script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>


  <?php
  include('conexion.php');
  $nom = "";
  $doc = "";
  $dir = "";
  $con = "";
  $confCon = "";
  if (isset($_POST['btn-regi'])) {
    $nom = $_POST['nombre'];
    $doc = $_POST['documento'];
    $dir = $_POST['direccion'];
    $con = $_POST['contrasena'];
    $confCon = $_POST['confir_con'];

    if ($con <> $confCon) {
      echo "<script>
            mostrarAlerta('error', 'Contraseñas no coinciden', 'Las contraseñas no son iguales');
        </script>";
    } else {
      if ($nom == "" || $doc == "" || $dir == "" || $con == "" || $confCon == "") {
        echo "<script>
                mostrarAlerta('warning', 'Campos vacíos', 'Digita todos los campos');
            </script>";
      } else {
        $consulta = "SELECT * FROM Usuarios WHERE documento='$doc'";
        $resultado = mysqli_query($conexion, $consulta);
        $existe_documento = mysqli_num_rows($resultado) > 0;

        if ($existe_documento) {
          echo "<script>
                    mostrarAlerta('error', 'Documento registrado', 'El documento ya está registrado, ingresa otro documento');
                setTimeout(function() {
                window.location.href = 'registro.php';
            }, 4000); 
                </script>";
        } else {
          $result = $conexion->prepare("INSERT INTO Usuarios(nombre,documento,direccion,contrasena)VALUES(?,?,?,?)");
          $result->bind_param("siss", $nom, $doc, $dir, $con);
          $result->execute();
          echo "<script>
                    mostrarAlerta('success', 'Registro exitoso', 'Se ha registrado exitosamente');
                         setTimeout(function() {
                window.location.href = 'inicio.php';
            }, 3000); 
                </script>";
        }
      }
    }
  }
  ?>
</body>

</html>