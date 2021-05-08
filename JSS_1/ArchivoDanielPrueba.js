/*TIPOS DE DATOS

VALORES:
NÚMEROS
STRINGS
String('Me llamo' + ' Mi nombre es' + ' Y soy')
BOOLEANOS
OBJETOS
Funciones
valores indefinidos (undefined y null)
key:value
run: function()

FUNCIONES
function MyFunction(){código};

function SayMyName(name) {
    console.log('Hello' + name);
}


sayHello(´Saul');

OPERADORES
true
false
&&
||
<
>
<=
>=
=
ej. ('animal' == 2) --> false
( 5 > 10) ---> false
(2 ==2 && 5 < 10)
(true||false) ---> true
(false || 5 < 55) --->true



NÚMEROS


(5+5)
(5-5)
(5*5)
(5/5)
(10%2)
(10%3)

BOOLEANOS
True
False

TYPE OF
typeof 1 --> number
typeof 'Hello' --> string
typeof { id: 1 } --> object
typeof function() {} ---> function



VARIABLES Y OPERADORES
*/
/*var foo = 'Hola Mundo';
console.log(foo);*/

/*var uno = 1;
console.log(uno);*/

//var uno = 1
//console.log(window)

/*var lastname = 'Doe';
function sayHello(){
    var lastname = 'Doe'
    console.log(lastname);
}
sayHello();*/


/*var lastname = 'Doe';
function sayHello(){
    var lastname = 'Castillo'
    console.log(lastname);
}
sayHello();*/

//var animal= 'dog';

/*var numero = 1;
numero = numero + 1; 
console.log(numero);*/

/*var numero = 1;
numero +=1 ;
console.log(numero);*/

/*var numero = 1;
numero +=4 ;
numero +=4 ;
console.log(numero);*/

/*var numero =1
numero*=4;
numero*=4;
console.log(numero);*/

//FUNCIONES

/*function sayHello() {
    console.log('Hello');
};
sayHello();*/

/*function sayHello() {
    return'Hello';
};
console.log( sayHello() );*/

/*function suma(num1, num2){
    return num1 + num2;
};
var result = suma(9,32);
console.log(result);*/


/*var sayMyFavouriteColor = function(){
    return 'Blue';
};
console.log(sayMyFavouriteColor());*/

/*function sayMyColor(color){
    return function(fruit){
        return color + fruit;
    };
};
var valor1 = sayMyColor('Green')(' Apple');
console.log(valor1);*/

/*var myAge = (function(){
    return 22;
}) ();*/

/*variante
var myAge = (function(){
    return age;
}) (22);*/

/*function execute(fn){
    fn();
};
execute (function(){
    console.log('Hello world');
});*/


///OBJETOS LITERALES

/*var person = {
    id: 1,
    name: 'Mario',
};
console.log(person.name);*/

/*function consultas(){
    // var haciendoSplit = 'hola como estas'.split(' ');
    // console.log(haciendoSplit.join('*'));
    // person.push({name: 'Daniel'});
    // person.pop();
    // // const array = ['1', '2', '3'];
    // person.forEach(element => element.cityInfo.name= 'San Martin');
    // person[1].name = 'Alejandro'
    var objetoSeleccionado = (person.filter(element => element.name == 'José')).forEach(x=> x.isStudent = false);
    //objetoSeleccionado.isStudent = false;
    console.log('objetoSeleccionado', objetoSeleccionado);
    console.log('ID QUE COMIENZA EN 0',person);
}
//var person = [0,1,2]
//person[0].name = Mario
//person[1].name = Jose
var person =[];
person = 
[
    {
        ruc: 12,
        name: 'Mario',
        talk: function(){
            console.log('im talking');//MÉTODO
        },
        isStudent: true,
        cityInfo: {
            name: 'Lima',
        }, //OBJETO DE UN OBJETO
        schoolInfo: function(){
            return {
                name: 'San Marcos'
            }//MÉTODO APARTE
        }
    },
    {
        ruc: 21,
        name: 'José',
        talk: function(){
            console.log('im talking');//MÉTODO
        },
        isStudent: true,
        cityInfo: {
            name: 'Lima',
        }, //OBJETO DE UN OBJETO
        schoolInfo: function(){
            return {
                name: 'San Marcos'
            }//MÉTODO APARTE
        }
    },
    {
        ruc: 32,
        name: 'José',
        talk: function(){
            console.log('im talking');//MÉTODO
        },
        isStudent: true,
        cityInfo: {
            name: 'Lima',
        }, //OBJETO DE UN OBJETO
        schoolInfo: function(){
            return  ('name:San Marcos')
            //MÉTODO APARTE
        }
    }
];
// person.talk();

person.age = 35;
console.log(person[0].name);
//console.log(person.id);
console.log(person[2].cityInfo.name);
console.log(person[1].schoolInfo().name);
console.log(person.age);*/

// delete person.age;
//console.log(person);

//MÉTODOS DE ARRAY
//for each

//metoidos iterativos


//CONDICIONALES

/*if (5 < 10) {
    console.log("Se cumple");
} else{
  console.log("No se cumple");  
}

if (5 < 4 ) {
    console.log("Se cumple");
} else {
    console.log("No se cumple");
}*/

/*var name = prompt('¿Cuál es tu nombre?');
if (name == 'Juan') {
    console.log('Hola Juan');
} else {
    console.log('No te conozco');
}*/

/*var name = prompt('¿Cuál es tu nombre?');
if (name == 'Juan') {
    console.log('Hola Juan');
} else if (name == 'Alberto') {
    console.log('Hola Alberto');
} else {
    console.log('No te conozco');
}*/


/*var name = prompt('¿Cuál es tu nombre?')
switch(name) {
    case 'Juan':
    console.log('Hola Juan');
    break;
    case 'Mario':
    console.log('Hola Alberto');
    break;
    default:
    console.log('No te conozco');
}*/

/*if(0){
    console.log('Se cumple');
} else {
    console.log('No se cumple');
}*/

//'', -0, null cumplen el (0) como valor falso

/*if({}){
    console.log('Se cumple');
} else {
    console.log('No se cumple');
}*/

/*if('Marlon'){
    console.log('Se cumple');
} else {
    console.log.('No se cumple');
}*/

/*if (4){
    console.log('Se cumple');
} else {
    console.log('No se cumple');
}*/


//COERCIÓN

//Coerción implícita

/*var age = prompt('¿Cuál es tu edad?')
console.log(typeof age);

//Coerción implíicta del string ingresado  

if (age > 18 ) {
    console.log('Eres mayor de edad');
} else {
    console.log('Eres menor de edad');
}*/

/*var number='33'
var newnumber=Number(number)
console.log(typeof newnumber);*/

//string & number

/*var foo = '45'
var bar = parseInt(foo)
console.log(typeof bar);*/

/*var foo = 500
var bar = foo.toString()
console.log(typeof bar);*/

//Caso de +
/*var f= '2'+ 33;
console.log(typeof f);*/

//Caso de -
/*var f='1' - 33;
console.log(typeof f);*/

//Booleanos
/*var a = 100
var b = 'test'
var c = null;

a || b; entrega '100'

a && b; entrega 'true */

/*var a = 100
var b = false
varc = null

a && b;*/ 

//Igualaciones

//Solo vale con valores del mismo tipo en == y ====
/*
a === a; //true
1 == '1'; //1 ==1
1 === '1';
*/

//EJEMPLO DE COERCIÓN

/*var myNumber = 1;

if(myNumber == 1 && myNumber == 2){
}; //sale false*/

/*var myNumber ={
    number: 1,
    toString: function(){
        return myNumber.number++;
    }
};

if(myNumber == 1 && myNumber == 2){
    console.log("Salio bien");
}*/

//Variante

/*var myNumber ={
    number: 1,
    valueOf: function(){
        return myNumber.number++;
    }
};

if(myNumber == 1 && myNumber == 2){
    console.log("Aquí vamos");
}*/

/*var myNumber ={
    number: 1,
    valueOf: function(){
        return myNumber.number++;
    }
};

if(myNumber == 1 && myNumber == 2 && myNumber==3){
    console.log("El siguiente intento")};*/


//OPERADOR TERNARIO
/*if (1< 5) {
    console.log('Es menor');
} else {
    console.log('Es mayor');
};*/

/*(1 < 5) ? console.log('Uno es menor'):('Uno es mayor');*/

/*((1 < 5) && true) ? 
(true || false) ? 
console.log('se cumple la condición'):console.log('no se cumple la condición')
: console.log('es menor');console.log('es mayor');()*/ //se cumple la primera condición
//el : actúa como un else if

/*((1 < 5) && true) ?
(false || false) ?
console.log('aui pasa algo'):console.log('no ocurre un evento')
:console.log('es menor');console.log('Es mayor');/* //sale la segunda condición

/*((7 < 5) && true) ?
(false || false) ?
console.log('aui pasa algo'):console.log('no ocurre un evento')
:console.log('es menor');console.log('Es mayor') //sale la tercera condición*/

//No se recomienda empotrar código con operadores ternarios.

//OPTIMIZACIÓN DE RETORNO

/*var CANTIDAD_LAPTOPS = 500;

function verificarDisponibilidad(cantidad){
    if(cantidad < CANTIDAD_LAPTOPS){
        return true;       
     } else {
         return false;
     }
}
console.log(verificarDisponibilidad(200));*/ //envía true


/*var CANTIDAD_LAPTOPS = 500;

function verificarDisponibilidad(cantidad){
    return cantidad < CANTIDAD_LAPTOPS;
}
    console.log(verificarDisponibilidad(600)); //envía false*/

/*var CANTIDAD_LAPTOPS = 500;

function verificarDisponibilidad(cantidad){
    return cantidad < CANTIDAD_LAPTOPS;
    }
    console.log(verificarDisponibilidad(-8));*/ //envía true

/*var CANTIDAD_LAPTOPS = 500;

function verificarDisponibilidad(cantidad){
    return cantidad < CANTIDAD_LAPTOPS && cantidad > 0;
    }
    console.log(verificarDisponibilidad(-8));*/ //envía false

/*var CANTIDAD_LAPTOPS = 500;

function verificarDisponibilidad(){
    var obj = {
        id : 1,
        name: 'Pedro'
    }
    return obj
}
        console.log(verificarDisponibilidad());*/ //recupera el objeto de propiedades 1 y pedro
        
//Versión de recuperar objeto anónimo

/*function verificarDisponibilidad(){
        return {
        id : 1,
        name: 'Pedro'
        }
    }
        console.log(verificarDisponibilidad()); //devuelve los mismos resultados que con var obj*/

    
//ARRAYS

/*var frutas = ['Manzana']
console.log(frutas[0])*/

/*var frutas = ['Manzana', 'Banana']
console.log(frutas[1])

var frutas = ['Manzana', 'Banana', true, function(){}, [],{}]
console.log(frutas[0])
console.log(frutas[1])
console.log(frutas[2])
console.log(frutas[3])
console.log(frutas[4])
console.log(frutas[5])
console.log(frutas[6])
console.log('Cantidad de elementos', frutas.length);
console.log('Ültimo elemento' , frutas[5]);
console.log('Último Elemento', frutas[frutas.length - 1]);
console.log('Último Elemento' , frutas[frutas.length]);

frutas.push('Mango');
console.log('Último Elemento', frutas[frutas.length - 1]);

frutas.pop('Mango');
console.log('Último Elemento', frutas[frutas.length - 1]);*/

//BUCLES

//for

/*for(var x=0; x <10; x++){
    console.log('Ojalá funcione', x);
}*/

/*var frutas = ['Manzana', 'Melon', 'Banana', 'Piña']
for(var x=0; x < frutas.length; x++){
    console.log('Ojalá funcione', x);
}*/

/*var frutas = ['Manzana', 'Melon', 'Banana', 'Piña'];
for(var x=0; x < frutas.length; x++){
    console.log(frutas[x]);
};*/

/*var students = [];
for (var x = 0; x < 10; x++){
    students.push('STUDENT' + x);
};

console.log(students);*/

//Trabajo con for continue y for break

//continue

/*var x = 0;
for (var x = 0; x < 10; x++){
    if (x == 5){
        continue;
    };
    console.log(x);
};/*


//break

/*var x = 0;
for (var x = 0; x < 10; x++){
    if (x == 5){
        break;
    };
    console.log(x);
};*/

//while

/*var students = [];
var y = 0;
while(y < 10){
    students.push('STUDENT' + y);
    y++;
}; 
console.log(students);*/

/*var students = [];
var y = 0;
do {
    students.push('STUDENT' + y);
    students.push('STUDENT' + y);
    y++;
} while (y < 10); 
console.log(students);*/

/*var students = [];
var y = 0;
do {
    students.push('STUDENT' + y);
    y++;
} while (false); 
console.log(students);*/

//for in

/*var students =['Mario', 'Juan', 'Enrique', 'Jorge'];
var i = 0;
for (var index in students){
    console.log(index)
};*/


/*var students =['Mario', 'Juan', 'Enrique', 'Jorge'];
var i = 0;
for (var index in students){
    console.log(students[index]);
};*/

//for of

/*var students =[
    {
        id: 1,
        name: 'Jose'
    } , {
        id: 2,
        name: 'Arturo'
    } , {
        id: 3,
        name: 'Luis'
    }];
    for (var index of students){
        console.log(index);
    };*/
    
/*var students =[
    {
        id: 1,
        name: 'Jose'
    } , {
        id: 2,
        name: 'Arturo'
    } , {
        id: 3,
        name: 'Luis'
    }];
    for (var index of students){
        console.log(index.name);
    };*/


//EJERCICIO
/*for (var x = 1; x <= 100; x++){
    var result =' ';
    if (x % 5 == 0){
        result+='Fizz';
    }
    if (x % 3 == 0){
        result +='Buzz';
    };
    console.log(result || x);
};*/

//NO APARECEN LOS NÚMEROS


//HOISTING

/*getCatName('Alfred0');

function getCatName(name){
    console.log('Hello ' + name);
}*/

/*console.log(y)

var y;*/ //undefined

/*var y;

console.log(y);

y = 'Hello soy Carolina';*/ //también se declarará undefined


//VALOR Y REFERENCIA

/*var a = 1;
var b = a;
console.log(a);
console.log(b);*/ //se imprimen 1 y 1 como variables diferentes con valores diferentes

/*var a = 1;
var b = a;
a = 2;
console.log(a);
console.log(b);*/ // se imprimen 2 y 1

/*var c = 'Luis';
var d = c; 
console.log(c);
console.log(d);*/ // se imprimen Luis y Luis

/*var c = 'Luis';
var d = c;
c = 'Juana';
console.log(c);
console.log(d);*/ // se imprimen Juana y Luis, funcionan distintos al ser strings

/*var animal = {
    name: 'Bobby',
    color: 'brown'
}

var dog = animal

console.log(animal);
console.log(dog);*/ //Las propiedades del perro se repiten para animal y dog

/*var animal = {
    name: 'Bobby',
    color: 'brown'
}

var dog = animal

dog.name = 'Teresa';

console.log(animal);
console.log(dog); //se modifica el nombre del perro en ambos casos a Teresa */

/*var animal = {
    name: 'Bobby',
    color: 'brown'
}

var dog = animal

dog.name = 'Teresa';
dog.color = 'beige';

console.log(animal);
console.log(dog);*/ //se modifica las propiedades del perro en ambos casos a Teresa y beige

/*var animal = {
    name: 'Bobby',
    color: 'brown'
}

var dog = animal

function changeReference(obj){
    obj.name = 'Name Changed';
};

changeReference(animal);
console.log(animal);
console.log(dog);*/

/*var a = [1, 2, 3, 4, 5]
var b = a
console.log(a);
console.log(b);*/

/*var a = [1, 2, 3, 4, 5];
var b = a;
a[0] = 100; 
console.log(a);
console.log(b);*/


//OBJETO ARGUMENTS

/*function register(name, lastname, password){
    console.log(arguments)
    console.log(name, lastname, password)}

register('Ernesto', 'González', '2aaa35', 'dato adicional')*/ //dato adicional no se ejecuta gracias a arguments

/*function register(name, lastname, password){
    console.log(arguments['1']),
    console.log(name, lastname, password)}

register('Ernesto', 'González', '2aaa35', 'dato adicional')*/ //se muestra el lastname como un string

/*function register(name, lastname, password){
    console.log(arguments.length),
    console.log(name, lastname, password)}

register('Ernesto', 'González', '2aaa35', 'dato adicional')*/ //da el número de elementos de la función

function register(name, lastname, password){
    if(arguments.length < 2){
        return 0;
    }
    console.log(name, lastname, password)}

register('Ernesto', 'González', '2aaa35', 'dato adicional') //devuelve los argumentos si se cumple la condición


//SCOPES

/*var bar = 'Mario';
window;*/

/*var bar = 'Mario';
function getName(){
    return window.bar;
}
console.log(getName()); */ //Scope Global
//Se centra en la variable determinada por JavaScript

/*var bar = 'Mario';
function getName(){
    var bar = 'Enrique';
    return bar;
}
console.log(getName());*/ // Scope Local //se centra en el ámbito local de var bar
//si Enrique es comentada, entonces regresa a la variable Mario

/*function getName(){
    return bar;
}
console.log(getName());*/
//solo retorna un error, debido a un valor indefinido

/*var bar = 'Francisco'

function getName(){
    var bar = 'Javier'
    function getDetails(){
        var bar = 'Elizabeth'
        console.log(bar)
    }
    getDetails()
}

console.log(getName())*/
//se publica la variable Elizabeth, al ir comentando se sale de adentro para fuera (se imrprime primero Javier, y luego Francisco)


//SCOPE DE OBJETOS

/*for() {
    var bar =1;
}
if(){
    var bar = 1;
}
while(){
    var bar = 1
}*/
//todos son scopes de bloques

/*var person = {
    name: 'Ricardo',
    lastname: 'Bravo',
    edad: 22,
    getCompleteName(){
        return person.name + ' ' + person.lastname;
    }   
}

console.log(person.getCompleteName());*/
//NO VALE

//This 

/*var person = {
    name: 'Ricardo',
    lastname: 'Bravo',
    edad: 22,
    getCompleteName(){
        return this.name + ' ' + this.lastname;
    }   
}

console.log(person.getCompleteName());*/

//This devuelve valores del entorno local del programa.

/*var person = {
    name: 'Ricardo',
    lastname: 'Bravo',
    edad: 22,
    getCompleteName: function(){
        return this.name + ' ' + this.lastname;
    },
    getThis: function() {
        console.log(this);
    }   
}

console.log(person.getThis());*/

/*var name   ="Ricardo"
var myAge = 34

var person = {
    name: 'Ricardo',
    lastname: 'Bravo',
    edad: 22,
    getCompleteName: function(){
        return this.name + ' ' + this.lastname;
    },
    getThis: function() {
        console.log(this);
        console.log(myAge);
    }   
}

console.log(person.getThis());*/


/*var name   ="Ricardo"
var myAge = 34

var person = {
    name: 'Ricardo',
    lastname: 'Bravo',
    edad: 22,
    getCompleteName: function(){
        return this.name + ' ' + this.lastname;
    },
    getThis: function() {
        console.log(this);
        console.log(this.myAge);
    }   
}

console.log(person.getThis());
console.log(this.myAge);
console.log(this);
console.log(this == window);*/

//sale un undefined

//al añadirle console.log(this.myAGe) se imprime el scope global de myAge, externo al objeto en window
//al hacer una comparación con == el resultado es true

/*var name   ="Ricardo"
var myAge = 34

var person = {
    name: 'Ricardo',
    lastname: 'Bravo',
    edad: 22,
    getCompleteName: function(){
        return this.name + ' ' + this.lastname;
    },
    getThis: function() {
        console.log(this);
        console.log(this.myAge);
        console.log(this == window);
    }   
}

console.log(person.getThis());
console.log(this.myAge);
console.log(this);
console.log(this == window);*/

//en cambio aquí el resultado es false


//SCOPES. PÉRDIDA DE REFERENCIA

/*var myObj = {
    bar: 'foom',
    func: function(){
        console.log(this.bar);
    }
};

myObj.func();*/

/*var myObj = {
    bar: 'foom',
    func: function(){
        console.log(this.bar);
        (function(){
            debugger;
            console.log(this.bar)
        })()
    }
};

myObj.func();*/

//sale undefined porque this responde a window, no a la función local

/*var myObj = {
    bar: 'foom',
    func: function(){
        var self = this;
        console.log(this.bar);
        (function(){
            console.log(self.bar)
        })()
    }
};

myObj.func();*/


//con self la información se refiere al entorno global de myObj

/*var myObj = {
    bar: 'foom',
    func: function(){
        var self = this;
        console.log('1 - ' + this.bar);
        (function(){
            console.log('2 - ' + self.bar)
        })()
    }
};

myObj.func();*/

//aparecen diferenciados el foom de this.bar y el foom de self.bar

/*var myObj = {
    bar: 'foom',
    func: function(){
        var self = this;
        console.log('1 - ' + this.bar);
        (function(){
            console.log('2 - ' + self.bar)
        })();
        var mySecondFunction = function(){
            console.log('3 - ' + this.bar);
        }
        mySecondFunction();
    }
};

myObj.func();*/

//con this sale undefined, con self se imprime la variable mySecondFunction


//CALL AND APPLY

/*var obj ={
    name: 'John Castillo',
    greet: function(){
        debugger;
        console.log('Hello ' + this.name);
    }
}
//obj.greet();

//para un mayor alcance se hace


var person ={
    name: 'William Crookes',
}
obj. greet.call({name:'Juan'});*/


//El this se refiere a Juan

//El segundo var no se aplica porque this obedece en el caso anterior al objeto global John.

//con debugger se ve el cambio}

var obj ={
    name: 'John Castillo',
    greet: function(){
        console.log('Hello ' + this.name);
    }
}
//obj.greet();

//para un mayor alcance se hace


/*var person ={
    name: 'William Crookes',
}
obj. greet.call(person);

//Se muestra la variable person de William Crookes.*/

var obj ={
    name: 'John Castillo',
    greet: function(age){
        console.log('Hello ' + this.name + ' your age is ' + age);
    }
}
//obj.greet();

//para un mayor alcance se hace


/*var person ={
    name: 'William Crookes',
}
obj.greet.call(person, 22);
obj.greet.call(person, 22);*/

var obj ={
    name: 'John Castillo',
    greet: function(age){
        console.log(arguments);
        console.log('Hello ' + this.name + ' your age is ' + age);
    }
}
//obj.greet();

//para un mayor alcance se hace


var person = {
    name: 'William Crookes',
};
//obj.greet.call(person, 22);
obj.greet.apply(person, [22]); 


//FIRST CLASS FUNCTIONS

/*function Person(name, lastname){
    this.name = name;
    this.lastname = lastname;
    this.greet = function(){
        return 'Hello ' + this.name  +'your last name is ' + this.lastname;
    }
}
var Mario = new Person(' Juan ', 'Castillo');

console.log(Mario.greet());*/

//si se retira new la propiedad greet aparece como undefined

/*function Person(name, lastname){
    this.name = name;
    this.lastname = lastname;
    this.greet = function(){
        return 'Hello ' + this.name  +'your last name is ' + this.lastname;
    }
}
var Mario = new Person(' Juan ', 'Castillo');
var Lucrecia = new Person();
console.log(Mario.greet());
console.log(Lucrecia.greet())*/


//el resultado es un undefined

/*function Person(name, lastname){
    this.name = name || 'Miguel ';
    this.lastname = lastname || 'Savater';
    this.greet = function(){
        return 'Hello' + this.name  +'your last name is ' + this.lastname;
    }
}
var Mario = new Person(' Juan ', 'Castillo');
var Lucrecia = new Person();
console.log(Mario.greet());
console.log(Lucrecia.greet())*/

//or añade los valores de Miguel y Savater por descarte

/*function Person(name, lastname){
    this.name = name || 'Miguel ';
    this.lastname = lastname || 'Savater';
    this.greet = function(){
        return 'Hello' + this.name  +'your last name is ' + this.lastname;
    }
}
var Mario = new Person(' Juan ', 'Castillo');
//var Lucrecia = new Person();
//console.log(Mario.greet());
//console.log(Lucrecia.greet());
console.log(Mario);*/

//sale la funcion y sus detalles

/*function Person(name, lastname){
    this.name = name || 'Miguel ';
    this.lastname = lastname || 'Savater';
    this.greet = function(){
        return 'Hello' + this.name  +'your last name is ' + this.lastname;
    }
}
var Mario = new Person(' Juan ', 'Castillo');
console.log(Mario);function executeFunctionPerson(person){
    console.log(person.greet());
}
executeFunctionPerson(Mario);*/

//Da el mismo resultado que la función anterior.


//OBJECT PROTOTYPE

/*var point = {
    x: 10,
    y: 20
};
console.log(point);

var Animal = {
    type: 'Dog',
    color: 'White',
    age: 2,
    sayHello: function(){
        console.log('Hello from Animal Object');
    };
};

Animal.__proto__.sayHello() = function(){
    console.log('Hello from Animal.__proto__');
};
Animal.sayHello();*/

//NO FUNCIONA

/*var MyObjectNumber = {
    getNumber: function(){
        debugger;
        return this.number;
    }
}
var a = {
    number: 22,
    __proto__: MyObjectNumber,
};
var b = {
    number: 50,
    __proto__: MyObjectNumber,
};
console.log(MyObjectNumber);*/


/*function Letter(number){
    this.number = number;
}
Letter.prototype.getNumber = function(){
    return this.number;
}

var a = new Letter(4);
var b = new Letter(26);

console.log(a);*/

/*function Letter(number){
    this.number = number;
}
Letter.prototype.getNumber = function(){
    return this.number;
}

var a = new Letter(4);
var b = new Letter(26);

console.log(a.getNumber());
console.log(b.getNumber());*/

String.prototype.IsNullOrEmpty = function(){
    if(this == null){
        return true;
    } if(this.trim().length === 0){
        return true;
    }
    return false;
};

var studentName = "Roberto";
var b = " ";
console.log(studentName.IsNullOrEmpty());
console.log(b.IsNullOrEmpty());

//¡SALIÓ BIEN!