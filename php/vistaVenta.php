<form action="" method="post">
	Fecha: <br>
	<input type="date" name="fecha" placeholder="Fecha:">
	<br>
	IDcliente: <br>
	<input type="text" name="IDcliente" placeholder="IDcliente:"> <br>
  Total: <br>
  <input type="text" name="total" placeholder="Total:">
  <br>
  Tipo de pago: <br>
  <input type="text" name="tipo_pago" placeholder="Tipo de pago:"> <br>
 
	
	<input type="submit" name="alta" value="Guardar venta">
</form>
<?php 
       require_once("venta.php");
       $obj = new venta();

    if(isset($_POST["alta"])){
     $fecha = $_POST["fecha"];
     $IDcliente= $_POST["IDcliente"];
    $total = $_POST["total"];
     $tipo_pago = $_POST["tipo_pago"];
      
       $obj->alta($fecha,$IDcliente,$total,$tipo_pago);
       echo "<h2>Venta registrada</h2>";
    }
 ?>
 <table>
 	<tr>
 		<th>Fecha</th>
 		<th>IDcliente</th>
 		<th>Total</th>
    <th>Tipo de pago</th>
   
 	</tr>
 	<?php 
     $res = $obj->consulta();
     while ($fila = $res->fetch_assoc()) {
     	echo"<tr>";
     	echo"<td>".$fila["fecha"]."</td>";
      echo"<td>".$fila["IDcliente"]."</td>";
      echo"<td>".$fila["total"]."</td>";
       echo"<td>".$fila["tipo_pago"]."</td>";
     
        echo "</tr>";
     }
 	 ?>
 </table>