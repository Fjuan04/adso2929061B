"use strict";
// ----------------------------
// Mixins
// ----------------------------
function Combat(Base) {
    return class extends Base {
        attack() {
            return "Hornet realiza un ataque con su aguja 🗡";
        }
        parry() {
            return "Hornet ejecuta un contraataque perfecto ✨";
        }
    };
}
function Agility(Base) {
    return class extends Base {
        jump() {
            return "Hornet salta con agilidad entre estructuras 🦗";
        }
        dash() {
            return "Hornet realiza un dash veloz 💨";
        }
    };
}
function Exploration(Base) {
    return class extends Base {
        markLocation() {
            return "Hornet marca una ubicación en Pharloom 🗺";
        }
    };
}
// ----------------------------
// Clase base
// ----------------------------
class HornetBase {
    constructor(name) {
        this.name = name;
    }
}
// ----------------------------
// Clase final con mixins
// ----------------------------
class Hornet extends Exploration(Agility(Combat(HornetBase))) {
}
// ----------------------------
// IMPRIMIR EN PAGINA HTML
// ----------------------------
const output = document.getElementById("output16");
if (output) {
    const hornet = new Hornet("Hornet");
    const messages = [
        hornet.attack(),
        hornet.parry(),
        hornet.jump(),
        hornet.dash(),
        hornet.markLocation()
    ];
    output.innerHTML = `
    <h2>${hornet.name} — Habilidades</h2>
    <ul>
      ${messages.map(msg => `<li>${msg}</li>`).join("")}
    </ul>
  `;
}
