<?php 
require_once("conexion.php");
class compra extends Conexion {
	
	public function alta ($fecha,$total,$tipo_pago,$IDcliente){
		$this->sentencia = "INSERT INTO compra VALUES (null,'$fecha','$total','$tipo_pago','$IDcliente')";
		$this->ejecutarSentencia();
	}
	public function baja($id){
		$this->sentencia = "DELETE FROM compra WHERE IDcompra=$id";
		$this->ejecutarSentencia();
	}
	public function consulta(){
		$this->sentencia = "SELECT * FROM compra";
		return $this->obtenerSentencia();
	}
public function modificar(){
			$this->sentencia = "UPDATE FROM compra SET fecha = '$fecha', total ='$total', tipo_pago = '$tipo_pago', IDcliente ='$IDcliente' WHERE IDcompra  ='$id'";
	}
}
 ?>