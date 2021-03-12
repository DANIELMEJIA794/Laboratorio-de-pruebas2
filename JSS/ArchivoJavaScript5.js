var amigos = ["Carlos", "Arturo", "Abelardo", "Manuel", "Edilberto"];
//document.write( amigos.length ); CUENTA EL NÚMERO DE ELEMENTOS EN LA LISTA
//VARIANTE  amigos.length(); ??

//document.write("Tienes " + amigos.length +  " amigos"); CREA UNA ORACIÓN CONCATENADA CON EL NÚMERO DE ELEMENTOS EN LA LISTA

//amigos[amigos.length] = "Francisco";
//AÑADE "FRANCISCO" AL FINAL DE LA LISTA

//amigos.push("Luis", "Fernando", "Oscar"); AÑADE AMIGOS AL FINAL DE LA LISTA

//amigos.pop("Abelardo"); ELIMINA AMIGOS A PARTIR DE ABELARDO
//document.write(amigos[0]);
//document.write(amigos[1]);
//document.write(amigos[2]);
//document.write(amigos[3]);
//document.write(amigos[4]);
//document.write(amigos[5]);

//var amigos2 = ["Fernando", "José", "Armando"];
//var amigos3 = amigos.concat(amigos2);
//document.write(amigos3);
//CONCATENA LAS LISTAS AMIGOS1 Y AMIGOS2 EN UNA SOLA LISTA, AMIGOS3

//document.write(amigos.join(" : "));
//ACEPTA LAS OPCIONES  , | ; ETC.
//VARIANTE:
//var amigos2 = amigos.join(" | ");
//document.write(amigos2); 

var ordenados = amigos.sort();
document.write(ordenados);
//EXISTE LA VERSIÓN amigos.reverse(); QUE ORDENA DE FORMA INVERSA