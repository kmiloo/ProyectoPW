$(document).ready(function() {

    const contenedores = document.querySelectorAll(".tareas");

    // Manejar el movimiento de cartas entre contenedores
    contenedores.forEach((contenedor) => {
        contenedor.addEventListener("dragover", (e) => {
        e.preventDefault();
        });

        document.addEventListener("dragstart", (e) => {
            const draggedCard = e.target;
            if (draggedCard.classList.contains("carta-tarea")) {
            draggedCard.classList.add("dragging");
            }
        });
    
        contenedor.addEventListener("drop", (e) => {
        e.preventDefault();
        const draggedCard = document.querySelector(".dragging");
    
        if (draggedCard) {
            contenedor.appendChild(draggedCard);
            draggedCard.classList.remove("dragging");

            //id tarea
            let id = $(draggedCard).attr('id');
            //id contenedor
            let id_estado= contenedor.children[1].id

            $.post('../php/movimiento.php',{id,id_estado}, function (response) {
                console.log(response); 
            })
        }
        });
    });
})
