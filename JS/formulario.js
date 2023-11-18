$(document).ready(function() {



    const contenedores = document.querySelectorAll(".tareas");
    const addButtons = document.querySelectorAll(".fa-plus");

    const closeModalButton = document.getElementById("close-modal");
    const id_estado = document.getElementById("id_estado");



    // Manejar la apertura del formulario modal
    addButtons.forEach((button, index) => {
        button.addEventListener("click", () => {
        modal.style.display = "flex";

        // Rastrear el contenedor actual
        currentContenedor = contenedores[index];

        id_estado.value = index+1;
        });
    });

    // Manejar el cierre del formulario modal
    closeModalButton.addEventListener("click", () => {
        modal.style.display = "none";
    });










})