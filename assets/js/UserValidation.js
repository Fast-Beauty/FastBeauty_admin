// Constantes inputs
document.getElementById("formularioUsers").addEventListener("submit", async function(e) {
    e.preventDefault();
    const users={
        name: document.getElementById("name").value,
        lastname: document.getElementById("lastname").value,
        email: document.getElementById("email").value,
        phone: document.getElementById("phone").value,
        type_document: document.getElementById("type_document").value,
        document: document.getElementById("document").value,
        status: document.getElementById("status").value
    };
//pruebas de commit
    //instancia de uservalidation para validar formulario
    const validacion = new UsersValidation(users);
    const resultadoValidacion = validacion.validarFormulario();

    if (!resultadoValidacion.valido){
        imprimirAlerta(resultadoValidacion.mensaje, resultadoValidacion.tipo);
        return;
    }

    try {
        imprimirAlerta('Cita registrada con exito' , 'succes');
    } catch (error){
        console.log(error);
        imprimirAlerta('Ocurrio un error al registrar cita', 'error')
    }
    
})

class UsersValidation{
    constructor(users){
        this.users = users;
    }
    validarFormulario() {
        if (!this.camposCompletos()) {
            return { valido: false, mensaje: 'Todos los campos son obligatorios' };
        }
        return { valido: true, mensaje: 'Creado Correctamente' };
    }
    //Campos completos

    camposCompletos(){
        return Object.values(this.users).every(value => value !== '');
    }
    // Método para validar empleado, cliente y servicio
    /*seleccionValida(){
        return this.appointment.clients_id ! == '' && this.appointment.Employess_id !== '' && this.appointment.services_id !== '';
    }*/
}
function imprimirAlerta(mensaje, valido) {
    const alerta = document.querySelector('.alerta');
    if(!alerta) {
        const divMensaje = document.createElement('div');
        
        divMensaje.classList.add('m-0','text-center')
        if(valido) {
            
            divMensaje.classList.add('alert', 'alert-success')
            divMensaje.textContent = mensaje;
        }else {
            divMensaje.classList.add('alert', 'alert-danger', 'text-danger');
            divMensaje.textContent = mensaje;
        }
        
        document.getElementById("formularioUsers").appendChild(divMensaje);
    
        setTimeout(() => {
            divMensaje.remove()
        }, 1000);
    }
}