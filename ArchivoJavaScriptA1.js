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

function consultas(){
    console.log('ENTRAS A ESTA FUNCION');
}
//var person = [0,1,2]
//person[0].name = Mario
//person[1].name = Jose
var person =[];
person = 
[
    {
        id: 1,
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
        id: 2,
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
        id: 3,
        name: 'Arturo',
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
console.log(person.id);
console.log(person.cityInfo.name);
console.log(person.schoolInfo().name);
console.log(person.age);

// delete person.age;
console.log(person);

