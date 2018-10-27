<?php  
	class MvcController{
		public function plantilla(){
			header("location:Vistas/plantilla.php");
			//include "Vistas/plantilla.php";
		}

		
		public function enlacesPaginasController(){
			//trabajar con los enlaces de las paginas
			//validar si la variable "action" viene vacia, es decir, cuando se abre la pagina por primera vez, se debe cargar la vista index.php

			if (isset($_GET['action'])) {
				$enlacesController = $_GET['action'];
			}else{
				//si viene vacio inicializo con index
				$enlacesController = "index";
			}

			$respuesta = EnlacesPaginas::enlacesPaginasModel($enlacesController);

			include $respuesta;
		}

		public function login(){
			if(isset($_POST['usuario'])&&isset($_POST['password'])){

				$usuario = $_POST['usuario'];
				$password = $_POST['password'];
				$log = new Datos();

				$r = $log->Iniciar_Sesion($usuario,$password);
				if($r){
					$_SESSION['usuario'] = $r['nombre_usuario'];
					header("location:plantilla.php");
				}else{
					echo "<script>alert('Usuario o contraseña incorrecta.')</script>";
				}
			}
		}
	}
?>