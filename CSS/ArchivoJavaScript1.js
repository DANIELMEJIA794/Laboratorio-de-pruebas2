var primeraPagina = document.getElementById('primera');
var segundaPagina = document.getElementById('segunda');
var terceraPagina = document.getElementById('tercera');
var cuartaPagina = document.getElementById('cuarta');
var Listautores = document.getElementById('Listautores');
var LisCat = document.getElementById('ListCat');

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
    listas.style.display === 'block'?listas.style.display = 'none': listas.style.display = 'block';
}  