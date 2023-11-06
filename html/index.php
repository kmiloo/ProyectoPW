<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
</head>
<body>

    <?php
        include("../php/registrar_tarea.php");
    ?>

    <!-- ================= MENU DESPLEGABLE ======================-->
    <div id="modal" class="modal">
        <div class="modal-content">
            <span class="close" ><a href="#" id="close-modal"><i class="fa-solid fa-x fa-3x"></i></a></span>
            <div>
                <form method="post">
                    <div class="carta-headerr">
                        <input type="text" id="titulo" name="titulo" placeholder="Título Tarea">
                    </div>
                    <div class="card-body">
                        <textarea id="descripcion" name="descripcion" placeholder="Descripción Tarea" autofocus="true" ></textarea>
                    </div>
                    <div class="carta-footerr">
                        <input type="email" id="asignado" name="email" placeholder="Correo">
                    </div>
                    <input type="hidden" id="id_estado" name="id_estado">


                    <button type="submit" name="guardar">Guardar</button>
                </form>
            </div>
            
        </div>
    </div>
    






    <!-- ================= MENU DESPLEGABLE2(para ediciones) ======================-->
    <div id="modal2" class="modal2">
        <div class="modal-content2">
            <span class="close2" ><a href="#" id="close-modal2"><i class="fa-solid fa-x fa-3x"></i></a></span>
            <div>
                <div class="carta-headerr2">
                    <input type="text" id="titulo2" >
                </div>
                <div class="card-body">
                    <textarea id="descripcion2"></textarea>
                </div>
                <div class="carta-footerr">
                    <input type="email" id="asignado2">
                </div>
                    <button id="guardar2">Guardar</button>
            </div>
            
        </div>
    </div>
    
    

    <!-- ================= SIDE VAR ======================-->
    <nav class="menu">
        <!-- ================= ZONA DE INICIO ======================-->
        <div class="inicio">
            <div>
                <img src="../img/LOGO.png" alt="TR" class="logo">
            </div>
            <li>
                <a href="">
                    <span>Inicio</span>
                </a>
            </li>
            <!-- <li>
                <a href="#">
                    <span>About</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <span>Settings</span>
                </a>
            </li> -->
        </div>

        <!-- ================= ZONA DE LOGOUT ======================-->
        <div class="logout">
            <li>
                <a href="../html/login.php">
                    <i class="fa-solid fa-right-from-bracket"></i>
                    <span>Log Out</span>
                </a>
            </li>
        </div>
    </nav>
    

    <main>


        <!-- ================= ZONDA DE ARRIBA DE CONTENEDORES TAREAS ======================-->
        <div class="arriba">
            <div>
                <p>Gestor de Tareas</p>
            </div>
            <div class="iconos-arriba">
                <li>
                    <a href="../html/account.php" ><i class="fa-regular fa-user"></i></a>
                </li>
            </div>
        </div>
 

        <!-- ================= CONTENEDORES DE TAREAS ======================-->
        <div class="contenedores-tareas">
            <!-- ================= CONTENEDOR POR HACER ======================-->
            <div class="tareas">

                <div class="por-hacer" id='contenedor-1'>

                    <!-- ================= header en tarea======================-->
                    <div class="por-hacer-header">
                        <p>Por hacer</p>
                        <a href="#"><i class="fa-solid fa-plus fa-2x"></i></a>
                    </div>

                    <!-- ================= CARTAS DE TAREAS (mejorar)======================-->
                    <div class="carta-tarea" draggable="true">
                        <a href="#"><i class="fa-solid fa-x" ></i></a>
                        <div class="carta-header">
                            <h5 class="carta-titulo">Success card title</h5>
                            <a href="#"><i id="edit" class="fas fa-edit"></i></a>
                        </div>
                        <div class="carta-texto">
                            <p class="carta-texto">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                        <div class="carta-footer">
                            <i class="fa-solid fa-circle-user"></i>
                        </div>
                    </div>

                </div>
            </div>
        




            <!-- ================= CONTENEDOR EN PROCESO======================-->
            <div class="tareas">  

                <!-- ================= header proceso ======================-->
                <div class="en-proceso" id='contenedor-2'>
                    
                    <div class="en-proceso-header">
                        <p>En Proceso</p>
                        <a href="#"><i class="fa-solid fa-plus fa-2x"></i></a>
                    </div>

                    <!-- ================= UNA CARTA ======================-->
                    <div class="carta-tarea" draggable="true">
                        <a href="#"><i class="fa-solid fa-x" ></i></a>
                        <div class="carta-header">
                            <h5 class="carta-titulo">Success card title</h5>
                            <a href="#"><i id="edit" class="fas fa-edit"></i></a>
                        </div>
                        <div class="carta-texto">
                            <p class="carta-texto">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                        <div class="carta-footer">
                            <i class="fa-solid fa-circle-user"></i>
                        </div>
                    </div>

                </div>
            </div>

    
    
    
            <!-- ================= CONTENEDOR TERMINADO======================-->
            <div class="tareas">
                <div class="terminado" id='contenedor-3'>
                    <div class="terminado-header">
                        <p>Terminado</p>
                        <a href="#"><i class="fa-solid fa-plus fa-2x"></i></a>
                    </div>

                    <!-- ================= UNA CARTA ======================-->
                    <div class="carta-tarea" draggable="true">
                        <a href="#"><i class="fa-solid fa-x" ></i></a>
                        <div class="carta-header">
                            <h5 class="carta-titulo">Success card title</h5>
                            <a href="#"><i id="edit" class="fas fa-edit"></i></a>
                        </div>
                        <div class="carta-texto">
                            <p class="carta-texto">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                        </div>
                        <div class="carta-footer">
                            <i class="fa-solid fa-circle-user"></i>
                        </div>
                    </div>
                
            </div>
        </div>
        <script src="../JS/main.js"></script>
    </main>
</body>
</html>
