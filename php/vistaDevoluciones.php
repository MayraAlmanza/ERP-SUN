<form action="" method="post">
	Fecha: <br>
	<input type="date" name="fecha" placeholder="Fecha:">
	<br>
	Cantidad: <br>
	<input type="text" name="cantidad" placeholder="Cantidad:"> <br>
	
	Descripcion: <br>
  <input type="text" name="descripcion" placeholder="Descripcion:">
  <br>
  IDproducto: <br>
  <input type="text" name="IDproducto" placeholder="IDproducto:"> <br>
  
	<input type="submit" name="alta" value="Guardar devolucion">
</form>
<?php 
       require_once("devoluciones.php");
       $obj = new devolucion();

    if(isset($_POST["alta"])){
     $fecha  = $_POST["fecha"];
     $cantidad = $_POST["cantidad"];
      $IDproducto = $_POST["IDproducto"];
      
       $obj->alta($fecha,$cantidad,$IDproducto);
       echo "<h2>Devolucion registrada</h2>";
    }
 ?>
 <table>
 	<tr>
 		<th>Fecha</th>
 		<th>Cantidad</th>
 		<th>IDproducto</th>
 	</tr>
 	<?php 
     $res = $obj->consulta();
     while ($fila = $res->fetch_assoc()) {
     	echo"<tr>";
     	echo"<td>".$fila["fecha"]."</td>";
       echo"<td>".$fila["cantidad"]."</td>";
        echo"<td>".$fila["IDproducto"]."</td>";
        echo "</tr>";
     }
 	 ?>
 </table>