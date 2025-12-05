const output15 = document.getElementById('output15');

const input = document.querySelector('input');

function age(age: number): void{
    if(age < 5)throw new Error('Eres demasiado pequeño');

    if(output15){
        output15.innerHTML = `<h2>Cumples el requisito de edad</h2>`
    }
}

if(input && output15){
    input.addEventListener('input', e =>{
        try {
            age(Number(input.value));
        }catch (error) {
                output15.innerHTML = `<h2 class='text-red-400 text-sm'>No cumples la edad requerida</h2>`
            
        }
    })
}