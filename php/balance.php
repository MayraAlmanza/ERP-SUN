<?php 
require_once("conexion.php");
class balance extends Conexion {
	public function alta($fechafin,$fechainicio,$total){
		$this->sentencia = "INSERT INTO balance VALUES (null,'$fechafin','$fechainicio','$total')";
		$this->ejecutarSentencia();
	}
	public function baja($id){
		$this->sentencia = "DELETE FROM balance WHERE IDbalance=$id";
		$this->ejecutarSentencia();
	}
	public function consulta(){
		$this->sentencia = "SELECT * FROM balance";
		return $this->obtenerSentencia();
	}
	public function modificar(){
			$this->sentencia = "DELETE FROM balance WHERE IDbalance=$id";
	}
}
 ?>