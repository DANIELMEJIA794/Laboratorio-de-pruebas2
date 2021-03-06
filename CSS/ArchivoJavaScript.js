alert('Aquí estoy');
var edadAdulta = 25;
var menorEdad = 18;

function verPrompt(){
    //if{}()else{}   ---> Si es que se cumple (), entonces ejecuto {}, sino se cumple ejecuta else{};
    if(edadAdulta<18){
        prompt('entro');
        console.log('mi primera función');
    } else if (menorEdad == 18){
        alert('es mayor de edad')
    }else{
        alert('No era cierto')
    }
}
// var verAlerta = (parametros) => { ejecución}