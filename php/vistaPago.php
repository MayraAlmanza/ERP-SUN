<form action="" method="post">
	IDempleado: <br>
	<input type="text" name="IDempleado" placeholder="IDempleado:">
	<br>
	Salario: <br>
	<input type="text" name="sal" placeholder="Salario:"> <br>
  Fecha de pago: <br>
  <input type="text" name="fecha_dep" placeholder="Fecha de pago:">
  <br>
  Metodo de pago: <br>
  <input type="text" name="met_pago" placeholder="Metodo de pago:"> <br>
  Descripcion: <br>
  <input type="text" name="des" placeholder="Descripcion:"> <br>
  
	<input type="submit" name="alta" value="Guardar pago">
</form>
<?php 
       require_once("pago.php");
       $obj = new pago();

    if(isset($_POST["alta"])){
     $IDempleado = $_POST["IDempleado"];
     $sal = $_POST["sal"];
    $fecha_dep = $_POST["fecha_dep"];
     $met_pago = $_POST["met_pago"];
      $des = $_POST["des"];
      
      
       $obj->alta($IDempleado,$sal,$fecha_dep,$met_pago,$des);
       echo "<h2>Pago registrado</h2>";
    }
 ?>
 <table>
 	<tr>
 		<th>IDempleado</th>
 		<th>Salario</th>
 		<th>Fecha de pago</th>
    <th>Metodo de pago</th>
    <th>Descripcion</th>
    
 	</tr>
 	<?php 
     $res = $obj->consulta();
     while ($fila = $res->fetch_assoc()) {
     	echo"<tr>";
     	echo"<td>".$fila["IDempleado"]."</td>";
      echo"<td>".$fila["sal"]."</td>";
      echo"<td>".$fila["fecha_dep"]."</td>";
      echo"<td>".$fila["met_pago"]."</td>";
      echo"<td>".$fila["des"]."</td>";
       
        echo "</tr>";
     }
 	 ?>
 </table>