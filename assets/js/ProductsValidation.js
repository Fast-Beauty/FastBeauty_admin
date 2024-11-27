// Constantes inputs
document.getElementById("formularioProducts").addEventListener("submit", async function(e) {
    const products={
        nombre: document.getElementById("nombre").value,
        description: document.getElementById("description").value,
        precio: document.getElementById("precio").value,
        quantity: document.getElementById("quantity").value,
        date: document.getElementById("date").value,
        category: document.getElementById("category").value,
        mark_id: document.getElementById("mark_id").value,
        branch_office_id: document.getElementById("branch_office_id").value
    };
//pruebas de commit
    //instancia de uservalidation para validar formulario
    const validacion = new ProductsValidation(products);
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

class ProductsValidation{
    constructor(products){
        this.products = products;
    }
    validarFormulario() {
        if (!this.camposCompletos()) {
            return { valido: false, mensaje: 'Todos los campos son obligatorios' };
        }
        return { valido: true, mensaje: 'Creado Correctamente' };
    }
    //Campos completos

    camposCompletos(){
        return Object.values(this.products).every(value => value !== '');
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
        
        document.getElementById("formularioProducts").appendChild(divMensaje);
    
        setTimeout(() => {
            divMensaje.remove()
        }, 1000);
    }
}