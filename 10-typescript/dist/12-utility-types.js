"use strict";
const output12 = document.getElementById('output12');
// Partial type allow you to make optional all the props defined on an interface
// here i need to use all the props
let iPhone16 = {
    width: 370,
    height: 700,
    borderR: 20,
    os: 'IOS'
};
let samsung = {
    width: 400,
    height: 800,
    borderR: 10,
};
// Records
let positions = {
    1: 'Primero',
    2: 'Segundo',
    3: 'Tercero',
};
let personExample = {
    name: 'Bob'
};
if (output12) {
    output12.innerHTML += `
    <h3 class='mb-2'>Partial</h3>
    <li class="border m-auto p-5 rounded-sm text-xl w-full">
        <h2>iPhone 16</h2>
        <h6 class='text-sm indent-4'>Width: ${iPhone16.width}</h6>
        <h6 class='text-sm indent-4'>Height: ${iPhone16.height}</h6>
        <h6 class='text-sm indent-4'>B radius: ${iPhone16.borderR}</h6>

        <h2 class='mt-3'>Samsung A30</h2>
        <h6 class='text-sm indent-4'>Width: ${samsung.width}</h6>
        <h6 class='text-sm indent-4'>Height: ${samsung.height}</h6>
        <h6 class='text-sm indent-4'>B radius: ${samsung.borderR}</h6>

    </li>`;
    //record define the object structure <key, value> ACCEPTS union types
    output12.innerHTML += `<h3 class='mb-2'>Record</h3>`;
    for (let k in positions) {
        output12.innerHTML += ` <li id='record' class="border m-auto px-5 my-1 rounded-sm text-xl w-full">key: ${k} | value: ${positions[k]} </li> `;
    }
    output12.innerHTML += `<h3 class='mb-2'>Pick</h3>
        <li id='record' class="border m-auto px-5 my-1 rounded-sm text-xl w-full">Person: ${personExample.name} </li> 
        
    `;
}
