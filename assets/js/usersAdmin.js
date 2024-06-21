import { createUserWithEmailAndPassword } from "https://www.gstatic.com/firebasejs/10.9.0/firebase-auth.js";
import { auth } from "./firebase.js";

const formulario = document.querySelector('.formulario-user');
const name = formulario.querySelector('#name');
const lastname = formulario.querySelector('#lastname');
const email = formulario.querySelector('#email');
const phone = formulario.querySelector('#phone');
const tipoDocumento = formulario.querySelector('#type_document');
const documento = formulario.querySelector('#document');
const password = formulario.querySelector('#password');
const status = formulario.querySelector('#status');


// Eventos

formulario.addEventListener("submit", registrarUsuario);

async function registrarUsuario(e) {
    e.preventDefault();
    const user = {
        name: name.value, 
        lastname: lastname.value,
        email: email.value,
        phone: phone.value,
        tipoDocumento: tipoDocumento.value,
        documento: documento.value,
        password: password.value,
        status: status.value
    }
    console.log('sisa')

    if (!Object.values(user).every(users => users != '')) {
        console.log('si')
        imprimirAlerta('No puede dejar ningún campo vacío', 'error');
        return;
    }

    try {
        const userCredentials = await createUserWithEmailAndPassword(auth, email.value, password.value);
        console.log(userCredentials);
        imprimirAlerta('Registrado con éxito');
        e.target.submit();
    } catch (error) {
        console.log(error);
        switch (error.code) {
            case 'auth/invalid-email':
                imprimirAlerta('El email proporcionado es inválido', 'error');
                break;

            case 'auth/email-already-in-use':
                imprimirAlerta('El email ya se encuentra registrado', 'error');
                break;

            case 'auth/weak-password':
                imprimirAlerta('Contraseña mín. 6 caracteres', 'error');
                break;
            
            
            default:
                break;
        }
    }  
}

function imprimirAlerta(mensaje, tipo) {
    const alerta = document.querySelector('.alerta');

    if(!alerta) {
        const divMensaje = document.createElement('div');
        divMensaje.classList.add('mb-0', 'text-center', 'alerta')
        if(tipo) {
            divMensaje.classList.add('alert', 'alert-danger', 'text-danger');
        }else {
            divMensaje.classList.add('alert', 'alert-success')
        }
        divMensaje.textContent = mensaje;
        formulario.appendChild(divMensaje);
    
        setTimeout(() => {
            divMensaje.remove()
        }, 3000);
    }
}