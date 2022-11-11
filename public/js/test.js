

function calcularprecio()
{
    let tamano = document.getElementById("tamano").value;
    let cantidad = document.getElementById("cantidad").value;
    precio = tamano * cantidad;
    if(precio>0){
        document.getElementById("precio").innerHTML = precio;
    }
    else{
        document.getElementById("precio").innerHTML = "";
    }

}

