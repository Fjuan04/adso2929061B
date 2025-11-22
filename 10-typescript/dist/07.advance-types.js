"use strict";
// MAPPING TYPES
let persona = {
    name: 'Juan',
    age: '21', // Sin el remapeo de tipos me da error
    phone: '3206814798'
};
// Unions
let phone = 'Puede ser un string';
const output07 = document.getElementById('output07');
if (output07) {
    output07.innerHTML = `<li class="chat-bubble my-2"><strong>ReMapped variables:</strong></li>
                            <li><strong>(Original type STRING): </strong> ${persona.name} </li>
                            <li><strong>(Original type NUMBER):</strong> ${persona.age} (FINAL TYPE: ${typeof (persona.age)}) </li>
                            <li><strong>(Original type STRING):</strong> ${persona.phone} </li>`;
}
