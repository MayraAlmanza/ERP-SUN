<?php 
require_once("conexion.php");
class venta extends Conexion {
	
	public function alta ($fecha,$IDcliente,$total,$tipo_pago){
		$this->sentencia = "INSERT INTO venta VALUES (null,'$fecha','$IDcliente','$total','$tipo_pago')";
		$this->ejecutarSentencia();
	}
	public function baja($id){
		$this->sentencia = "DELETE FROM venta WHERE IDventa=$id";
		$this->ejecutarSentencia();
	}
	public function consulta(){
		$this->sentencia = "SELECT * FROM venta";
		return $this->obtenerSentencia();
	}
public function modificar(){
			$this->sentencia = "UPDATE FROM venta SET fecha='$fecha',IDcliente='$IDcliente',total='$total',tipo_pago='$tipo_pago'  WHERE IDventa='$id'";
	}
}
 ?>