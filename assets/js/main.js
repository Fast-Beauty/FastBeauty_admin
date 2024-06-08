window.addEventListener('load', (e) => {
    getDataUser();
});

//Variables
const tbodyId = "tbody";
const firebaseUser = new FirebaseUser(tbodyId);
const formulario = document.querySelector('.formulario-user');
const formularioNombre = formulario.querySelector('#name');
const formularioEmail = formulario.querySelector('#email');
const formularioTelefono = formulario.querySelector('#phone');
const formularioDocumento = formulario.querySelector('#documento');
const formularioId = formulario.querySelector('#id');
const formularioIdFirebase = formulario.querySelector('#idFirebase');
const btnFormulario = formulario.querySelector('input[type="submit"]');

//Eventos
formulario.addEventListener('submit', validarFormulario);

//Funciones
function getDataUser() {
    firebaseUser.getDataUsers().then((result) => {
    });
}
async function showUser(id) {
    const user = await firebaseUser.getDataUser(id);
    llenarFormulario(user, id);
    formularioNombre.disabled = true;
    formularioEmail.disabled = true;
    formularioTelefono.disabled = true;
    formularioDocumento.disabled = true;
    btnFormulario.hidden = true;
}

async function editUser(id) {
    formularioNombre.disabled = false;
    formularioEmail.disabled = false;
    formularioTelefono.disabled = false;
    formularioDocumento.disabled = false;
    const user = await firebaseUser.getDataUser(id);
    llenarFormulario(user, id);
}

function deleteUser(id) {
     
    const confirmar = confirm('¿Esta seguro que quiere borrar este registro?');
    if(confirmar) {
        firebaseUser.setDeleteUser(id);
    }

}

function llenarFormulario(user, idF) {
    btnFormulario.hidden ? btnFormulario.hidden = false : null; 
    const {id, nombre, email, telefono, documento} = user;

    formularioNombre.value = nombre;
    formularioEmail.value = email;
    formularioTelefono.value = telefono;
    formularioDocumento.value = documento;
    formularioIdFirebase.value = idF;
    formularioId.value = id;
}

async function validarFormulario(e) {
    e.preventDefault();
    const infoUser = {
        nombre: formularioNombre.value,
        email: formularioEmail.value,
        telefono: +formularioTelefono.value,
        documento: +formularioDocumento.value,
        estado: 'Activo'
    }


    if(!Object.values(infoUser).every(user => user != '')) {
        imprimirAlerta('Debe llenar todos los campos', 'error');
        return;
    }

    if(formularioId.value) { //Comprueba si se trata de editar o de crear
        const user = {
            id: +formularioId.value,
            ...infoUser
        }
        firebaseUser.setUpdateUser(formularioIdFirebase.value, user);
        imprimirAlerta('Editado correctamente');
    } else {
        const users = Object.values(await firebaseUser.getDataUsers());
        const id = users.length;
        const user = {
            id, 
            ...infoUser
        }
        firebaseUser.setCreateUser(user);
        imprimirAlerta('Se ha creado el usuario correctamente');
    }
}

function imprimirAlerta(mensaje, tipo) {
    const alerta = document.querySelector('.alerta');

    if(!alerta) {
        const divMensaje = document.createElement('div');
        divMensaje.classList.add('mt-3', 'mb-0', 'text-center', 'alerta');
        if(tipo) {
            divMensaje.classList.add('alert', 'alert-danger', 'text-danger');
        }else {
            divMensaje.classList.add('alert', 'alert-success');
        }
        divMensaje.textContent = mensaje;
        formulario.appendChild(divMensaje);
    
        setTimeout(() => {
            divMensaje.remove()
        }, 2000);
    }


}
 
// async function prueba() {
//     const users = await firebaseUser.getDataUsers();
//     console.log(users, users.length)

// }

// prueba();