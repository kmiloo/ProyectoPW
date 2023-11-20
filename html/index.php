<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestor de tareas</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
</head>
<body>


   

    <!-- ================= MENU DESPLEGABLE ======================-->
    <div id="modal" class="modal">
        <div class="modal-content">
            <span class="close" ><a href="#" id="close-modal"><i class="fa-solid fa-x fa-3x"></i></a></span>
            <div>
                <form id="form-tareas">
                    <div class="carta-headerr">
                        <input type="text" id="titulo" name="titulo" placeholder="Título Tarea">
                    </div>
                    <div class="card-body">
                        <textarea id="descripcion" name="descripcion" placeholder="Descripción Tarea" autofocus="true" ></textarea>
                    </div>
                    <div class="carta-footerr">
                        <input type="email" id="correo" name="email" placeholder="Correo">
                    </div>
                    <input type="date" id="fecha" name="fecha" placeholder="fecha">
                    <input type="hidden" id="id_estado" name="id_estado">
                    <input type="hidden" id="id">

                    <button type="submit" name="guardar" id="guardar">Guardar</button>
                </form>
            </div>
            
        </div>
    </div>

    <?php
        session_start();
    ?>

    <!-- ================= SIDE VAR ======================-->
    <nav class="menu">
        <!-- ================= ZONA DE INICIO ======================-->
        <div class="inicio">
            <div>
                <img src="../img/LOGO.png" alt="TR" class="logo">
            </div>
            <li>
                <a href="">
                    <span>Inicio <?php $_SESSION['correo']?></span>
                </a>
            </li>

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
            <div class="tareas" id='porhacer'>
                <!-- ================= header en tarea======================-->
                <div class="por-hacer-header">
                    <p>Por hacer</p>
                    <a href="#"><i class="fa-solid fa-plus fa-2x"></i></a>
                </div>

                <div class="por-hacer" id='1'>


                </div>
            </div>
        




            <!-- ================= CONTENEDOR EN PROCESO======================-->
            <div class="tareas" id='enproceso'>  
                <!-- ================= header proceso ======================-->
                <div class="en-proceso-header">
                    <p>En Proceso</p>
                    <a href="#"><i class="fa-solid fa-plus fa-2x"></i></a>
                </div>

                <div class="en-proceso" id='2'>


                </div>
            </div>

    
    
    
            <!-- ================= CONTENEDOR TERMINADO======================-->
            <div class="tareas" id='terminado'>

                <div class="terminado-header">
                    <p>Terminado</p>
                    <a href="#"><i class="fa-solid fa-plus fa-2x"></i></a>
                </div>

                <div class="terminado" id='3'>
                   
                
            </div>
        </div>
    </main>

    <script
      src="https://code.jquery.com/jquery-3.3.1.min.js"
      integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
      crossorigin="anonymous"
    ></script>

    <script src="../js/agregar-tareas-bdd.js"></script>
    <script src="../js/movimiento.js"></script>
    <script src="../js/formulario.js"></script>

</body>
</html>
