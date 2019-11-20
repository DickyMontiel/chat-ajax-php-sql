function enviar(){
    var nombre = document.getElementById("nombre").value;
    var mensaje = document.getElementById("mensaje").value;

    if(mensaje.length > 0){
        var post = "nombre=" + nombre + "&mensaje=" + mensaje;

        var query = new XMLHttpRequest;

        query.onreadystatechange = function(){
            document.getElementById("mensaje").value = "";
        }
        
        query.open("POST", "enviar.php", true);
        query.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        query.send(post);
    }else{
        alert("Debes de escribir algo, no dejarlo vacio");
    }
}

function actualizar(){
    var caja = document.getElementById("caja");
    var query = new XMLHttpRequest;

    query.onreadystatechange = function(){
        if(query.readyState == 4 && query.status == 200){
            caja.innerHTML = query.responseText;
            caja.scrollTop += 10000000000000;
        }
    }

    query.open("GET", "actualizar.php", true);
    query.send();

    setInterval(function(){
        var caja = document.getElementById("caja");
        var query = new XMLHttpRequest;

        query.onreadystatechange = function(){
            if(query.readyState == 4 && query.status == 200){
                caja.innerHTML = query.responseText;
                caja.scrollTop = 1000;
            }
        }

        query.open("GET", "actualizar.php", true);
        query.send();
    }, 500);
}