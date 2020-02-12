<form action="" method="post">
	Nombre de proyecto: <br>
	<input type="text" name="nom_pro" placeholder="Nombre:">
	<br>
	Tipo de proyecto: <br>
	<input type="text" name="tipo_pro" placeholder="tipo:"> <br>
  IDempleado: <br>
  <input type="text" name="IDempleado" placeholder="IDempleado:"> <br>
  Fecha de inicio: <br>
  <input type="date" name="fecha_in" placeholder="Fecha:"> <br>
  Fecha fin: <br>
  <input type="date" name="fecha_fin" placeholder="Fecha:"> <br>
  Descripcion: <br>
  <input type="text" name="descripcion" placeholder="Descripcion:">
  <br>
  
  
  
	
	<input type="submit" name="alta" value="Guardar Proyecto">
</form>
<?php 
       require_once("proyecto.php");
       $obj = new proyecto();

    if(isset($_POST["alta"])){
     $nombre_pro = $_POST["nombre_pro"];
     $tipo_pro = $_POST["tipo_pro"];
    $IDempleado = $_POST["IDempleado"];
     $fecha_in = $_POST["fecha_fin"];
      $descripcion = $_POST["descripcion"];
       
      
       $obj->alta($nombre_pro,$tipo_pro,$IDempleado,$fecha_in,$fecha_fin,$descripcion);
       echo "<h2>Proyecto registrado</h2>";
    }
 ?>
 <table>
 	<tr>
 		<th>Nombre de proyecto</th>
 		<th>Tipo de proyecto</th>
 		<th>IDempleado</th>
    <th>Fecha de inicio</th>
    <th>Fecha de fin</th>
    <th>Descripcion</th>
 	</tr>
 	<?php 
     $res = $obj->consulta();
     while ($fila = $res->fetch_assoc()) {
     	echo"<tr>";
     	echo"<td>".$fila["nombre_pro"]."</td>";
      echo"<td>".$fila["tipo_pro"]."</td>";
      echo"<td>".$fila["fecha_in"]."</td>";
      echo"<td>".$fila["fecha_fin"]."</td>";
      echo"<td>".$fila["descripcion"]."</td>";
       
        echo "</tr>";
     }
 	 ?>
 </table>