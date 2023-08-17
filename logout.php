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
session_start();
unset($_SESSION['user']);
session_destroy();
echo "<script>
        Swal.fire({
          icon: 'success',
          title: 'Has cerrado sesión exitosamente',
          showConfirmButton: false,
          timer: 1500
        }).then(() => {
          window.location.href = 'inicio.php';
        });
      </script>";
?>

</body>

</html>


