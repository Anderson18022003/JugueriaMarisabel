const fondo = document.querySelector(".fondo");
const btn = document.querySelector(".btn");
const iconocerrar = document.querySelector(".icono-cerrar");


btn.addEventListener("click", () => {
    fondo.classList.add('active-btn');
});

iconocerrar.addEventListener("click", () => {
    fondo.classList.remove('active-btn');
});


function ocultarregistro() {
    // Seleccionar el elemento por su clase
    const contenedorFormRegistrar = document.querySelector('.contenedor-form.registrar');

    // Verificar si se encontró el elemento
    if (contenedorFormRegistrar) {
        // Modificar el estilo para hacerlo invisible
        contenedorFormRegistrar.style.display = 'none';
    }
}


function ocultar() {
    // Seleccionar los elementos por su clase
    const contenedorLogin = document.querySelector('.contenedor.login');
    const contenedorFormRegistrar = document.querySelector('.contenedor-form.registrar');

    // Verificar si se encontraron los elementos
    if (contenedorLogin && contenedorFormRegistrar) {
        // Ocultar contenedor de login
        contenedorLogin.style.display = 'none';

        // Mostrar contenedor de registro
        contenedorFormRegistrar.style.display = 'block';
    }
}

// Función para mostrar el formulario de inicio de sesión y ocultar el formulario de registro
function mostrarLogin() {
    // Seleccionar los elementos por su clase
    const contenedorLogin = document.querySelector('.contenedor.login');
    const contenedorFormRegistrar = document.querySelector('.contenedor-form.registrar');

    // Verificar si se encontraron los elementos
    if (contenedorLogin && contenedorFormRegistrar) {
        // Mostrar contenedor de login
        contenedorLogin.style.display = 'block';

        // Ocultar contenedor de registro
        contenedorFormRegistrar.style.display = 'none';
    }
}

 


