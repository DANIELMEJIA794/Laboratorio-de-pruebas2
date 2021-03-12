/*for( i = 1; i <= 12; i++ ){
    document.write("El texto de prueba " + "<br>")
}*/
//TAMBIÉN SE PUEDE INTENTAR I--

/*for( i = 0; i <= 12; i++ ){
    document.write( i + "<br>")
}*/

/*numeroDeUsuarios = 50;
for ( i = 0; i <= numeroDeUsuarios; i++ ){
    document.write( i+ "<br>" );
}*/
//VARIANTE DE i++, i = i +1

var diasSemana = ["Lunes", "Martes", "Miércoles", "Jueves", "Viernes", "Sábado", "Domingo"];
for ( i = 0;  i <= diasSemana.length - 1; i++ ){
    document.write( diasSemana[i] + "<br>" );
}