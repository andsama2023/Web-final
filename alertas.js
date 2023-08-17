function mostrarAlerta(icon, title, text) {
  Swal.fire({
    icon: icon,
    title: title,
    text: text,
    confirmButtonColor: "#3085d6",
    confirmButtonText: "Aceptar",
  });
}
