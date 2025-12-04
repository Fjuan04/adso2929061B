"use strict";
const output11 = document.getElementById('output11');
// Typeof guard
function show(value) {
    if (typeof value == 'string') {
        return 'Bienvenido: ' + value;
    }
    else {
        return value;
    }
}
// instanceof guard
class Animal {
    move(animal) {
        if (animal instanceof Perro) {
            return 'Camina';
        }
        if (animal instanceof Bird) {
            return 'Vuela';
        }
    }
}
class Perro extends Animal {
}
class Bird extends Animal {
}
let perro = new Perro;
let bird = new Bird;
if (output11) {
    output11.innerHTML = `
    <h3>typeof Guard</h3>
    <li class="border m-auto p-5 rounded-sm text-xl"><span class='badge badge-primary'>${typeof show('Hornet')}</span> ${show('Hornet')}</li>
    <li class="border m-auto p-5 rounded-sm text-xl"><span class='badge badge-primary'>${typeof show(90)}</span> Has alcanzado el ${show(90)}% del juego</li>

    <h3>typeof Guard</h3>
    <li class="border m-auto p-5 rounded-sm text-xl"><span class='badge badge-primary'>Perro</span> Este animal: ${perro.move(perro)}</li>
    <li class="border m-auto p-5 rounded-sm text-xl"><span class='badge badge-primary'>Pajaro</span> Este animal: ${bird.move(bird)}</li>

    <h3>type predicated Functions</h3>
    `;
}
