/*var elemento = document.createElement("li");
var contenido = document.createTextNode("nuevo texto");
    elemento.appendChild(contenido);
    var padre = document.getElementById("lista");
    padre.appendChild(elemento);*/

/*var elemento = document.createElement("li");
var contenido = document.createTextNode("nuevo texto");
    elemento.appendChild(contenido);
    var padre = document.getElementsByTagName("li")[0].parentNode;
    padre.appendChild(elemento);*/


var elemento = document.createElement("li");
var contenido = document.createTextNode("nuevo texto");
    elemento.appendChild(contenido);
    var padre = document.getElementsByTagName("li")[0].parentNode;
    var hijo = document.getElementsByTagName("li")[0];
    padre.insertBefore(elemento, hijo);
    