import { signInWithEmailAndPassword } from "https://www.gstatic.com/firebasejs/10.9.0/firebase-auth.js";
import { auth } from "./firebase.js";

const formulario = document.getElementById("formulario-login");
const email = formulario.querySelector('#correo');
const password = formulario.querySelector('input[type="password"]');

// Eventos

formulario.addEventListener("submit", logUsuario);


// Funciones

async function logUsuario(e) {
    e.preventDefault();

    const user = {
        email: email.value, 
        password: password.value
    }

    if(!Object.values(user).every(user => user != '')) {
        imprimirAlerta('Debe rellenar todos los campos', 'error');
        console.log('sisa')
        return
    }

    try {
        const userCredentials = await signInWithEmailAndPassword(auth, email.value, password.value);
        console.log(userCredentials);
        imprimirAlerta('Inicio de sesión exitoso, bienvenido');

        setTimeout(() => {
            window.location.href = '?c=Dashboard&m=dashboard';
        }, 2000);

    } catch (error) {
        console.log(error);
        console.log(error)

        switch (error.code) {
            case 'auth/invalid-email':
                imprimirAlerta('El email proporcionado es inválido', 'error');
                break;

            case 'auth/invalid-credential':
                imprimirAlerta('El email o contraseña no son válidos', 'error');
                break;
            
            case 'auth/too-many-requests':
                imprimirAlerta('Su cuenta ha sido desabilitada por cuestiones de seguridad intentelo más tarde o cambie su contraseña', 'error');
                break;
            
            default:
                break;
        }
    }
}


function imprimirAlerta(mensaje, tipo) {

    const alerta = document.querySelector('.alert-danger');

    if(!alerta) {
        const divMensaje = document.createElement('div');
        divMensaje.classList.add('alert');
        tipo == 'error' ? divMensaje.classList.add('alert-danger') : divMensaje.classList.add('alert-success')
        divMensaje.textContent = mensaje;
        formulario.appendChild(divMensaje);
    
        setTimeout(() => {
            divMensaje.remove()
        }, 2000);
    }

}