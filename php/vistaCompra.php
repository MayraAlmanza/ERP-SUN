<form action="" method="post">
	Fecha: <br>
	<input type="date" name="fecha" placeholder="Fecha:">
	<br>
  Total: <br>
  <input type="text" name="total" placeholder="Total:">
  <br>
  
  Tipo de pago: <br>
  <input type="text" name="tipo_pago" placeholder="Tipo de pago:">
  <br>
  
  ID cliente: <br>
  <input type="text" name="IDcliente" placeholder="IDcliente:">
  <br>
  
	
	<input type="submit" name="alta" value="Guardar compra">
</form>
<?php 
       require_once("compra.php");
       $obj = new compra ();

    if(isset($_POST["alta"])){
     $fecha  = $_POST["fecha"];
     $total = $_POST["total"];  
      $tipo_pago = $_POST["tipo_pago"];
      $IDcliente = $_POST["IDcliente"];
      
       $obj->alta($fecha,$total,$tipo_pago,$IDcliente);
       echo "<h2>Compra registrada</h2>";
    }
 ?>
 <table>
 	<tr>
 		<th>Fecha</th>
 		<th>Total</th>
 		<th>Tipo de pago</th>
    <th>IDcliente</th>
 	</tr>
 	<?php 
     $res = $obj->consulta();
     while ($fila = $res->fetch_assoc()) {
     	echo"<tr>";
     	echo"<td>".$fila["fecha"]."</td>";
        echo"<td>".$fila["total"]."</td>";
          echo"<td>".$fila["tipo_pago"]."</td>";
            echo"<td>".$fila["IDcliente"]."</td>";
      
        echo "</tr>";
     }
 	 ?>
 </table>