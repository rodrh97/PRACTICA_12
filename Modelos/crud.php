<?php  
	require_once "conexion.php";

	class Datos extends Conexion{

		public function Iniciar_Sesion($usuario,$password){
			$sql = "SELECT * FROM usuarios WHERE nombre_usuario = ? and password = ?";

			$stmt = Conexion::conectar()->prepare($sql);
			$stmt->execute(array($usuario,$password));
			$r = $stmt->fetch();

			if($r){
				return $r;
			}else{
				return [];
			}
		}
	}
?>