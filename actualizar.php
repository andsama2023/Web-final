<?php
session_start();
// Verificar si el usuario ha iniciado sesión
if (!isset($_SESSION['user'])) {
  echo "<script>alert('No cuentas con las credenciales para acceder a esta pagina')
        window.location.href='inicio.php';</script>";
  exit;
}

include_once 'conexion.php';
$id = $_GET['id'];
$doc = $_SESSION['user'];
$sql = "SELECT * FROM Usuarios WHERE id='$id'";
$query = mysqli_query($conexion, $sql);
$row = mysqli_fetch_assoc($query);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="style.css" />
  <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  <title>Document</title>
</head>

<body class="body4">
  <div class="container">
    <div class="row">
      <div class="col-sm-3"></div>
      <div class="col-sm-7">
        <form method="POST">
          <br><br>
          <div id="login-box">
            <h1 style="font-family: Georgia, 'Times New Roman', Times, serif; color:#fff;">Actualizar</h1>
            <input type="text" hidden name="id" value="<?php echo $row['id'] ?>"><br>
            <label style="font-family: Georgia, 'Times New Roman', Times, serif;color:#fff;">Nombre</label><br>
            <input type="text" placeholder="Digite su nombre" class="form-control text-center" name="nombre" value="<?php echo $row['nombre'] ?>"><br>
            <label style="font-family: Georgia, 'Times New Roman', Times, serif;color:#fff;">Documento</label><br>
            <input type="number" placeholder="Digite su Documento" class="form-control text-center" name="documento" value="<?php echo $row['documento'] ?>"><br>
            <label style="font-family: Georgia, 'Times New Roman', Times, serif;color:#fff;">Dirección</label><br>
            <input type="text" placeholder="Digite su Dirección" class="form-control text-center" name="direccion" value="<?php echo $row['direccion'] ?>"><br>
            <label style="font-family: Georgia, 'Times New Roman', Times, serif;color:#fff;">Contraseña</label>
            <input type="password" placeholder="Digite su contraseña" class="form-control text-center" id="password" name="contrasena"><i style="color:#fff; margin-top:-20px;margin-right:20px" id="eye" class="position-absolute top-5 end-0 translate-middle uil uil-eye-slash showHidePw"></i>
            <br>
            <label style="font-family: Georgia, 'Times New Roman', Times, serif;color:#fff;">Confirmar</label>
            <input type="password" placeholder="Confirme su contraseña" class="form-control text-center" id="password_show" name="confir_con"><i style="color:#fff; margin-top:-20px; margin-right:20px ; " id="show_eye" class="position-absolute top-5 end-0 translate-middle uil uil-eye-slash showHidePw"></i>
            <br><br>
            <div class="container">
              <div class="row">
                <div class="col-sm-6">
                  <button class="form-control" type="submit" style="font-family: Georgia, 'Times New Roman', Times, serif;" name="btn-act">Actualizar</button>
                </div>
                <div class="col-sm-6">
                  <a style="text-decoration: none;" href="userData.php?documento=<?php echo $row['documento']; ?>">
                    <button class="form-control" type="button" style="font-family: Georgia, 'Times New Roman', Times, serif;">Regresar</button>
                  </a>
                </div>
              </div>
            </div>
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
            <li><a style="color: #fff;" href="https://aulavirtual.ibero.edu.co/" target="_blank">Aula virtual</a></li>
            <li><a style="color: #fff;" href="https://www.ibero.edu.co/" target="_blank">Sitio Web de la U</a></li>
            <li><a style="color: #fff;" href="https://aulavirtual.ibero.edu.co/" target="_blank">Aula virtual</a></li>
          </ul>
        </div>
      </div>
    </div>
  </footer>


  <script>
    document.addEventListener("DOMContentLoaded", function() {
      const btnRegi = document.querySelector("button[name='btn-act']");

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
      });

      var eye = document.getElementById('show_eye');
      var Inputs = document.getElementById('password_show');
      eye.addEventListener("click", function() {
        if (Inputs.type == "password") {
          Inputs.type = "text";
          eye.style.opacity = 0.8;
        } else {
          Inputs.type = "password";
          eye.style.opacity = 0.2;
        }
      });
    });
  </script>

  <script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script src="alertas.js"></script>

  <?php
  if (isset($_POST['btn-act'])) {
    $id = $_POST['id'];
    $nom = $_POST['nombre'];
    $docu = $_POST['documento'];
    $dir = $_POST['direccion'];
    $con = $_POST['contrasena'];
    $confircon = $_POST['confir_con'];
    include("conexion.php");

    // Escapar los valores para evitar inyección SQL
    $nom = mysqli_real_escape_string($conexion, $nom);
    $docu = mysqli_real_escape_string($conexion, $docu);
    $dir = mysqli_real_escape_string($conexion, $dir);
    $con = mysqli_real_escape_string($conexion, $con);
    $confircon = mysqli_real_escape_string($conexion, $confircon);

    $sql = "UPDATE Usuarios SET nombre ='$nom', documento='$docu', direccion='$dir', contrasena='$con' WHERE id=$id";
    if ($con != $confircon) {
      echo "<script>
            mostrarAlerta('error', 'Contraseñas no coinciden', 'Las contraseñas no son iguales');
        </script>";
    } else {
      if ($nom == "" || $docu == "" || $dir == "" || $con == "" || $confircon == "") {
        echo "<script>
                mostrarAlerta('warning', 'Campos vacíos', 'Digite todos los campos');
                window.location.href='actualizar.php?id=$id';
            </script>";
      } else {
        $query = mysqli_query($conexion, $sql);
        if ($query) {
          echo "<script>
                    mostrarAlerta('success', 'Datos actualizados', 'Los datos se han actualizado correctamente');
                     setTimeout(function() {
                      window.location.href='userData.php?documento=$docu';
                     },3000);
                </script>";
        } else {
          echo "<script>
                    mostrarAlerta('error', 'Error al actualizar', 'Error al actualizar los datos el documento ya existe');
                    setTimeout(function() {
                      window.location.href='actualizar.php?id=$id';
                     },3000);
                </script>";
        }
      }
    }
  }
  ?>

</body>

</html>