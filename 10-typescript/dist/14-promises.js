"use strict";
var __awaiter = (this && this.__awaiter) || function (thisArg, _arguments, P, generator) {
    function adopt(value) { return value instanceof P ? value : new P(function (resolve) { resolve(value); }); }
    return new (P || (P = Promise))(function (resolve, reject) {
        function fulfilled(value) { try { step(generator.next(value)); } catch (e) { reject(e); } }
        function rejected(value) { try { step(generator["throw"](value)); } catch (e) { reject(e); } }
        function step(result) { result.done ? resolve(result.value) : adopt(result.value).then(fulfilled, rejected); }
        step((generator = generator.apply(thisArg, _arguments || [])).next());
    });
};
function getPokemon(pk) {
    return __awaiter(this, void 0, void 0, function* () {
        const url = 'https://pokeapi.co/api/v2/pokemon/' + pk;
        const res = yield fetch(url);
        return res;
    });
}
const output14 = document.getElementById('output14');
if (output14) {
    getPokemon('ditto')
        .then(res => res.json())
        .then(data => {
        let pk = data;
        output14.innerHTML += `<li class='badge badge-primary text-xl p-4'>${pk.name} <span class='badge badge-info text-white'>${pk.id}</span></li>
                                `;
    });
    getPokemon('pikachu')
        .then(res => res.json())
        .then(data => {
        let pk = data;
        output14.innerHTML += `<li class='badge badge-primary text-xl p-4'>${pk.name} <span class='badge badge-info text-white'>${pk.id}</span></li>
                                `;
    });
}
