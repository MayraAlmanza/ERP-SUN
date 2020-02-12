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
  
  
	
	<input type="submit" name="alta" value="Guardar Producto">
</form>
<?php 
       require_once("materiaprima.php");
       $obj = new materiaprima();

    if(isset($_POST["alta"])){
     $nombre = $_POST["nombre"];
     $tipo = $_POST["tipo"];
    $descripcion = $_POST["descripcion"];
     $preciov = $_POST["preciov"];
      $precioc = $_POST["precioc"];
       $existencia = $_POST["cantidad"];
       $cantmin = $_POST["cantmin"];
     $cantmax = $_POST["cantmax"];
      $categoria = $_POST["categoria"];
       
      
       $obj->alta($nombre,$tipo,$descripcion,$preciov,$precioc,$cantidad,$cantmin,$cantmax,$categoria);
       echo "<h2>Producto registrado</h2>";
    }
 ?>
 <table>
 	<tr>
 		<th>Nombre</th>
 		<th>Descripcion</th>
 		<th>Precio venta</th>
    <th>Precio compra</th>
    <th>Cantidad</th>
    <th>Cantidad minima</th>
    <th>Cantidad maxima</th>
    <th>Categoria</th>
    
 	</tr>
 	<?php 
     $res = $obj->consulta();
     while ($fila = $res->fetch_assoc()) {
     	echo"<tr>";
     	echo"<td>".$fila["nombre"]."</td>";
      echo"<td>".$fila["descripcion"]."</td>";
      echo"<td>".$fila["preciov"]."</td>";
      echo"<td>".$fila["precioc"]."</td>";
      echo"<td>".$fila["cantidad"]."</td>";
       echo"<td>".$fila["cantmin"]."</td>";
      echo"<td>".$fila["cantmax"]."</td>";
      echo"<td>".$fila["categoria"]."</td>";
       
        echo "</tr>";
     }
 	 ?>
 </table>