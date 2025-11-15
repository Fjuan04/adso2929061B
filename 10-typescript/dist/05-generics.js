"use strict";
//Generic inventory for any type
class Inventory {
    constructor() {
        this.items = [];
    }
    addItem(item) {
        this.items.push(item);
    }
    getItems() {
        return this.items;
    }
}
const charmInventory = new Inventory;
charmInventory.addItem('Mothwing Cloak');
charmInventory.addItem('Crystal Heart');
const output05 = document.getElementById('output05');
if (output05) {
    output05.innerHTML = `<li class="chat-bubble my-2"><strong>Charms Collected:</strong></li>
                            <ul>${charmInventory.getItems().map(c => `<li>${c}</li>`).join('')}</ul>`;
}
