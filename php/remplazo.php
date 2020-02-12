<?php 
require_once("conexion.php");
class remplazo extends Conexion {
	
	public function alta ($IDmobiliario,$fecha,$costo,$descripcion){
		$this->sentencia = "INSERT INTO remplazo VALUES (null,'$IDmobiliario','$fecha','$costo','$descripcion')";
		$this->ejecutarSentencia();
	}
	public function baja($id){
		$this->sentencia = "DELETE FROM remplazo WHERE IDremplazo=$id";
		$this->ejecutarSentencia();
	}
	public function consulta(){
		$this->sentencia = "SELECT * FROM remplazo";
		return $this->obtenerSentencia();
	}
public function modificar(){
			$this->sentencia = "UPDATE FROM remplazo SET $IDmobiliario='$IDmobiliario',fecha='$fecha',costo='$costo',$descripcion='$descripcion' WHERE IDremplazo ='$id'";
	}
}
 ?>