<?php 
require_once("productos.php");
class producto extends Conexion {
	
	public function alta ($nombre,$descripcion,$preciov,$precioc,$cantidad,$cantmin,$cantmax,$categoria){
		$this->sentencia = "INSERT INTO productos VALUES (null,'$nombre','$descripcion','$preciov','$precioc','$cantidad','$cantmin','$cantmax','$categoria')";
		$this->ejecutarSentencia();
	}
	public function baja($id){
		$this->sentencia = "DELETE FROM productos WHERE IDproducto=$id";
		$this->ejecutarSentencia();
	}
	public function consulta(){
		$this->sentencia = "SELECT * FROM productos";
		return $this->obtenerSentencia();
	}
public function modificar(){
			$this->sentencia = "UPDATE FROM productos SET nombre='$nombre',descripcion='$descripcion',preciov='$preciov',precioc='$precioc',cantidad='$cantidad',cantmin'$cantmin',cantmax='$cantmax',categoria='$categoria' WHERE IDproducto='$id'";
	}
}
 ?>