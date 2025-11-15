
//
enum Numbers {
    pi = 3.14159,
    euler = 2.71828,
    light = '2.99792458 x 108 m.s-1'
}



const output06 = document.getElementById('output06');

if(output06){
    output06.innerHTML =   `<li class="chat-bubble my-2"><strong>Math Constants:</strong></li>
                            <li><strong>Light Velocity:</strong> ${Numbers.light} </li>
                            <li><strong>Pi Number:</strong> ${Numbers.pi} </li>
                            <li><strong>Euler Number:</strong> ${Numbers.euler} </li>`

}