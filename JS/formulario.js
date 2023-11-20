$(document).ready(function() {



    const contenedores = document.querySelectorAll(".tareas");
    const addButtons = document.querySelectorAll(".fa-plus");

    const closeModalButton = document.getElementById("close-modal");
    const id_estado = document.getElementById("id_estado");

    const titulo = document.getElementById("titulo");
    const descripcion = document.getElementById("descripcion");
    const correo = document.getElementById("correo");
    const fecha = document.getElementById("fecha");



    // Manejar la apertura del formulario modal
    addButtons.forEach((button, index) => {
        button.addEventListener("click", () => {
        modal.style.display = "flex";

        // Rastrear el contenedor actual
        currentContenedor = contenedores[index];

        titulo.value = '';
        descripcion.value = '';
        correo.value = '';
        fecha.value = '';

        id_estado.value = index+1;
        });
    });

    // Manejar el cierre del formulario modal
    closeModalButton.addEventListener("click", () => {
        modal.style.display = "none";
    });










})