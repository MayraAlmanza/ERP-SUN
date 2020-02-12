<form action="" method="post">
	Nombre: <br>
	<input type="text" name="nombre" placeholder="Nombre:">
	<br>
	Telefono: <br>
	<input type="text" name="telefono" placeholder="Telefono:"> <br>
  Direccion: <br>
  <input type="text" name="direccion" placeholder="Direccion:">
  <br>
  Correo: <br>
  <input type="text" name="correo" placeholder="Correo:"> <br>
  RFC: <br>
  <input type="text" name="rfc" placeholder="RFC:"> <br>
  
  
	
	<input type="submit" name="alta" value="Guardar Proveedor">
</form>
<?php 
       require_once("provedor.php");
       $obj = new provedor();

    if(isset($_POST["alta"])){
     $nombre = $_POST["nombre"];
     $telefono = $_POST["telefono"];
    $direccion = $_POST["direccion"];
     $correo = $_POST["correo"];
      $RFC = $_POST["rfc"];
      
      
       $obj->alta($nombre,$telefono,$direccion,$correo,$rfc);
       echo "<h2>Proveedor registrada</h2>";
    }
 ?>
 <table>
 	<tr>
 		<th>Nombre</th>
 		<th>Telefono</th>
 		<th>Direccion</th>
    <th>Correo</th>
    <th>RFC</th>
    
 	</tr>
 	<?php 
     $res = $obj->consulta();
     while ($fila = $res->fetch_assoc()) {
     	echo"<tr>";
     	echo"<td>".$fila["nombre"]."</td>";
      echo"<td>".$fila["telefono"]."</td>";
      echo"<td>".$fila["direccion"]."</td>";
      echo"<td>".$fila["rfc"]."</td>";
      
        echo "</tr>";
     }
 	 ?>
 </table>