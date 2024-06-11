window.addEventListener('load', sizeScreen);
window.addEventListener('resize', sizeScreen);



const sliding = document.querySelector('.lateral-login-register');
const formularioLogin = document.querySelector('.formulario-login');
const formularioRegister = document.querySelector('.formulario-register');

// document.querySelector('#formulario-register').addEventListener('submit', validarRegister);
// document.querySelector('#formulario-login').addEventListener('submit', validarLogin);


const loginDin = document.querySelector('.login-din');
const registerDin = document.querySelector('.register-din');


//Se extrae el tamaño de los divs
const width = window.innerWidth || document.documentElement.clientWidth;
const sizeSliding = sliding.getBoundingClientRect().width;
const displacementRegister = width - (loginDin.getBoundingClientRect().width + registerDin.getBoundingClientRect().width + 32);



function sizeScreen() {
    const registerDin = document.querySelector('.register-din');
    const tamScreen = window.innerWidth;
    if(tamScreen < 992) {
        formularioRegister.style.visibility = 'visible';
        registerDin.style.display = 'none';
        if(sliding.classList.contains('reference')){
            sliderBack();
        }
        return;
    } else {
        formularioRegister.style.left = '25%';
        registerDin.style.display = 'block';
    }

}


//Transición
if(window.innerWidth >= 992){

    const btnRegister = document.querySelector('.login-din .btn-log');
    btnRegister.addEventListener('click', slider);

    const btnLogin = document.querySelector('.register-din .btn-log');
    btnLogin.addEventListener('click', sliderBack);
        
    
    //Se realiza la transición
    function slider() {
        registerDin.style.transition = 'transform .3s linear';

        const displacement = width - sizeSliding;

        sliding.style.transform = `translate(${displacement}px)`;
        sliding.classList.add('reference');
        loginDin.style.transform = `translate(-${displacement}px)`;

        // registerDin.style.display = 'block';
        registerDin.style.transform = `translate(-${displacement - displacementRegister}px)`;

        formularioLogin.style.transform = `translate(-200px)`;
        setTimeout(() => {
            formularioLogin.style.visibility = "hidden";    
        }, 200);
        setTimeout(() => {
            formularioRegister.style.visibility = 'visible';
        }, 100);
        
        formularioRegister.style.left = '25%';

    }

    function sliderBack() {
        console.log('dentro')

        sliding.style.transform = `translate(0px)`;
        sliding.classList.remove('reference');
        loginDin.style.transform = `translate(0px)`;
        registerDin.style.transform = `translate(${displacementRegister}px)`

        formularioLogin.style.transform = `translate(0px)`;
        setTimeout(() => {
            formularioLogin.style.visibility = "visible";
        }, 100);
        setTimeout(() => {
            formularioRegister.style.visibility = 'hidden';
        }, 200);
        formularioRegister.style.left = '50%';
    }
}






function validarLogin(e) {
    e.preventDefault();

    window.location.href = '?c=dashboard&m=dashboard';
}

function validarRegister(e) {
    e.preventDefault();
    const inputEmail = document.querySelector('#correo-r').value;
    const inputPassword = document.querySelector('#password-r').value;
    const inputConfirm = document.querySelector('#password-r2').value;
    
    const usuario = {
        inputEmail,
        inputPassword,
        inputConfirm
    }
    
    if(validarSubmit(usuario)) {
        imprimirAlerta('Todos los campos son obligatorios', 'error', e.target.id);
        return;
    }
    nuevoUsuario(usuario);
}

function validarSubmit(obj) {
    return !Object.values(obj).every(input => input !== '');
}


function imprimirAlerta(mensaje, tipo, form) {
    const alerta = document.querySelector('.alerta');

    if(!alerta) {
        const divMensaje = document.createElement('div');
        divMensaje.classList.add('mt-3', 'mb-0', 'text-center', 'alerta')
        if(tipo) {
            divMensaje.classList.add('alert', 'alert-danger', 'text-danger');
        }else {
            divMensaje.classList.add('alert', 'alert-success')
        }
        divMensaje.textContent = mensaje;
        if(form === 'formulario-login') {
            formularioLogin.appendChild(divMensaje);
        } else {
            formularioRegister.appendChild(divMensaje);
        }
    
        setTimeout(() => {
            divMensaje.remove()
        }, 2000);
    }


}