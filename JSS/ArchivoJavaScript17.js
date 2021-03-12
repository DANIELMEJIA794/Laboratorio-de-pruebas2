/*var elemento = document.createElement("div");
    elemento.setAttribute("Class", "azul");
    document.body.appendChild(elemento);*/


var elemento = document.createElement("div");
var padre= document.getElementById("contenedor");
var referencia = document.getElementsByTagName("div")[0];
    elemento.setAttribute("Class", "azul");
    document.body.insertBefore(elemento, referencia);

//ME FUNCIONA CON DOCUMENT.BODY, NO CON PADRE