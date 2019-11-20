<?php
    require("database.php");

    $nombre = $_POST['nombre'];
$mensaje = str_replace("
", "<br>", $_POST['mensaje']);

    $sql = "INSERT INTO mensajes (nombre, contenido) VALUES(:nombre, :contenido)";
    $query = $conn->prepare($sql);
    $query->bindParam(":nombre", $nombre);
    $query->bindParam(":contenido", $mensaje);
    $query->execute();

    setcookie("nombre", $nombre, time()+3600);