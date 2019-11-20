<?php
    require("database.php");

    $sql = "SELECT * FROM mensajes ORDER BY id ASC";
    $query = $conn->prepare($sql);
    $query->execute();

    while($mensajes = $query->fetch(PDO::FETCH_ASSOC)){
        echo "<div id='mensajes'>";
            echo "<h4 id='hMensaje'>".$mensajes['nombre'].":</h4>";
            echo "<p id='pContenido'> ".$mensajes['contenido']."</p>";
        echo "</div>";
    }