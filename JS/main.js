// Obtener elementos relevantes
const addButtons = document.querySelectorAll(".fa-plus");
const modal = document.getElementById("modal");


const tituloInput = document.getElementById("titulo");
const descripcionTextarea = document.getElementById("descripcion");
const asignado = document.getElementById("asignado");
const guardarButton = document.getElementById("guardar");
const closeModalButton = document.getElementById("close-modal");
const id_estado = document.getElementById("id_estado");

const modal2 = document.getElementById("modal2");
const tituloInput2 = document.getElementById("titulo2");
const descripcionTextarea2 = document.getElementById("descripcion2");
const asignado2 = document.getElementById("asignado2");
const guardarButton2 = document.getElementById("guardar2");
const closeModalButton2 = document.getElementById("close-modal2");
const asdfsadf = document.querySelectorAll("#id");

const eliminarButtons = document.querySelectorAll(".equis");
const modal3 = document.getElementById("modal3");
const eliminar = document.getElementById("eliminar");
const cancelar = document.getElementById("cancelar");

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
    id_estado.value = index+1;
  });
});

eliminarButtons.forEach((button2, index2) => {
  button2.addEventListener("click", () => {
    modal3.style.display = "flex";

    // Rastrear el contenedor actual
    currentContenedor = contenedores[index2];
    //id_estado2.value = index2+1;
  });
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

      // Notificar al servidor de PHP sobre la acción
      xhttp = new XMLHttpRequest();

      let str = draggedCard.querySelector('.carta-tarea .carta-titulo').textContent;


      
      let Elid = 1; 
      if(contenedor.id=='enproceso'){
        Elid = 2; 
      }else if (contenedor.id=='terminado'){
        Elid = 3; 
      }

      xhttp.open("GET", "../php/cambiarcontenedor.php?t="+str+"&cont="+Elid, true);
      xhttp.send();


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
      const asginadoCarta = carta.querySelector(".carta-email");

      // Abre el formulario de edición con los datos actuales de la carta
      modal2.style.display = "flex";
      tituloInput2.value = tituloCarta.textContent;
      descripcionTextarea2.value = descripcionCarta.textContent;
      asignado2.value = asginadoCarta.textContent;

      //alert(modal2);
      
      


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


// Obtén todos los elementos con la clase "mi-clase"
var elementos = document.querySelectorAll('.carta-tarea');

elementos.forEach(function(elemento) {
    // Obtiene el valor del atributo data-codigo
    var codigo = elemento.getAttribute('data-codigo');

    // Encuentra el contenedor en función del valor de codigo
    var contenedor;

    switch (codigo) {
        case '1':
            contenedor = document.getElementById('contenedor-1');
            break;
        case '2':
            contenedor = document.getElementById('contenedor-2');
            break;
        case '3':
            contenedor = document.getElementById('contenedor-3');
            break;
        default:
            // Manejo de casos no esperados
            break;
    }

    // Inserta el elemento en el contenedor
    if (contenedor) {
        contenedor.appendChild(elemento);
    }
});