// Constantes inputs
document.getElementById("formularioAppointments").addEventListener("submit", async function(e) {
    e.preventDefault();
    const appointment={
        status: document.getElementById("status").value,
        date: document.getElementById("date").value,
        hora: document.getElementById("hora").value,
        clients_id: document.getElementById("clients_id").value,
        Employees_id: document.getElementById("Employees_id").value,
        services_id: document.getElementById("services_id").value
    };
//pruebas de commit
    //instancia de uservalidation para validar formulario
    const validacion = new AppointmentValidation(appointment);
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

class AppointmentValidation{
    constructor(appointment){
        this.appointment = appointment;
    }
    validarFormulario() {
        if (!this.camposCompletos()) {
            return { valido: false, mensaje: 'Todos los campos son obligatorios' };
        }
        return { valido: true, mensaje: 'Creado Correctamente' };
    }
    //Campos completos

    camposCompletos(){
        return Object.values(this.appointment).every(value => value !== '');
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
        
        document.getElementById("formularioAppointments").appendChild(divMensaje);
    
        setTimeout(() => {
            divMensaje.remove()
        }, 1000);
    }
}