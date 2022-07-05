// alert('hola mundo');

document.getElementById("login").addEventListener('submit', validar, false);

function validar(evt) {
    let user = document.getElementById("username").value;
    let pass = document.getElementById("password").value;

    if (user == 'admin@gmail.com' && pass == 'VelazquezHe') {
        window.location = 'resources/views/auth/login';
        evt.preventDefault();
    }
    
    else {
        swal({
            title: "Contraseña inválida!",
            text: "Contraseña inválida!",
            icon: "warning",
            button: "Aceptar",
            dangerMode: true,
        });
        evt.preventDefault();
    }
} 