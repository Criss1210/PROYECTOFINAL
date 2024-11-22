<?php
include 'db/conexion.php' ;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $fecha = filter_input(INPUT_POST, 'fecha', FILTER_SANITIZE_STRING);
    $correo = filter_input(INPUT_POST, 'correo', FILTER_SANITIZE_EMAIL);
    $nombre = filter_input(INPUT_POST, 'nombre', FILTER_SANITIZE_STRING);
    $asunto = filter_input(INPUT_POST, 'asunto', FILTER_SANITIZE_STRING);
    $comentario = filter_input(INPUT_POST, 'comentario', FILTER_SANITIZE_STRING);

    if (empty($fecha) || empty($correo) || empty($nombre) || empty($asunto) || empty($comentario)) {
        echo "Todos los campos son obligatorios. Por favor, vuelve atrás y completa el formulario.";
        exit;
    }

    try {
        $gestionLibreria = new DBGestionLibreria();

        $gestionLibreria->insertarContacto($fecha, $correo, $nombre, $asunto, $comentario);

        header('Location: gracias.php');
        exit;
    } catch (Exception $e) {
        echo "Ocurrió un error al registrar el contacto: " . $e->getMessage();
    }
} else {
    echo "Acceso no autorizado.";
}
?>
