<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="alertas.js"></script>
</head>

<body>
    <?php
    $id = $_GET['id'];
    include_once 'conexion.php';

    $sql = "DELETE FROM Usuarios WHERE id='$id'";
    $query = mysqli_query($conexion, $sql);
    if ($query) {
        echo "<script>
        Swal.fire({
          icon: 'success',
          title: 'Se ah eliminado con exito',
          showConfirmButton: false,
          timer: 1500
        }).then(() => {
          window.location.href = 'userData.php';
        });
      </script>";
    } else {
        echo "Error al eliminar";
    }
    ?>
</body>

</html>