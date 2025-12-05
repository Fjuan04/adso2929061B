
interface Pokemon {
    id : number,
    name : string
}
async function getPokemon(pk: string): Promise<Response> {
    const url = 'https://pokeapi.co/api/v2/pokemon/' + pk;
    const res = await fetch(url);
    return res;
}

const output14 = document.getElementById('output14')

if(output14){
    getPokemon('ditto')
    .then(res => res.json())
    .then(data => {
        let pk : Pokemon = data;
        
        output14.innerHTML += `<li class='badge badge-primary text-xl p-4'>${pk.name} <span class='badge badge-info text-white'>${pk.id}</span></li>
                                `;
    })

    getPokemon('pikachu')
    .then(res => res.json())
    .then(data => {
        let pk : Pokemon = data;
        
        output14.innerHTML += `<li class='badge badge-primary text-xl p-4'>${pk.name} <span class='badge badge-info text-white'>${pk.id}</span></li>
                                `;
    })

    
}