<?php  
	class EnlacesPaginas{
		//function con el parametro $enlacesModel que se recibe a travez del controlador
		public function enlacesPaginasModel($enlacesModel){
			//validar 
			if($enlacesModel=="verProductos"){
				//mostramos el URL concatenado con $enlacesModel
				$module = "Vistas/Paginas/".$enlacesModel.".php";
			}
			//validar una lista blanca
			else{
				$module = "Vistas/Paginas/inicio.php";		
			}
			return $module;
		}
	}
?>