const output11 = document.getElementById('output11');

// Typeof guard
function show(value : string | number) : string | number{
    if(typeof value == 'string') {
        return 'Bienvenido: ' + value;
    }else {
        return value;
    }
}




// instanceof guard
class Animal {

    public  move(animal : Perro | Bird){
        if(animal instanceof Perro){
            return 'Camina';
        }
        if(animal instanceof Bird){
            return 'Vuela';
        }
        
    }
}

class Perro extends Animal {}
class Bird extends Animal {}

let perro = new Perro; 
let bird  = new Bird;


//Type predicated functions
interface Xbox {
    powered : string
    latest : string
    suscription : 'GamePass'

}

interface Play {
    powered : string
    latest : string
    suscription : 'Ps Plus'
}

function isPlay(c : Xbox | Play): c is Play {
    //type assertion
    return (c as Play).suscription == 'Ps Plus';
} 

let xbox : Xbox = {
    powered : 'Microsoft',
    latest : 'Series X',
    suscription : 'GamePass'
}

let ps5 : Play = {
    powered : 'Sony',
    'latest' : 'Ps5',
    'suscription' : 'Ps Plus'
};

function render(console : Play | Xbox):void {
    if(isPlay(console)){
        if(output11){
                    for(let k in console){
                        const key = k as keyof typeof console;
                        output11.innerHTML += `<li class="w-full border m-auto p-5 rounded-sm text-xl"><span class='badge badge-primary'>${key}</span> ${console[key]}</li>`;
                    }
            }
        }
    }
    
    if(output11){
        output11.innerHTML += `
        <h3 class='mb-2'>typeof Guard</h3>
        <li class="border m-auto p-5 rounded-sm text-xl"><span class='badge badge-primary'>${typeof show('Hornet')}</span> ${show('Hornet')}</li>
        <li class="border m-auto p-5 rounded-sm text-xl"><span class='badge badge-primary'>${typeof show(90)}</span> Has alcanzado el ${show(90)}% del juego</li>
        
        <h3 class='mb-2'>instanceof Guard</h3>
        <li class="border m-auto p-5 rounded-sm text-xl"><span class='badge badge-primary'>Perro</span> Este animal: ${perro.move(perro)}</li>
        <li class="border m-auto p-5 rounded-sm text-xl"><span class='badge badge-primary'>Pajaro</span> Este animal: ${bird.move(bird)}</li>
        
        <h3 class='mb-2'>type predicated / type assertion</h3>
        
        
        `;
        render(ps5);
    }

