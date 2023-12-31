// Obtener elementos relevantes
const addButtons = document.querySelectorAll(".fa-plus");
const modal = document.getElementById("modal");
const closeModalButton = document.getElementById("close-modal");

const tituloInput = document.getElementById("titulo");
const descripcionTextarea = document.getElementById("descripcion");
const asignado = document.getElementById("asignado");
const guardarButton = document.getElementById("guardar");
const closeModalButton2 = document.getElementById("close-modal2");

const modal2 = document.getElementById("modal2");
const tituloInput2 = document.getElementById("titulo2");
const descripcionTextarea2 = document.getElementById("descripcion2");
const asignado2 = document.getElementById("asignado2");
const guardarButton2 = document.getElementById("guardar2");


const contenedores = document.querySelectorAll(".tareas");
let currentContenedor = null; // Rastrea el contenedor actual

// Manejar la apertura del formulario modal
addButtons.forEach((button, index) => {
  button.addEventListener("click", () => {
    modal.style.display = "flex";

    // Restablecer el formulario
    tituloInput.value = "";
    descripcionTextarea.value = "";
    asignado.value = "";
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
        <i class="fa-solid fa-circle-user"></i>
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
// Manejar el cierre del formulario modal
closeModalButton2.addEventListener("click", () => {
  modal2.style.display = "none";
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
  
 



// Añade un evento clic a los iconos de edición en las cartas
document.addEventListener("click", (e) => {
  if (e.target.classList.contains("fas") && e.target.classList.contains("fa-edit")) {
    const carta = e.target.closest(".carta-tarea");
    if (carta) {
      const tituloCarta = carta.querySelector(".carta-titulo");
      const descripcionCarta = carta.querySelector(".carta-texto");

      // Abre el formulario de edición con los datos actuales de la carta
      modal2.style.display = "flex";
      tituloInput2.value = tituloCarta.textContent;
      descripcionTextarea2.value = descripcionCarta.textContent;

      // eliminar espacios vacios
      tituloInput2.value = tituloCarta.textContent.trim();
      descripcionTextarea2.value = descripcionCarta.textContent.trim();

      // Establece una función para actualizar la carta cuando se presione "Guardar"
      guardarButton2.onclick = () => {
        tituloCarta.textContent = tituloInput2.value;
        descripcionCarta.textContent = descripcionTextarea2.value;
        modal2.style.display = "none"; // Cierra el formulario de edición
      };
    }
  }
});