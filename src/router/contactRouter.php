<?php

if(isset($_POST['nombre']) && isset($_POST['correo']) && isset($_POST['mensaje'])) {
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $mensaje = $_POST['mensaje'];

    header("Location: ../../web/contacto/index.php?status=success");
} else {
    header("Location: ../../web/contacto/index.php?status=error");
}