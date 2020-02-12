<?php 
require_once("conexion.php");
class materiaprima extends Conexion {
	
	public function alta ($nombre,$tipo,$descripcion,$precio,$stock,$existencia){
		$this->sentencia = "INSERT INTO materiaprima VALUES (null,'$nombre','$tipo','$descripcion','$precio','$stock','$existencia')";
		$this->ejecutarSentencia();
	}
	public function baja($id){
		$this->sentencia = "DELETE FROM materiaprima WHERE IDmateriaprima=$id";
		$this->ejecutarSentencia();
	}
	public function consulta(){
		$this->sentencia = "SELECT * FROM materiaprima";
		return $this->obtenerSentencia();
	}
public function modificar(){
			$this->sentencia = "UPDATE FROM materiaprima SET nombre='$nombre',tipo='$tipo',descripcion='$descripcion',precio='$precio',stock='$stock',existencia='$existencia'  WHERE IDmateriaprima='$id'";
	}
}
 ?>