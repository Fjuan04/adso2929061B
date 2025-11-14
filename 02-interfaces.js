"use strict";
const hornet = {
    name: 'Hornet',
    hp: 20
};
const hornet_op = {
    name: 'Hornet',
    hp: 20,
    // No pasa nada si no pongo la habilidad (Es opcional --> ?)
    hability: 'Dash'
};
const hornet_readonly = {
    name: 'Hornet',
    hp: 20,
    // No pasa nada si no pongo la habilidad (Es opcional --> ?)
    hability: 'Dash',
};
console.log(hornet_readonly.name);
const sumar = (a, b) => a + b;
sumar(2, 12);
class Hornet {
    constructor() {
        this.paws = 8;
    }
    hacerSonido() {
        console.log('waaaak');
    }
}
// En la interfaz super...  Solo esta definida 'power', pero extiende la interfaz principal
const hornet_super = {
    name: 'Hornet',
    power: 120,
    hp: 90
};
const habs = {
    2: 'perro',
};
const respuestaUsuario = {
    data: 2,
    success: true
};
console.log(respuestaUsuario.data);
