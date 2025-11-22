// MAPPING TYPES

//Este es un type que convierte todas las propiedades de una interfaz en string
type Strings<T> = {
    [K in keyof T]: string;
};


interface Data {
    name : string;
    age : number;
    phone: string;
}

let persona : Strings<Data> =  {
    name : 'Juan',
    age : '21', // Sin el remapeo de tipos me da error
    phone : '3206814798' 
}



// Unions
let union : string | number = 'Hola'



const output07 = document.getElementById('output07');

if(output07){
    output07.innerHTML =   `<li class="chat-bubble my-2"><strong>ReMapped variables:</strong></li>
                            <li><strong>(Original type STRING): </strong> ${persona.name} </li>
                            <li><strong>(Original type NUMBER):</strong> ${persona.age} (FINAL TYPE: ${typeof(persona.age)}) </li>
                            <li><strong>(Original type STRING):</strong> ${persona.phone} </li>
                            
                            <li class="chat-bubble my-2"><strong>Union Types:</strong></li>
                            <li><strong>( string | number)</strong> ${union} |  Type: ${typeof(union)} </li>

                            <li class="chat-bubble my-2"><strong>Intersection:</strong></li>
                            <li><strong>( string & number)</strong> ${union} |  Type: ${typeof(union)} </li>
                            `
}