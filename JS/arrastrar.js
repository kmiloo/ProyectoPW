





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