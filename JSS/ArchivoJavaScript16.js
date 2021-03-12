//var primerElemento = document.getElementById("primero");
//primerElemento.innerHTML = "Nuevo Texto <i class='foo'>>Falconmasters</i>";
//primerElemento.textContent = "Nuevo Texto";

/*var elemento = document.createElement("li");
var contenido = document.createTextNode("Nuevo Texto");
    elemento.appendChild(contenido);

var padre = document.getElementsByTagName("li")[0].parentNode;
var referencia = document.getElementsByTagName("li")[0];
    padre.replaceChild(elemento, referencia);*/


//TEXTCONTENT ES MÁS SEGURA PARA TRABAJAR CON FORMULARIOS
//INNER.HTML SIRVE PARA APLICAR LENGUAJE HTML Y VISUALIZARLO

var elemento = document.createElement("li");
var contenido = document.createTextNode("Nuevo Texto");
    elemento.appendChild(contenido);

var padre = document.getElementsByTagName("li")[0].parentNode;
    referencia = document.getElementsByTagName("li")[0];
    padre.removeChild(referencia);