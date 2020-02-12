<form action="" method="post">
	Nombre: <br>
	<input type="text" name="nombre" placeholder="Nombre:">
	<br>
	Tipo: <br>
	<input type="text" name="tipo" placeholder="tipo:"> <br>
  Descripcion: <br>
  <input type="text" name="descripcion" placeholder="Descripcion:">
  <br>
  Precio: <br>
  <input type="text" name="precio" placeholder="Precio:"> <br>
  Stock: <br>
  <input type="text" name="stock" placeholder="stock:"> <br>
  Existencia: <br>
  <input type="text" name="existencia" placeholder="Existencia:"> <br>
  
  
	
	<input type="submit" name="alta" value="Guardar Materia prima">
</form>
<?php 
       require_once("materiaprima.php");
       $obj = new materiaprima();

    if(isset($_POST["alta"])){
     $nombre = $_POST["nombre"];
     $tipo = $_POST["tipo"];
    $descripcion = $_POST["descripcion"];
     $precio = $_POST["precio"];
      $stock = $_POST["stock"];
       $existencia = $_POST["existencia"];
      
       $obj->alta($nombre,$tipo,$descripcion,$precio,$stock,$existencia);
       echo "<h2>Manteriaprima registrada</h2>";
    }
 ?>
 <table>
 	<tr>
 		<th>Nombre</th>
 		<th>Tipo</th>
 		<th>Descripcion</th>
    <th>Precio</th>
    <th>Stock</th>
    <th>Existencia</th>
 	</tr>
 	<?php 
     $res = $obj->consulta();
     while ($fila = $res->fetch_assoc()) {
     	echo"<tr>";
     	echo"<td>".$fila["nombre"]."</td>";
      echo"<td>".$fila["tipo"]."</td>";
      echo"<td>".$fila["descripcion"]."</td>";
      echo"<td>".$fila["stok"]."</td>";
      echo"<td>".$fila["existencia"]."</td>";
       
        echo "</tr>";
     }
 	 ?>
 </table>