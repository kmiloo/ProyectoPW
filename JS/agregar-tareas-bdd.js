$(document).ready(function() {
    console.log('jquery funciona');
    //busca tareas
    buscarTareas();
    let editar=false;



    //agrega las tareas a la base de datos
    $('#form-tareas').submit(function(e){

        //se almacenan datos de formulario
        const postData = {
            titulo: $('#titulo').val(),
            descripcion: $('#descripcion').val(),
            correo: $('#correo').val(),
            fecha: $('#fecha').val(),
            id_estado: $('#id_estado').val(),
            id: $('#id').val(),
        };
        //verificar si esta editando o guardando
        let url = editar === false ? '../php/agregar-tarea-bdd.php' : '../php/editar-tarea.php';
        console.log(url);

        
        //se envia para guardar en base de datos
        $.post(url, postData, function(response){
            console.log(response);
            buscarTareas();
            $('#form-tareas').trigger('reset');//resetea los campos
            modal.style.display = "none";//cierrra el formulario
        });
        
    });




    //agrega las tareas de la base de datos
    function buscarTareas(){
        $.ajax({
            url: '../php/agregar-tareas-contenedores.php',
            type:'GET',
            success: function (response) {
                //console.log(response);
                let tarea = JSON.parse(response);
                let templates = [];
                tarea.forEach(tarea => {
                    let template = `
                    <div class="carta-tarea" draggable="true" data-codigo=" ${tarea.id_estado}" id="${tarea.id}">
                        <a href=""><i class="fa-solid fa-x borrar" ></i></a>
                        <div class="carta-header">
                            <h5 class="carta-titulo"> ${tarea.titulo}</h5>
                            <a href="#"><i class="fas fa-edit editar"></i></a>
                        </div>
                        <div class="carta-texto">
                            <p class="carta-texto"> ${tarea.descripcion}</p>
                        </div>
                        <div class="carta-footer">
                            <p class="carta-email" style="display: none;">  ${tarea.correo} </p>
                            <i class="fa-solid fa-circle-user"></i>
                            <input type="hidden" id="id_estado" name="id_estado" value="  ${tarea.id_estado} ">
                            <input type="hidden" id="id" name="id" value="  ${tarea.id}  ">
                        </div>
                    </div>
                    `;
                    templates.push(template);

                });
                //console.log(templates.length);
                
                //agrega las tareas a los contenedores
                for (let i = 0; i < templates.length; i++) {
                    let templateElement = $(templates[i]);
                    let codigo = templateElement.attr('data-codigo');
                    let id = templateElement.attr('id');
                    
                    if($('#1').find(`[id="${id}"]`).length === 0 &&$('#2').find(`[id="${id}"]`).length === 0 && $('#3').find(`[id="${id}"]`).length === 0){
                        if (codigo == 1) {
                            $('#1').append(templateElement);
                        }else if(codigo == 2){
                            $('#2').append(templateElement);
                        }else{
                            $('#3').append(templateElement);
                        }
                    }
                }
            }
        })
    }




    //eliminar tareas 
    $(document).on('click', '.borrar', function() {
        let elemento = $(this)[0].parentElement.parentElement;
        //console.log(elemento);
        //se consigue id
        let id = $(elemento).attr('id');
        console.log(id);

        //enviar id  y recibir respuesta
        $.post('../php/eliminar-tarea.php',{id}, function (response) {
            buscarTareas();
        });
        
    })

    //editar tareas
    $(document).on('click', '.editar', function() {
        let elemento = $(this)[0].parentElement.parentElement.parentElement;
        //console.log(elemento);
        let id = $(elemento).attr('id');
        //console.log(id);
        $.post('../php/datos-tarea.php',{id}, function (response) {
            //console.log(response)
            const tarea = JSON.parse(response);
            modal.style.display = "flex";//abrir formulario

            $('#titulo').val(tarea.titulo);
            $('#descripcion').val(tarea.descripcion);
            $('#correo').val(tarea.correo);
            $('#fecha').val(tarea.fecha);
            $('#id_estado').val(tarea.id_estado);
            $('#id').val(tarea.id);
            editar=true;

        });


    })

});