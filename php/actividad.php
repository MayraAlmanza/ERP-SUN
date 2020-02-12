<?php 
require_once("conexion.php");
class actividad extends Conexion {
	public function alta($registro,$IDusuario,$movimiento_act,$movimiento_tabla){
		$this->sentencia = "INSERT INTO usuario VALUES (null,'$IDactividad','$registro','$IDusuario','$movimiento_act','$movimiento_tabla')";
		$this->ejecutarSentencia();
	}
	public function baja($id){
		$this->sentencia = "DELETE FROM actividad WHERE IDactividad=$id";
		$this->ejecutarSentencia();
	}
	public function consulta(){
		$this->sentencia = "SELECT * FROM actividad";
		return $this->obtenerSentencia();
	}
	public function modificar(){
		$this->sentencia = "UPDATE FROM actividad SET registro='$registro',IDusuario='$IDusuario',movimiento_act='$movimiento_act',movimiento_tabla='$movimiento_tabla' WHERE IDusuario='$id'";
	}
}
 ?>