<?php
    /*include ("../conexion.php");
    $query=mysqli_query($conn, "SELECT Id_Equipaje, Peso FROM equipaje");

    // $buscar="SELECT `IDProveedor`, `RTN` FROM proveedores;";
    // $resultado=mysqli_query($conn, $buscar);
    session_start();
    if (!isset($_SESSION['idUser'])) {
        header('location: ../index.php');
    }

    //require_once '../Seguridad/Validate_Roles.php';
   // require_once '../Seguridad/Validate_Pantallas.php';


   //Traer el rol del usuario
   $user=$_SESSION['idUser'];

   $queryllamar_id_rol=mysqli_query($conn, "SELECT Id_Rol FROM usuario WHERE `idUser`=$user;");

   $id_rol = array();
  
    while($datos = mysqli_fetch_array($queryllamar_id_rol)) {
        array_push($id_rol, $datos['Id_Rol']);
    }

    $id_rol_seleccionado=$id_rol[0];


//Con el Rol traer las tablas a las que puede acceder dicho rol
    $queryllamar_id_tabla=mysqli_query($conn, "SELECT Id_Pantalla FROM rolespantallasacciones WHERE `Id_Rol`=$id_rol_seleccionado;");

    $llamar_id_tabla="SELECT Id_Pantalla FROM rolespantallasacciones WHERE `Id_Rol`=$id_rol_seleccionado";

    $id_pantalla = array();

    $resultado2 = $conn->query($llamar_id_tabla);

    $rows2 = $resultado2->num_rows;
	
    $ids = "";
    if($resultado2){
       while($row=$resultado2->fetch_array()){
       // Esto crea un string como 'id1','id2','id3',
           $ids .= "'".$row['Id_Pantalla'] . "', ";
       }
       // Esto quita el ultimo espacio y coma del string generado con lo cual
       // el string queda 'id1','id2','id3'
    
       $ids = substr($ids,0,-2);
    }
    $queryllamar_nombre_tabla=mysqli_query($conn, "SELECT Nombre FROM pantallas WHERE `Id_Pantalla`in (".$ids.")");

    $nombre_tabla = array();
  
    while($datos = mysqli_fetch_array($queryllamar_nombre_tabla)) {
        
        array_push($nombre_tabla, $datos['Nombre']);
    }
$i=0;
$j=0;

while($i<$rows2){
    if($nombre_tabla[$i]=='Aeronave'){
        $j=1;
    }
    $i+=1;
}

if($j == 0){
    echo  "<script>
    alert('El usuario no tiene acceso a esta ventana.');
    window.location = '../principaladmin.php';
    </script>";

}
     //$id_rol_seleccionado=$id_rol[0];



   /* $equipaje=mysqli_query($conn, "SELECT idUser, rol.Nombre as rolN, p.Nombre as pantallaN
    FROM usuario LEFT JOIN rol ON usuario.Id_Rol = rol.Id_Rol 
    INNER JOIN rolespantallasacciones rp ON rp.Id_Rol = rol.Id_Rol 
    INNER JOIN pantallas p ON p.Id_Pantalla = rp.Id_Pantalla");

    $rango = array();

    while($datos = mysqli_fetch_array($equipaje)){
        array_push($rango, $datos['pantallaN']);
    }

    if(!array_key_exists('pantallaN', $_SESSION) || !in_array($_SESSION['pantallaN'], $rango)){
        echo  "<script>
        alert('El usuario no tiene permisos para acceder a esta pantalla.');
        window.location = '../principaladmin.php';
        </script>";
    }*/

    /*if(isset($_POST['estado'])) {
        $estado=$_POST['estado'];
        echo $estado;
    }*/
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Registro</title>
	<link rel="shortcut icon" href="https://img.icons8.com/?size=512&id=OWi1FRGoDmTl&format=png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="{{ asset('style/cuerpo/Dashboard-2.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('style/cuerpo/dashboard.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('style/Dashboard/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">

</head>

<body id="page-top">
    <div id="wrapper">
        <!--Empieza Lista -->
        <ul class="navbar-nav color sidebar sidebar-dark accordion" id="accordionSidebar">
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="../">
                <div class="sidebar-brand-text mx-3">Inicio</div>
            </a>
            <hr class="sidebar-divider my-0">
            <li class="nav-item active">
                <a class="nav-link" href="../">
                <i class="fas fa-user-plus"></i>
                    <span>Inicio</span>
                </a>
            </li>
            <hr class="sidebar-divider">
            <div class="sidebar-heading">
                Datos
            </div>
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages1"
                    aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Datos Maestros</span>
                </a>
                <div id="collapsePages1" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="#"><i class="fas fa-user-plus"></i> Registro</a>
                        
                    </div>
                </div>
            </li>

        
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages3"
                    aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Consultas</span>
                </a>
                <div id="collapsePages3" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        
                        <a class="collapse-item" href="{{ route('user.index') }}"><i class="fas fa-users"></i> Usuarios</a>
                        
                       
                    </div>
                </div>
            </li>
            <!--<li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages4"
                    aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Seguridad</span>
                </a>
                <div id="collapsePages4" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <a class="collapse-item" href="../Seguridad/usuario.php">Usuario</a>
                        <a class="collapse-item" href="../Seguridad/Consultausuarios.php">Consulta de Usuarios</a>
                    </div>
                </div>
            </li>-->
        </ul>
        <!--Termina Lista -->
        <div id="content">
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>
                <h2>Registro</h2>
                    <!--<ul class="navbar-nav ml-auto">
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"></span>
                                <img class="img-profile rounded-circle"
                                    src="img/Icono/Usuario.png">
                            </a>
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                
                                <a class="dropdown-item" href="logout.php" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Salir
                                </a>
                            </div>
                        </li>
                    </ul>-->
                </nav>

                <!-- Contenido -->
                <div class="col-auto text-center">
                    <!-- Tajeta y Contenido -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Insertar datos
                            </h6>
                        </div>
                        <div class="card-body">
                            <form class="row g-3 needs-validation" action="{{ route('user.store') }}"  method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3">
                                  <input class="form-control" name="name" type="text" placeholder="Nombre"required>
                                </div>
                                <div class="mb-3">
                                  <input class="form-control" name="lastname" type="text" placeholder="Apellido" required>
                                </div>
                                <div class="mb-3">
                                  <input class="form-control" name="email"  type="email" placeholder="Correo electrónico" required>
                                </div>
                                <div class="mb-3">
                                  <input class="form-control" name="username" type="text" placeholder="Nombre de usuario" required>
                                </div>
                                <div class="mb-3">
                                <div class="mb-3">
                                  <input class="form-control" name="password" type="password" placeholder="Contraseña" required>
                                </div>
                                <div class="mb-3">
                                  <input class="form-control" name="birthdate" type="date" placeholder="Fecha de nacimiento" required>
                                </div>
                                <div class="mb-3">
                                  <input class="form-control" name="phone" type="text" placeholder="Teléfono" required>
                                </div>
                                

                                <div class="col-md-12  mt-5 text-center">
                                    <button class="btn btn-primary" name="btnnombre" type="submit">Guardar</button>
                                </div>
                      </form>
                        </div>
                    </div>
                </div>
                <!-- Fin de Contenido -->
                    </div>
                </div>
            </div>
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Libreria 2023</span>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <a class="scroll-to-top rounded" href="#">
        <i class="fas fa-angle-up"></i>
    </a>
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Desea Salir?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Seleccione "Salir" Si asi lo desea.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="../cerrarsesion.php">Salir</a>
                </div>
            </div>
        </div>
    </div>

    <script src="{{ asset('style/Dashboard/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('style/Dashboard/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('style/Dashboard/jquery-easing/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('style/js/Dashboard-2.min.js') }}"></script>
    <script src="{{ asset('style/Dashboard/chart.js/Chart.min.js') }}"></script>
    <script src="{{ asset('style/js/demo/chart-area-demo.js') }}"></script>
    <script src="{{ asset('style/js/demo/chart-pie-demo.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
</body>

</html>