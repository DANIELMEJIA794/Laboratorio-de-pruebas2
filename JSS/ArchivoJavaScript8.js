/*var i = 0;
i.length = 10;
while (i <= 10) {
    document.write( [i] + "<br>" );
    i++;
}*/

var dias = ["Lunes", "Martes", "Miércoles", "Jueves", "Viernes", "Sábado", "Domingo"];
var numeroDias  = dias.length - 1;
var i = 0;
while (i <= numeroDias) {
    document.write( dias[i] + "<br>" );
    i++;
}