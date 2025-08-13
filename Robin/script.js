// script.js
document.getElementById('login-form').addEventListener('submit', function(event) {
    event.preventDefault(); // Evita que se envíe el formulario por defecto

    // Obtiene los valores del formulario
    const email = document.getElementById('email').value;
    const password = document.getElementById('password').value;

    // Validación simple
    if (!email || !password) {
        alert('Por favor, complete todos los campos.');
        return;
    }

    
    alert('Inicio de sesión exitoso!');
});