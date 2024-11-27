// Constantes inputs
document.getElementById("formularioMarca").addEventListener("submit", async function(e) {
    const mark={
        nombre: document.getElementById("nombre").value
    };
//pruebas de commit
    //instancia de uservalidation para validar formulario
    const validacion = new MarksValidation(mark);
    const resultadoValidacion = validacion.validarFormulario();

    if (!resultadoValidacion.valido){
        e.preventDefault();  // Solo evita el envío si hay errores
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

class MarksValidation{
    constructor(mark){
        this.mark = mark;
    }
    validarFormulario() {
        if (!this.camposCompletos()) {
            return { valido: false, mensaje: 'Todos los campos son obligatorios' };
        }
        return { valido: true, mensaje: 'Creado Correctamente' };
    }
    //Campos completos

    camposCompletos(){
        return Object.values(this.mark).every(value => value !== '');
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
        
        document.getElementById("formularioMarca").appendChild(divMensaje);
    
        setTimeout(() => {
            divMensaje.remove()
        }, 1000);
    }
}