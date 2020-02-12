<form action="" method="post">
	Horas trabajadas: <br>
	<input type="text" name="hrs_trabajadas" placeholder="Horas trabajadas:">
	<br>
	Dias trabajados: <br>
	<input type="text" name="dias_trabajados" placeholder="Dias trabajados:"> <br>
  Pago por hora: <br>
  <input type="text" name="pago_hora" placeholder="Pago por hora:">
  <br>
  Horas extra: <br>
  <input type="text" name="horas_extra" placeholder="Horas extra:"> <br>
  Bonos: <br>
  <input type="text" name="bonos" placeholder="Bonos:">
  <br>
  IDempleado: <br>
  <input type="text" name="IDempleado" placeholder="IDempleado:"> <br>
  
  
	
	<input type="submit" name="alta" value="Guardar jornada">
</form>
<?php 
       require_once("jornada.php");
       $obj = new jornada();

    if(isset($_POST["alta"])){
     $hrs_trabajadas  = $_POST["hrs_trabajadas"];
     $dias_trabajados = $_POST["dias_trabajados"];
    $pago_hora = $_POST["pago_hora"];
     $horas_extra  = $_POST["horas_extra"];
     $bonos = $_POST["bonos"];
      $IDempleado = $_POST["IDempleado"];
      
       $obj->alta($hrs_trabajadas,$dias_trabajados,$pago_hora,$horas_extra,$bonos,$IDempleado);
       echo "<h2>Jornada registrado</h2>";
    }
 ?>
 <table>
 	<tr>
 		<th>Horas trabajadas</th>
 		<th>Dias trabajados</th>
 		<th>Pago por hora </th>
    <th>Horas extra</th>
    <th>Bonos</th>
    <th>ID empleado</th>
 	</tr>
 	<?php 
     $res = $obj->consulta();
     while ($fila = $res->fetch_assoc()) {
     	echo"<tr>";
     	echo"<td>".$fila["hrs_trabajadas"]."</td>";
      echo"<td>".$fila["dias_trabajados"]."</td>";
      echo"<td>".$fila["pago_hora"]."</td>";
      echo"<td>".$fila["horas_extra"]."</td>";
      echo"<td>".$fila["bonos"]."</td>";
      echo"<td>".$fila["IDempleado"]."</td>";
       
        echo "</tr>";
     }
 	 ?>
 </table>