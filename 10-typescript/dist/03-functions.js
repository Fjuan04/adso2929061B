"use strict";
//
function calculateAttack(baseDamage, multiplier) {
    return baseDamage * multiplier;
}
const attack = calculateAttack(15, 2);
const output03 = document.getElementById('output03');
if (output03) {
    output03.innerHTML = `<li class="chat-bubble my-2"><strong>Damage:</strong>15</li>
                            <li class="chat-bubble my-2"><strong>Multiplier:</strong>2</li>
                            <li class="chat-bubble my-2"><strong>Total Attack:</strong>${attack}</li>`;
}
