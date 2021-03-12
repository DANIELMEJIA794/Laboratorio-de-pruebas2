var elementosP = document.getElementsByTagName("p");
elementosP[0];
elementosP[0].innerHTML = "Texto de prueba";
var elemento = document.createElement("h2");
var contenido = document.createTextNode("Este es nuestro titular");
elemento.appendChild(contenido);
elemento.setAttribute("align", "center");
document.getElementById("subtitulo").appendChild(elemento);
