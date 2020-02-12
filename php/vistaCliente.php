<form action="" method="post">
	Nombre: <br>
	<input type="text" name="nombre" placeholder="Nombre:">
	<br>
	Direccion: <br>
  <input type="text" name="direccion" placeholder="Direccion:">
  <br>
  Telefono: <br>
  <input type="text" name="telefono" placeholder="Telefono:">
  <br>
  Correo: <br>
  <input type="text" name="correo" placeholder="Correo:">
  <br>
  Apellido materno: <br>
  <input type="text" name="apematerno" placeholder="Apellido materno:">
  <br>
  Apellido paterno: <br>
  <input type="text" name="apepaterno" placeholder="Apellido paterno:">
  <br>
  Sexo: <br>
  <input type="text" name="sexo" placeholder="Sexo:">
  <br>
  Fecha de nacimiento: <br>
  <input type="date" name="fenacimiento" placeholder="Fecha nacimiento:">
  <br>
	<input type="submit" name="alta" value="Guardar cliente">
</form>
<?php 
       require_once("balance.php");
       $obj = new cliente();

    if(isset($_POST["alta"])){
     $nombre  = $_POST["nombre"];
     $direccion  = $_POST["direccion"];
     $telefono  = $_POST["telefono"];
     $correo  = $_POST["correo"];
     $apepaterno  = $_POST["apematerno"];
     $apepaterno  = $_POST["apepaterno"];
     $sexo = $_POST["sexo"];
     $fenacimiento  = $_POST["fenacimiento"];
       $obj->alta($nombre,$direccion,$telefono,$correo,$apematerno,$apepaterno,$sexo,$fenacimiento);
       echo "<h2>Cliente agregado</h2>";
    }
 ?>
 <table>
 	<tr>
 		<th>Nombre</th>
    <th>Direccion</th>
    <th>Telefono</th>
    <th>Correo</th>
    <th>Apmaterno</th>
    <th>Apepaterno</th>
    <th>Sexo</th>
    <th>Fecha nacimiento</th>
 		
 	</tr>
 	<?php 
     $res = $obj->consulta();
     while ($fila = $res->fetch_assoc()) {
     	echo"<tr>";
     	echo"<td>".$fila["nombre"]."</td>";
      echo"<td>".$fila["direccion"]."</td>";
      echo"<td>".$fila["telefono"]."</td>";
      echo"<td>".$fila["correo"]."</td>";
      echo"<td>".$fila["apematerno"]."</td>";
      echo"<td>".$fila["apepaterno"]."</td>";
      echo"<td>".$fila["sexo"]."</td>";
      echo"<td>".$fila["fenacimiento"]."</td>";
        
        echo "</tr>";
     }
 	 ?>
 </table>