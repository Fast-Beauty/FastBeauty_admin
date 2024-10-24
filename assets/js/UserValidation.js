// Constantes inputs
document.getElementById("formularioUserCreate").addEventListener("submit", async function(e) {
    e.preventDefault();
    const appointment={
        status: document.getElementById("status").value,
        date: document.getElementById("date").value,
        hora: document.getElementById("").value,
        clients_id: document.getElementById("").value,
        Employees_id: document.getElementById("").value,
        services_id: document.getElementById("").value
    };

    //instancia de uservalidation para validar formulario
    const validacion = new UserValidation(appointment);
    const resultadoValidacion = validacion.validarFormulario();

    if (!resultadoValidacion.valido){
        imprimirAlerta(resultadoValidacion.mensaje, resultadoValidacion.tipo);
        return;
    }

    try {
        imprimirAlerta('Cita registrada con exito' , 'succes');
    }
    
})
const  formulario = document.getElementById("#formularioUserCreate");
const status= document.getElementById("#status");
const date = document.getElementById("#date");
const hora = document.getElementById("#hora");
const cliente = document.getElementById("#clients_id");
const trabajador = document.getElementById("#Employees_id")
const servicio = document.getElementById("#services_id");
const 


class UserValidation{
    contructor(appointment){
        this.appointment = appointment;
    }
    //Campos completos

    camposCompletos(){
        return Object.value(this.appointment).every(value => value !== '');
    }
    // Método para validar empleado, cliente y servicio
    /*seleccionValida(){
        return this.appointment.clients_id ! == '' && this.appointment.Employess_id !== '' && this.appointment.services_id !== '';
    }*/
}
async function crearUsuario(e) {
    e.preventDefault();
    const user = {
        name: name.value,
        lastname: lastname.value,
        phone: +phone.value,
        type_document: tipoDocumento.value,
        document: +documento.value,
        email: email.value,
        password: password.value,
        //status: "ACTIVE",
        confirmPasword: confirmPasword.value
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