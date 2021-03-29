var nombre = prompt('¿Cual es tu nombre?').toUpperCase();
var edad = 19;
if ( nombre == "CARLOS" ) {
    document.write("Bienvenido " + nombre);
} else if ( nombre == "Arturo") {
    document.write("Bienvenido Arturo");
} else {
    document.write("Bienvenido, anónimo");
}

//NO ME SALE EL ELSE IF

/*if ( edad == 18 ){
    document.write("Bienvenido, tienes 18 o más años");
} else if (nombre == "Arturo") {
    document.write( "Bienvenido " + nombre)
} else {
    document.write("No tienes 18 años")
}*/

/*if ( edad > 18 ) {
    document.write("bienvenido, eres mayor de edad")
} else {
    document.write("no tienes eres mayor de edad")
}*/
/*OPERADORES A USAR
>
>=
<
=<
! DISTINTO A*/ 

/*if (edad <18 || nombre == "Carlos") {
    document.write("Eres mayor de edad")
} else {
    document.write("no tienes permiso")
}*/
//SE PUEDEN AÑADIR MÁS OPERADORES && (AND)
//EL OPERADOR || ES OR

/*if (edad <18 || nombre == "Carlos") {
    document.write("true")
} else {
    document.write("false")
}*/

//EN CASO DE APLICAR UNA FUNCION SE HACE CON TRUE O FALSE
/*if (true) {
    document.write("ok");
}*/

//ESTO SE USA PARA COMPROBAR QUE UNA FUNCIÓN TIENE UN VALOR (EN ESTE CASO, NOMBRE)
/*if (nombre){
    document.write("koo-tey")
}*/

/*if (nombre === "Arturo" ) {
    document.write("koon-tay");
}*/

//ESTO SE USA PARA DETERMINAR QUE EL VALOR CONCUERDE CON SU CUALIDAD, 18 NO ES UN NOMBRE NI ES UN NOMBRE PREESTABLECIDO
/*if ( nombre === "18" ){
    document.write("octane");
} else {
    document.write("False");
}*/
