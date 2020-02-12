<form action="" method="post">
	ID materia prima: <br>
	<input type="text" name="IDmateriaprima" placeholder="ID materia prima:">
	<br>
	<form action="" method="post">
  ID compra: <br>
  <input type="text" name="IDcompra" placeholder="ID compra:">
  <br>
  <form action="" method="post">
  Cantidad: <br>
  <input type="text" name="cantidad" placeholder="Cantidad:">
  <br>
	<input type="submit" name="alta" value="Guardar detalle de compra">
</form>
<?php 
       require_once("detalle_compra.php");
       $obj = new detalle_compra ();

    if(isset($_POST["alta"])){
     $IDmateriaprima= $_POST["nombre"];
     $IDcompra= $_POST["IDcompra"];
      $cantidad = $_POST["cantidad"];
      
       $obj->alta($IDmateriaprima,$IDcompra,$cantidad);
       echo "<h2>Detalles de compra registrados </h2>";
    }
 ?>
 <table>
 	<tr>
 		<th>IDmateriaprima<th>
 		<th>IDcompra<th>
 		<th>cantidad<th>
 	</tr>
 	<?php 
     $res = $obj->consulta();
     while ($fila = $res->fetch_assoc()) {
     	echo"<tr>";
     	echo"<td>".$fila["IDmateriaprima"]."</td>";
      echo"<td>".$fila["IDcompra"]."</td>";
      echo"<td>".$fila["cantidad"]."</td>";
     
       
        echo "</tr>";
     }
 	 ?>
 </table>