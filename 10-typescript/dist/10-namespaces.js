"use strict";
// --- Declaración del namespace ---
var Tools;
(function (Tools) {
    // Función dentro del namespace
    function calcularArea(base, altura) {
        return base * altura;
    }
    Tools.calcularArea = calcularArea;
    // Clase dentro del namespace
    class Rectangle {
        constructor(width, height) {
            this.width = width;
            this.height = height;
        }
        area() {
            return `El área del rectángulo es: ${this.width * this.height}`;
        }
    }
    Tools.Rectangle = Rectangle;
})(Tools || (Tools = {}));
class Rectangle {
}
// Usando el namespace
const area = Tools.calcularArea(5, 8);
const rect = new Tools.Rectangle(4, 10);
// Mostrar en HTML
const output10 = document.getElementById("output10");
if (output10) {
    output10.innerHTML = `
        <li><strong>Namespace Function:</strong> Área calculada = ${area}</li>
        <li><strong>Namespace Class:</strong> ${rect.area()}</li>
    `;
}
