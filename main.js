document.getElementById('formulario').addEventListener('submit', function(event){
    var nombre = document.querySelector('input[name="nombre"]');
    var apellido = document.querySelector('input[name="apellido"]');
    var email = document.querySelector('input[name="email"]');

    if (nombre.value.trim() === '' || apellido.value.trim() === '' || email.value.trim() === '') {
        alert ("Rellene los campos vacios por favor");

    } else {
        alert('Formulario enviado correctamente');
    }

});