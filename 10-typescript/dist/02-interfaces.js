"use strict";
const needle = {
    name: 'Silken',
    damage: 12,
    range: 10
};
const output02 = document.getElementById('output02');
if (output02) {
    output02.innerHTML = `<li><strong>Weapon:</strong>${needle.name}</li>
                            <li><strong>Weapon:</strong>${needle.damage}</li>
                            <li><strong>Weapon:</strong>${needle.damage}</li>`;
}
