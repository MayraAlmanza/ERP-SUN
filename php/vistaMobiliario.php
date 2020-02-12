<form action="" method="post">
	Nombre: <br>
	<input type="date" name="nombre" placeholder="Nombre:">
	<br>
  Descripcion: <br>
  <input type="text" name="descripcion" placeholder="Descripcion:"><br>
  Cantidad: <br>
  <input type="text" name="cantidad" placeholder="Cantidad:"> <br>
  <br>
   Nic: <br>
  <input type="text" name="nic" placeholder="Nic:"> <br>
  Tipo: <br>
  <input type="text" name="tipo" placeholder="tipo:"> <br>
  
	<input type="submit" name="alta" value="Guardar Mobiliario">
</form>
<?php 
       require_once("mobiliario.php");
       $obj = new mobiliario();

    if(isset($_POST["alta"])){
     $nombre = $_POST["nombre"];
      $descripcion = $_POST["descripcion"];
      $cantidad = $_POST["cantidad"];
        $nic = $_POST["nic"];
     $tipo = $_POST["tipo"];
   
     
    
      
       $obj->alta($nombre,$descripcion,$cantidad,$nic,$tipo);
       echo "<h2>Mobiliario registrado</h2>";
    }
 ?>
 <table>
 	<tr>
 		<th>Nombre</th>
    <th>Descripcion</th>
        <th>Cantidad</th>
 		<th>Tipo</th>
 		
    <th>Nic</th>


 	</tr>
 	<?php 
     $res = $obj->consulta();
     while ($fila = $res->fetch_assoc()) {
     	echo"<tr>";
     	echo"<td>".$fila["nombre"]."</td>";
      echo"<td>".$fila["descripcion"]."</td>";
      echo"<td>".$fila["cantidad"]."</td>";
      echo"<td>".$fila["nic"]."</td>";
      echo"<td>".$fila["tipo "]."</td>";
       
        echo "</tr>";
     }
 	 ?>
 </table>