<?php  
	require_once "conexion.php";

	class Datos extends Conexion{

		public function Iniciar_Sesion($usuario,$contraseña){
			$sql = "SELECT * FROM usuarios WHERE nombre_usuario = ? and password = ?";

			$stmt = Conexion::conectar()->prepare($sql);
			$stmt->execute(array($usuario,$contraseña));
			$r = $stmt->fetch();

			if($r){
				return $r;
			}else{
				return [];
			}
		}
	}
?>