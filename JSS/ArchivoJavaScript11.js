/*var variableGlobal = "Esta es global";
alert(variableGlobal);
var miFuncion = function (){
    alert(variableGlobal);
    variableGlobal = "Esta es Global, modificada";
    alert(variableGlobal);
}
miFuncion();*/

//SE PUEDE COLOCAR DESPUÉS DE miFuncion Y INCLUSIVE ASÍ FUNCIONA

var variableGlobal = "Esta es global";
alert(variableGlobal);
var miFuncion = function (){
    var variableLocal = "Esta es local";
    alert(variableLocal);
}
miFuncion();

//SOLO SE PUEDE ACCEDER DENTRO DE LA FUNCIÓN
//SIN VAR, LA VARIABLE LOCAL PASA A SER UNA VARIABLE GLOBAL, NO SE RECOMIENDA HACERLO.

/*var variableGlobal = "Esta es global";
alert(variableGlobal);
var miFuncion = function (){
        var variableLocal = "Esta es local";
        var funcionLocal = function() {
        var variableLocal= "Esta es una variable local, dentro de la función local"; 
        alert(variableLocal);
        }
        funcionLocal();
    }
miFuncion();*/

/*var variableGlobal = "Esta es global";
alert(variableGlobal);
var miFuncion = function (){
        var variableLocal = "Esta es local";
        var funcionLocal = function() {
        //var variableLocal= "Esta es una variable local, dentro de la función local"; 
        alert(variableLocal);
        }
        funcionLocal();
    }
miFuncion();*/

/*LAS VARIABLES SOLO FUNCIONAN DESDE DENTRO HACIA AFUERA. NO SE PUEDE ACCEDER VARIABLES DE MENOR JERARQUÍA POR PONER // A VARIABLES DE MAYOR JERARQUÍA. SE DEBE
ELIMINAR SOLO LAS VARIABLES DE MENOR JERARQUÍA, NO A LA INVERSA.*/
//SE VE LO QUE ESTÁ ESCRITO DENTRO DE LA FUNCIÓN NO SE PUEDE ACCEDER A ELLA UNA VEZ QUE SE ELIMINA

(function(){
    var variableGlobal = "Esta es Global";
    var miFuncion = function(){
        alert(variableLocal);
        var funcionLocal = function(){
            var variableLocal = "Esta es variable local, dentro de funcionLocal";
        }
        funcionLocal();
    }
}
)
