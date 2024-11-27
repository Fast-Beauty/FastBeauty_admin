// Constantes inputs
document.getElementById("formularioClientes").addEventListener("submit", function(e) {
    const cliente={
        user_id: document.getElementById("user_id").value,
        client_datebirth: document.getElementById("client_datebirth").value,
        client_gender: document.getElementById("client_gender").value
       /* gender: document.getElementById("gender").value,
        date_birth: document.getElementById("date_birth").value,
        status: document.getElementById("status").value*/
    };
//pruebas de commit
    //instancia de uservalidation para validar formulario
    const validacion = new ClientValidation(cliente);
    const resultadoValidacion = validacion.validarFormulario();

    if (!resultadoValidacion.valido){
        e.preventDefault();  // Solo evita el envío si hay errores
        imprimirAlerta(resultadoValidacion.mensaje, resultadoValidacion.tipo);
        return;
    }

    try {
        imprimirAlerta('Cliente registrado con exito' , 'succes');
    } catch (error){
        console.log(error);
        imprimirAlerta('Ocurrio un error al registrar Cliente', 'error')
    }
    
})

class ClientValidation{
    constructor(cliente){
        this.cliente = cliente;
    }
    validarFormulario() {
        if (!this.camposCompletos()) {
            return { valido: false, mensaje: 'Todos los campos son obligatorios' };
        }
        return { valido: true, mensaje: 'Creado Correctamente' };
    }
    //Campos completos

    camposCompletos(){
        return Object.values(this.cliente).every(value => value !== '');
    }
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
        
        document.getElementById("formularioClientes").appendChild(divMensaje);
    
        setTimeout(() => {
            divMensaje.remove()
        }, 1000);
    }
}