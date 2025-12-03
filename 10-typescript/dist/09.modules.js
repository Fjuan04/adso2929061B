import { sumar } from './math.js';
const output9 = document.getElementById('output9');
let nmb1 = Number(prompt('Lets perform an addition, enter the first number: '));
let nmb2 = Number(prompt('Enter the second number: '));
let result = sumar(nmb1, nmb2);
if (output9) {
    output9.innerHTML = `<li>Number 1: ${nmb1}</li>
                        <li>Number 2: ${nmb2}</li>
                        <li>Result: ${result}</li>`;
}
