// Constantes inputs
document.getElementById("formularioServices").addEventListener("submit", async function(e) {
    const services={
        nombre: document.getElementById("nombre").value,
        description: document.getElementById("description").value,
        precio: document.getElementById("precio").value,
        time: document.getElementById("time").value,
        branch_office_id: document.getElementById("branch_office_id").value
    };
//pruebas de commit
    //instancia de uservalidation para validar formulario
    const validacion = new BranchValidation(services);
    const resultadoValidacion = validacion.validarFormulario();

    if (!resultadoValidacion.valido){
        e.preventDefault();  // Solo evita el envío si hay errores
        imprimirAlerta(resultadoValidacion.mensaje, resultadoValidacion.tipo);
        return;
    }

    try {
        imprimirAlerta('Imagen registrada con exito' , 'succes');
    } catch (error){
        console.log(error);
        imprimirAlerta('Ocurrio un error al registrar cita', 'error')
    }
    
})

class BranchValidation{
    constructor(services){
        this.services = services;
    }
    validarFormulario() {
        if (!this.camposCompletos()) {
            return { valido: false, mensaje: 'Todos los campos son obligatorios' };
        }
        return { valido: true, mensaje: 'Creado Correctamente' };
    }
    //Campos completos

    camposCompletos(){
        return Object.values(this.services).every(value => value !== '');
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
        
        document.getElementById("formularioServices").appendChild(divMensaje);
    
        setTimeout(() => {
            divMensaje.remove()
        }, 1000);
    }
}