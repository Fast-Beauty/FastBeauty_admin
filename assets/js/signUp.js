import { createUserWithEmailAndPassword } from "https://www.gstatic.com/firebasejs/10.9.0/firebase-auth.js";
import { auth } from "./firebase.js";

//variables
const formulario = document.getElementById("formulario-register");
const url = "https://api-users-6a304-default-rtdb.firebaseio.com/api/users.json";
const name = formulario.querySelector('#name');
const lastname = formulario.querySelector('#lastname');
const phone = formulario.querySelector('#phone');
const tipoDocumento = formulario.querySelector('#type_document');
const documento = formulario.querySelector('#document');
const email = formulario.querySelector('#correo-r');
const password = formulario.querySelector('#password-r');
const confirmPasword = formulario.querySelector('#password-r2');
//const rol = formulario.querySelector('#rol');


// Eventos

formulario.addEventListener("submit", registrarUsuario);


// Funciones

async function registrarUsuario(e) {
    e.preventDefault();
    const user = {
        name: name.value,
        lastname: lastname.value,
        phone: +phone.value,
        type_document: tipoDocumento.value,
        document: +documento.value,
        email: email.value,
        password: password.value,
        status: "ACTIVE",
        confirmPasword: confirmPasword.value,
        rol_rol_id: 2
    }

    if (!Object.values(user).every(users => users != '')) {
        imprimirAlerta('No puede dejar ningún campo vacío', 'error');
        return;
    }
    if (user.password != user.confirmPasword) {
        imprimirAlerta('Las constraseñas no coinciden', 'error');
        return;
    }

    try {
        const userCredentials = await createUserWithEmailAndPassword(auth, email.value, password.value);
        console.log(userCredentials);
        imprimirAlerta('Registrado con éxito');
        // sendDataApi(user); 
        sendDataDB(user);
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

async function sendDataApi(usuario) {
    let usuarios;
    let id;
    try {
        const response = await fetch(url);
        const result = await response.json();
        usuarios = result
    } catch (error) {
        console.log(error);
    }

    usuarios ? id = Object.values(usuarios).length : id = 0;

    const { nombre, telefono, documento, email } = usuario;
    const user = {
        nombre,
        telefono,
        documento,
        email,
        estado: 'Activo',
        //rol: 'Employees',
        id
    }
    try {
        await fetch(url, {
            method: 'POST',
            body: JSON.stringify(user),
            headers: {
                'Content-Type': 'application/json'
            }
        });

        setTimeout(() => {
            location.reload();
        }, 2800);

    } catch (error) {
        console.log(error)
    }

}

async function sendDataDB(usuario) {
    const url = '?c=Login&m=create';
    try {
        const response = await fetch(url, {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify(usuario)
        });
        const result = await response.json();
        if (result.success == true) {
            setTimeout(() => {
                location.reload();
            }, 1800);
        }
    } catch (error) {
        console.log('Error:', error);
    }
}



function imprimirAlerta(mensaje, tipo) {
    const alerta = document.querySelector('.alerta');

    if (!alerta) {
        const divMensaje = document.createElement('div');
        divMensaje.classList.add('mb-0', 'text-center', 'alerta')
        if (tipo) {
            divMensaje.classList.add('alert', 'alert-danger', 'text-danger');
        } else {
            divMensaje.classList.add('alert', 'alert-success')
        }
        divMensaje.textContent = mensaje;
        formulario.appendChild(divMensaje);

        setTimeout(() => {
            divMensaje.remove()
        }, 3000);
    }
}
