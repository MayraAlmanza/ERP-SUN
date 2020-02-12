<?php 
require_once("conexion.php");
class Usuario extends Conexion {
	
	public function alta (null,$nombre,$appaterno,$apmaterno,$correo,$rfc,$telefono,$sexo,$fechadeingreso,$cargo,$salario,$estadocivil,$nss){
		$this->sentencia = "INSERT INTO empleado VALUES (null,'$nombre','$appaterno','$apmaterno','$correo','$rfc','$telefono','$sexo','$fechadeingreso','$cargo','$salario','$estadocivil','$nss')";
		$this->ejecutarSentencia();
	}
	public function baja($id){
		$this->sentencia = "DELETE FROM empleado WHERE IDempleado=$id";
		$this->ejecutarSentencia();
	}
	public function consulta(){
		$this->sentencia = "SELECT * FROM empleado";
		return $this->obtenerSentencia();
	}
public function modificar(){
			$this->sentencia = "UPDATE FROM empleado SET nombre='$nombre',appaterno='$appaterno','appaterno=$apmaterno',correo='$correo',rfc='$rfc',telefono='$telefono',sexo='$sexo',fechadeingreso='$fechadeingreso',cargo='$cargo',salario='$salario',estadocivil='$estadocivil',nss='$nss' WHERE IDempleado='$id'";
	}
}
 ?>