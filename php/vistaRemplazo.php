<form action="" method="post">
	IDmobiliario: <br>
	<input type="text" name=" IDmobiliario" placeholder="IDmobiliario:">
	<br>
	Fecha: <br>
	<input type="date" name="fecha" placeholder="Fecha:"> <br>
  Costo: <br>
  <input type="text" name="costo" placeholder="costo:">
  <br>
  Descripcion: <br>
  <input type="text" name="descripcion" placeholder="Descripcion:"> <br>
  
  
  
	
	<input type="submit" name="alta" value="Guardar Remplazo">
</form>
<?php 
       require_once("remplazo.php");
       $obj = new remplazo();

    if(isset($_POST["alta"])){
     $IDmobiliario = $_POST["IDmobiliario"];
     $fecha = $_POST["fecha"];
    $costo = $_POST["costo"];
     $descripcion = $_POST["descripcion"];
      
      
       $obj->alta($IDmobiliario,$fecha,$costo,$descripcion);
       echo "<h2>Remplazo registrada</h2>";
    }
 ?>
 <table>
 	<tr>
 		<th>IDmobiliario</th>
 		<th>Fecha</th>
 		<th>Costo</th>
    <th>Descripcion</th>
    
 	</tr>
 	<?php 
     $res = $obj->consulta();
     while ($fila = $res->fetch_assoc()) {
     	echo"<tr>";
     	echo"<td>".$fila["IDmobiliario"]."</td>";
      echo"<td>".$fila["fecha"]."</td>";
      echo"<td>".$fila["costo"]."</td>";
      echo"<td>".$fila["descripcion"]."</td>";
     
       
        echo "</tr>";
     }
 	 ?>
 </table>