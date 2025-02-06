let button = document.querySelector('#agregar');
let modal = document.querySelector(".con-modal");

let cerrar = document.querySelector('#cerrar');
button.addEventListener('click', () => {
    modal.style.display = 'block';
})

cerrar.addEventListener('click', () => {
    modal.style.display = 'none'
})

// Cerrar modal si se hace clic fuera del contenido
window.addEventListener("click", function (e) {
    if (e.target === modal) {
        modal.style.display = "none";
    }
});