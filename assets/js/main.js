window.addEventListener('load', (e) => {
    getDataUser();
});

//Variables
const tbodyId = "tbody";
const firebaseUser = new FirebaseUser(tbodyId);
const formulario = document.querySelector('.formulario-user');
const formularioNombre = formulario.querySelector('#name');
const formularioApellido = formulario.querySelector('#lastname');
const formularioEmail = formulario.querySelector('#email');
const formularioTelefono = formulario.querySelector('#phone');
const formularioTipoDocumento = formulario.querySelector('#type_document');
const formularioDocumento = formulario.querySelector('#document');
const formularioEstado = formulario.querySelector('#status');
const formularioId = formulario.querySelector('#id');
const formularioIdFirebase = formulario.querySelector('#idFirebase');
const btnFormulario = formulario.querySelector('input[type="submit"]');
const inputPassword = formulario.querySelector('.password');
const btnAdd = document.querySelector('.add');


//Eventos
formulario.addEventListener('submit', validarFormulario);
btnAdd.addEventListener('click', createUser)

//Funciones
function createUser() {
    formularioNombre.disabled = false;
    formularioApellido.disabled = false;
    formularioEmail.disabled = false;
    formularioTelefono.disabled = false;
    formularioTipoDocumento.disabled = false;
    formularioDocumento.disabled = false;
    formularioEstado.disabled = false;
    btnFormulario.hidden = false;

    inputPassword.classList.add('d-flex');
    inputPassword.hidden = false;

    
    formulario.reset()
}

function getDataUser() {
    firebaseUser.getDataUsers().then((result) => {
    });
}
async function showUser(id) {
    const user = await firebaseUser.getDataUser(id);
    llenarFormulario(user, id);
    formularioNombre.disabled = true;
    formularioApellido.disabled = true;
    formularioEmail.disabled = true;
    formularioTelefono.disabled = true;
    formularioTipoDocumento.disabled = true;
    formularioDocumento.disabled = true;
    formularioEstado.disabled = true;
    btnFormulario.hidden = true;

    inputPassword.classList.remove('d-flex');
    inputPassword.hidden = true;
}

async function editUser(id) {
    formularioNombre.disabled = false;
    formularioApellido.disabled = false;
    formularioEmail.disabled = false;
    formularioTelefono.disabled = false;
    formularioTipoDocumento.disabled = false;
    formularioDocumento.disabled = false;
    formularioEstado.disabled = false;

    inputPassword.classList.remove('d-flex');
    inputPassword.hidden = true;
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
    const {id, name, lastname, email, phone, type_document, document, status} = user;

    formularioNombre.value = name;
    formularioApellido.value = lastname;
    formularioEmail.value = email;
    formularioTelefono.value = phone;
    formularioTipoDocumento.value = type_document;
    formularioDocumento.value = document;
    formularioEstado.value = status;
    formularioIdFirebase.value = idF;
    formularioId.value = id;
}

async function validarFormulario(e) {
    e.preventDefault();
    const infoUser = {
        name: formularioNombre.value,
        lastname: formularioApellido.value,
        email: formularioEmail.value,
        phone: +formularioTelefono.value,
        type_document: formularioTipoDocumento.value,
        document: +formularioDocumento.value,
        status: formularioEstado.value
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
        const id = users.length + 1;
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