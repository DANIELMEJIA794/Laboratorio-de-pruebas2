var primeraPagina = document.getElementById('primera');
var segundaPagina = document.getElementById('segunda');
var terceraPagina = document.getElementById('tercera');
var formulario = document.getElementById('formulario');
var Listautores = document.getElementById('Listautores');
var LisCat = document.getElementById('LisCat');
var fantasmas = document.getElementById('fantasmas');
var cocina = document.getElementById('cocina');
var palabras = document.getElementById('palabras');
var respira = document.getElementById('respira');
var verguenza = document.getElementById('verguenza');
var formulario = document.getElementById('formulario');
var btn1 = document.getElementById('primera');
var btn2 = document.getElementById('primera');
var btn3 = document.getElementById('primera');
var btn4 = document.getElementById('primera');
var btn5 = document.getElementById('primera');

function irPrimera(){
    primeraPagina.style.display = 'block';
    segundaPagina.style.display = 'none';
    terceraPagina.style.display = 'none';
    formulario.style.display= 'none';
    fantasmas.style.display = 'none';
    cocina.style.display = 'none';
    palabras.style.display = 'none';
    respira.style.display = 'none';
    verguenza.style.display = 'none';
    btn1.style.display = 'onclick';
    btn2.style.display = 'onclick';
    btn3.style.display = 'onclick';
    btn4.style.display = 'onclick';
    btn5.style.display = 'onclick';
}
function irSegunda(){
    primeraPagina.style.display = 'none';
    segundaPagina.style.display = 'block';
    terceraPagina.style.display = 'none';
    formulario.style.display = 'none';  
    fantasmas.style.display = 'none';
    cocina.style.display = 'none';
    palabras.style.display = 'none';
    respira.style.display = 'respira';
    verguenza.style.display = 'none';
}
function irTercera(){
    console.log('funcionas?')
    primeraPagina.style.display = 'none';
    segundaPagina.style.display = 'none';
    terceraPagina.style.display = 'block';
    formulario.style.display= 'none';
    fantasmas.style.display = 'none';
    cocina.style.display = 'none';
    palabras.style.display = 'none';
    respira.style.display = 'none';
    verguenza.style.display = 'none';
}
function irFormulario(){
    primeraPagina.style.display = 'none';
    segundaPagina.style.display = 'none';
    terceraPagina.style.display = 'none';
    formulario.style.display= 'block';
    fantasmas.style.display = 'none';
    cocina.style.display = 'none';
    palabras.style.display = 'none';
    respira.style.display = 'none';
    verguenza.style.display = 'none';
}
/*function mostrarListas(listas){
    //operador ternario:    condicion ? primera sentencia : segunda sentencia;
    if(listas.style.display === 'block'){
        listas.style.display = 'none'} else{
            listas.style.display = 'flex';
            listas.style = 'flex-direction: columns';
        }
}*/

function mostrarListas(listas){
    if(listas.style.display === 'block'){
        listas.style.display = 'none'} else{
            listas.style.display = 'flex';
            listas.style = 'flex-direction: columns';
        }
}
function irFantasmas(){
    primeraPagina.style.display = 'none';
    segundaPagina.style.display = 'none';
    terceraPagina.style.display = 'none';
    formulario.style.display= 'none';
    fantasmas.style.display = 'block';
    cocina.style.display =  'none';
    palabras.style.display = 'none';
    respira.style.display = 'none';
    verguenza.style.display = 'none';
}
function irCocina(){
    primeraPagina.style.display = 'none';
    segundaPagina.style.display = 'none';
    terceraPagina.style.display = 'none';
    formulario.style.display= 'none';
    fantasmas.style.display = 'none';
    cocina.style.display =  'block';
    palabras.style.display = 'none';
    respira.style.display = 'none';
    verguenza.style.display = 'none';
}
function irPalabras(){
    primeraPagina.style.display = 'none';
    segundaPagina.style.display = 'none';
    terceraPagina.style.display = 'none';
    formulario.style.display= 'none';
    fantasmas.style.display = 'none';
    cocina.style.display =  'none';
    palabras.style.display = 'block';
    respira.style.display = 'none';
    verguenza.style.display = 'none';
}
function irRespira(){
    primeraPagina.style.display = 'none'
    segundaPagina.style.display = 'none';
    terceraPagina.style.display = 'none';
    formulario.style.display= 'none';
    fantasmas.style.display = 'none';
    cocina.style.display =  'none';
    palabras.style.display = 'none';
    respira.style.display = 'block';
    verguenza.style.display = 'none';
}
function irVerguenza(){
    primeraPagina.style.display = 'none';
    segundaPagina.style.display = 'none';
    terceraPagina.style.display = 'none';
    formulario.style.display= 'none';
    fantasmas.style.display = 'none';
    cocina.style.display =  'none';
    palabras.style.display = 'none';
    respira.style.display = 'none';
    verguenza.style.display = 'block';
}
/*function irPrimera(){
    var btn1 = getDocumentById('irPrimera()');
    var btn2 = getDocumentById('irPrimera()');
    var btn3 = getDocumentById('irPrimera()');
    var btn4 = getDocumentById('irPrimera()');
    var btn5 = getDocumentByid('irPrimera()');
}*/

/*var btn = document.getElementById('btn'), 
btn = document.getElementById('irPrimera'),
contador=0;

function cambio(){if (contador==0){
    btn.getElementByID(btn).add('irPrimera')
}
btn.addEventListener('click',cambio,true);
}*/

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
// var verAlerta = (parametros) => { ejecución}*/