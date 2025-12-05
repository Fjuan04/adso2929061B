const output13 = document.getElementById('output13');

interface User {
  id: number;
  name: string;
  username: string;
  email: string;
  phone: string;
  website : string;
}

async function getPerson(): Promise<User> {
    const res = await fetch("https://jsonplaceholder.typicode.com/users/1");

    const data: User = await res.json();

    return data;
}

if(output13){
    getPerson().then(u => {
        let user = u;
        console.log(u)
        for(let k in user){
                let key = k as keyof typeof user;
                output13.innerHTML += `<li>${user[key]}</li>`
        }
    })
}