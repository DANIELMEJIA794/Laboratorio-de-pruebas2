var primeraPagina = document.getElementById('primera');
var segundaPagina = document.getElementById('segunda');
var terceraPagina = document.getElementById('tercera');
var cuartaPagina = document.getElementById('cuarta');
var Listautores = document.getElementById('Listautores');
var LisCat = document.getElementById('LisCat');

function irPrimera(){
    primeraPagina.style.display = 'block';
    segundaPagina.style.display = 'none';
    terceraPagina.style.display = 'none';
    cuartaPagina.style.display = 'none';}

function irSegunda(){
    primeraPagina.style.display = 'none';
    segundaPagina.style.display = 'block';
    terceraPagina.style.display = 'none';
    cuartaPagina.style.display = 'none';
}

function irTercera(){
    console.log('funcionas?')
    primeraPagina.style.display = 'none';
    segundaPagina.style.display = 'none';
    terceraPagina.style.display = 'block';
    cuartaPagina.style.display = 'none';
}
function irCuarta(){
    primeraPagina.style.display = 'none';
    segundaPagina.style.display = 'none';
    terceraPagina.style.display = 'none';
    cuartaPagina.style.display = 'block';
}

function mostrarListas(listas){
    console.log('que cuernitos?');
    //operador ternario:    condicion ? primera sentencia : segunda sentencia;
    listas.style.display === 'block'?listas.style.display = 'none': listas.style.display = 'block';
}








// alert('Aquí estoy');
// var edadAdulta = 25;
// var menorEdad = 18;

// function verPrompt(){
//     //if{}()else{}   ---> Si es que se cumple (), entonces ejecuto {}, sino se cumple ejecuta else{};
//     if(edadAdulta<18){
//         prompt('entro');
//         console.log('mi primera función');
//     } else if (menorEdad == 18){
//         alert('es mayor de edad')
//     }else{
//         alert('No era cierto')
//     }
// }
// var verAlerta = (parametros) => { ejecución}