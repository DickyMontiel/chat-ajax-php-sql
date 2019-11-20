<?php 
    $nombre = "";
    if(isset($_COOKIE['nombre'])){
        $nombre = $_COOKIE['nombre'];
    } 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Chat</title>
    <link rel="stylesheet" href="css/index.css">
    <link href="https://fonts.googleapis.com/css?family=Alatsi&display=swap" rel="stylesheet">
</head>
<body onload="actualizar()">
    <div class="ventana">
        <div id="caja"></div>
        <center>
            <input type="text" id="nombre" placeholder="Tu Nombre" value="<?php echo $nombre ?>">
            <textarea id="mensaje" placeholder="Mensaje"></textarea>
        </center>
        <button onclick="enviar()" class="btEnviar">Enviar</button>
        <script src="index.js" type="text/javascript"></script>
    </div>
</body>
</html>