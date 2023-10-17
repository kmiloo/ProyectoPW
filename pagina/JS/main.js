// Obtener elementos relevantes
const addButtons = document.querySelectorAll(".fa-plus");
const modal = document.getElementById("modal");
const closeModalButton = document.getElementById("close-modal");
const tituloInput = document.getElementById("titulo");
const descripcionTextarea = document.getElementById("descripcion");
const guardarButton = document.getElementById("guardar");
const contenedores = document.querySelectorAll(".tareas");
let currentContenedor = null; // Rastrea el contenedor actual

// Manejar la apertura del formulario modal
addButtons.forEach((button, index) => {
  button.addEventListener("click", () => {
    modal.style.display = "flex";

    // Restablecer el formulario
    tituloInput.value = "";
    descripcionTextarea.value = "";

    // Rastrear el contenedor actual
    currentContenedor = contenedores[index];
  });
});

// Manejar la acción de guardar
guardarButton.addEventListener("click", () => {
  if (currentContenedor) {
    let titulo = tituloInput.value;
    let descripcion = descripcionTextarea.value;

    // Crear una nueva carta
    const newCard = document.createElement("div");
    newCard.classList.add("carta-tarea");
    newCard.draggable = true;

    newCard.innerHTML = `
      <div class="carta-header">
        <a href="#"><i class="fa-solid fa-x" ></i></a>
        <h5 class="carta-titulo">${titulo}</h5>
        <a href="#"><i class="fas fa-edit"></i></a>
      </div>
      <div class="carta-texto">
        <p class="carta-texto">${descripcion}</p>
      </div>
      <div class="carta-footer">
      </div>
    `;

    // Agregar la nueva carta al contenedor correspondiente
    currentContenedor.appendChild(newCard);

    // Cerrar el formulario modal
    modal.style.display = "none";

    // Restablecer el contenedor actual
    currentContenedor = null;
  }
});

// Manejar el cierre del formulario modal
closeModalButton.addEventListener("click", () => {
  modal.style.display = "none";
});

// Manejar el movimiento de cartas entre contenedores
contenedores.forEach((contenedor) => {
  contenedor.addEventListener("dragover", (e) => {
    e.preventDefault();
  });

  contenedor.addEventListener("drop", (e) => {
    e.preventDefault();
    const draggedCard = document.querySelector(".dragging");

    if (draggedCard) {
      contenedor.appendChild(draggedCard);
      draggedCard.classList.remove("dragging");
    }
  });
});

document.addEventListener("dragstart", (e) => {
  const draggedCard = e.target;
  if (draggedCard.classList.contains("carta-tarea")) {
    draggedCard.classList.add("dragging");
  }
});


// Manejar la eliminación de una carta al hacer clic en la "x"
document.addEventListener("click", (e) => {
    if (e.target.classList.contains("fa-x")) {
      const carta = e.target.closest(".carta-tarea");
      if (carta) {
        carta.remove();
      }
    }
  });
  
 