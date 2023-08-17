<?php
session_start();
header("Cache-Control: no-cache, must-revalidate");

// Verificar si el usuario ha iniciado sesión
if (!isset($_SESSION['user'])) {
  echo "<script>alert('No cuentas con las credenciales para acceder a esta pagina')
        window.location.href='inicio.php';</script>";
  exit;
}

include_once("conexion.php");

$doc = $_SESSION['user'];
$sql = "SELECT * FROM Usuarios WHERE documento='$doc'";
$query = mysqli_query($conexion, $sql);
$row = mysqli_fetch_assoc($query);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">


  <title>Document</title>
</head>

<body class="body3">
  <a style="margin-left:15px;float: right; margin-top:35px;" href="logout.php"><button class="btn btn-danger form-control" type="button" style="font-family: Georgia, 'Times New Roman', Times, serif;">Cerrar sesion</button></a>
  <form method="post">
    <div class="container">
      <div class="table-responsive">
        <br>

        <table class="table table-dark table-striped">
          <thead>
            <tr>
              <th scope="col">ID</th>
              <th scope="col">Nombre</th>
              <th scope="col">Documento</th>
              <th scope="col">Direccion</th>
              <th scope="col">Contraseña</th>
              <th scope="col">Editar</th>
              <th scope="col">Eliminar</th>
            </tr>
          </thead>

          <?php
          include('conexion.php');
          $resultado = mysqli_query($conexion, "SELECT * FROM $tabla");
          while ($consulta = mysqli_fetch_array($resultado)) {
            echo
            '
      <tr>
       <td>' . $consulta['id'] . '</td>
        <td>' . $consulta['nombre'] . '</td>
        <td>' . $consulta['documento'] . '</td>
        <td>' . $consulta['direccion'] . '</td>
        <td>' . $consulta['contrasena'] . '</td>
        <td><a href="actualizar.php?id=' . $consulta['id'] . '"><button type="button" class="btn btn-outline-success">Actualizar</button></a></td>
        <td><a href="eliminar.php?id=' . $consulta['id'] . '"><button type="button" onclick="return confirmar()" class="btn btn-outline-danger">Eliminar</button></a></td>
      </tr>

  </div>
  </div>';
          }
          ?>
        </table>
  </form>
  </div>
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
            <li><a style="color: white;" href="https://aulavirtual.ibero.edu.co/" target="_blank">Aula virtual</a></li>
            <li><a style="color: white;" href="https://www.ibero.edu.co/" target="_blank">Sitio Web de la U</a></li>
            <li><a style="color: white;" href="https://aulavirtual.ibero.edu.co/" target="_blank">Aula virtual</a></li>
          </ul>
        </div>
      </div>
    </div>
  </footer>


  <script>
    function confirmar() {
      let conf = confirm("¿Estas seguro que deseas eliminar?");
      if (conf == true) {
        return true;
      } else {
        return false;
      }
    }
  </script>
 

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script src="alertas.js"></script>
</body>

</html>