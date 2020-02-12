<form action="" method="post">
	Fecha de mantenimiento: <br>
	<input type="date" name="fecha_man" placeholder="Fecha mantenimiento:">
	<br>
	Area: <br>
	<input type="text" name="area" placeholder="Area:"> <br>
  ID mobiliario: <br>
  <input type="text" name="IDmob" placeholder="Id mobiliario:">
  <br>
  Costo de mantenimiento: <br>
  <input type="text" name="costo_man" placeholder="Costo mantenimiento:"> <br>
  IDempleado: <br>
  <input type="text" name="IDempleado" placeholder="IDempleado:"> <br>
  
  
	
	<input type="submit" name="alta" value="Guardar mantenimiento">
</form>
<?php 
       require_once("mantenimiento.php");
       $obj = new mantenimiento();

    if(isset($_POST["alta"])){
     $fecha_man = $_POST["fecha_man"];
     $area = $_POST["area"];
    $IDmob = $_POST["IDmob"];
     $costo_man = $_POST["costo_man"];
      $IDempleado = $_POST["IDempleado"];
      
       $obj->alta($fecha_man,$area,$IDmob,$costo_man,$IDempleado);
       echo "<h2>Mantenimiento registrado</h2>";
    }
 ?>
 <table>
 	<tr>
 		<th>Fecha mantenimiento</th>
 		<th>Area</th>
 		<th>ID mobliario </th>
    <th>Costo mantenimiento</th>
    <th>ID empleado</th>
 	</tr>
 	<?php 
     $res = $obj->consulta();
     while ($fila = $res->fetch_assoc()) {
     	echo"<tr>";
     	echo"<td>".$fila["fecha_man"]."</td>";
      echo"<td>".$fila["area"]."</td>";
      echo"<td>".$fila["IDmob"]."</td>";
      echo"<td>".$fila["costo_man"]."</td>";
      echo"<td>".$fila["IDempleado"]."</td>";
       
        echo "</tr>";
     }
 	 ?>
 </table>