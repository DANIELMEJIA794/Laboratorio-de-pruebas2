/*function saludo() {
    document.write("¡Que tengas un buen día!");
}
saludo();*/

/*function saludo(nombre) {
    document.write("Buen día " + nombre);
}
saludo("Alberto");*/
//SE PUEDEN AÑADIR VALORES DE NÚMERO, EDAD FECHA TEXTO VALORES BOOLEANOS ETC

/*function suma(numero1, numero2) {
    var numero1 = numero1;
    var numero2 = numero2;
    return numero1 + numero2;
}
document.write( suma(10, 16) );*/

//VARIANTE
/*var suma = function (numero1, numero2) {
        var numero1 = numero1;
        var numero2 = numero2;
        return numero1 + numero2;
    }
    document.write (suma (20, 16) );
    document.write ("<br>");
    document.write (suma (15, 89) );*/

function numeroMaximo (valor1, valor2) {
    if ( valor1 > valor2 ){
        return valor1;
    } else {
        return valor2;
        }
    }
document.write ( "El numero máximo es " + numeroMaximo(10,40) );