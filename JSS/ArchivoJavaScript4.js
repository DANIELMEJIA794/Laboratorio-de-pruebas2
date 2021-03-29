var amigos = [];
var contenedor = document.getElementById('contenedor');
function añadir(){
    var misAmigos = prompt('¿Quienes son mis amigos?');
    amigos.push(misAmigos);
    contenedor.innerHTML = amigos;
}

//ALMACENA TAMBIÉN NÚMEROS Y VALORES TRUE Y FALSE
// amigos[0] = "Alberto";

document.write(amigos);
//RECORDAR QUE SIEMPRE CUENTA DESDE 0
//INTENTAR PONER document.wrtie(amigos[12]; SALE UN UNDEFINED)

/*var amigos = ["Carlos", "Enrique", "Francisco", " " ];
amigos[3] ="Luis";
document.write(amigos[3]);*/
//ESTA VERSIÓN SIRVE PARA REEMPLAZAR NOMBRES DE FORMA RÁPIDA