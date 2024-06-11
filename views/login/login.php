<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;600;700&family=Playfair+Display:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/main.css">
</head>
<body>
    <main class="main-login-register">
        <div class="login d-lg-flex ">
            <div class="lateral-login-register p-3 d-lg-flex d-xl-flex gap-5">
                <div class="login-din">
                    <div class="logo">
                        <img src="assets/images/logo.svg" alt="Logo FastBeauty">
                    </div>
                    <div class="contenedor-dinamico">
                        <div class="frase mt-4 mb-5 d-flex align-items-center justify-content-center gap-4">
                            <img src="assets/images/lateral-login.svg" alt="">
                            <h3 class="text-center">¡Bienvenido de vuelta!</h3>
                        </div>
                        <div class="cambio text-center">
                            <p class="text-white">Si eres nuevo regístrate ahora mismo</p>
                            <button class="btn-log text-white py-1 px-5">Registrarse</button>
                        </div>
                    </div>
                </div>
                <div class="register-din">
                    <div class="logo">
                        <img src="assets/images/logo.svg" alt="Logo FastBeauty">
                    </div>
                    <div class="contenedor-dinamico">
                        <div class="frase mt-4 mb-5 d-flex align-items-center gap-4 justify-content-center">
                            <img src="assets/images/lateral-register.svg" alt="Imagen">
                            <h3 class="text-center">Tu espacio personal te espera</h3>
                        </div>
                        <div class="cambio text-center">
                            <p class="text-white">Si ya tienes una cuenta, inicia sesión</p>
                            <button class="btn-log text-white py-1 px-5">Iniciar Sesión</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="formulario-login mt-4">
                <form action="" id="formulario-login" class="formulario">
                    <h1 class="text-center mb-4">Iniciar Sesión</h1>

                    <div class="campo">
                        <label for="correo">Email</label>
                        <input type="text" id="correo" placeholder="Ingrese su correo">
                    </div>
                    <div class="campo">
                        <label for="password">Contraseña</label>
                        <input type="password" id="password" placeholder="Ingrese su contraseña">
                        <a href="#">¿Olvidó su contraseña?</a>
                    </div>

                    <input type="submit" value="Iniciar Sesión" class="">
                </form>
                <!-- <div class="social-network">
                    <p class="text-center">- O continúe con -</p>
                    <div class="options d-flex justify-content-between gap-4">
                        <a href="#" class="google">
                            <img src="assets/images/google.svg" alt="Logo Google">
                        </a>
                        <a href="#" class="facebook">
                            <img src="assets/images/facebook.svg" alt="Logo Facebook">
                        </a>
                    </div>
                </div> -->
            </div>
        </div>
        <div class="register">
            <div class="lateral-login-register mobile p-3">
                <div class="logo">
                    <img src="assets/images/logo.svg" alt="Logo FastBeauty">
                </div>
                <div class="frase mt-4 mb-5 d-flex align-items-center gap-4 justify-content-center">
                    <img src="assets/images/lateral-register.svg" alt="Imagen">
                    <h3 class="text-center">Tu espacio personal te espera</h3>
                </div>
                <div class="cambio text-center">
                    <p class="text-white">Si ya tienes una cuenta, inicia sesión</p>
                    <button class="btn-log text-white py-1 px-5">Iniciar Sesión</button>
                </div>
            </div>
            <div class="formulario-register mt-4">
                <form action="" id="formulario-register" class="formulario">
                    <h1 class="text-center mb-1">Crear Cuenta</h1>

                    <div class="campo">
                        <label for="name">Nombre</label>
                        <input type="text" id="name" placeholder="Ingrese su nombre">
                    </div>
                    <div class="campo">
                        <label for="phone">Telefono</label>
                        <input type="number" id="phone" placeholder="Ingrese su numero de telefono">
                    </div>
                    <div class="campo">
                        <label for="text">Documento</label>
                        <input type="number" id="document" placeholder="Ingrese su documentoo">
                    </div>
                    <div class="campo">
                        <label for="correo-r">Email</label>
                        <input type="text" id="correo-r" placeholder="Ingrese su correo">
                    </div>
                    <div class="campo">
                        <label for="password-r">Contraseña</label>
                        <input type="password" id="password-r" placeholder="Ingrese su contraseña">
                    </div>
                    <div class="campo">
                        <label for="password-r2">Confirmar contraseña</label>
                        <input type="password" id="password-r2" placeholder="Ingrese su contraseña de nuevo">
                    </div>

                    <input type="submit" value="Crear cuenta" class="">
                </form>
                <!-- <div class="social-network">
                    <p class="text-center">- O regístrese con -</p>
                    <div class="options d-flex justify-content-between gap-4">
                        <a href="#" class="google">
                            <img src="assets/images/google.svg" alt="Logo Google">
                        </a>
                        <a href="#" class="facebook">
                            <img src="assets/images/facebook.svg" alt="Logo Facebook">
                        </a>
                    </div>
                </div> -->
            </div>
        </div>
        <div class="circles">
            <div class="circle1 circle"></div>
            <div class="circle2 circle"></div>
            <!-- <div class="circle3 circle"></div> -->
            <div class="circle4 circle"></div>
        </div>
    </main>
    <script src="assets/js/signIn.js" type="module"></script>
    <script src="assets/js/signUp.js" type="module"></script>
    <script src="assets/js/app.js"></script>
    
</body>
</html>