<form action="" method="post">
	Fecha inicio: <br>
	<input type="date" name="fechainicio" placeholder="Fecha de inicio:">
	<br>
	Fecha final: <br>
  <input type="date" name="fechafin" placeholder="Fecha final:">
  <br>
  Total: <br>
  <input type="text" name="total" placeholder="Total:">
  <br>
	<input type="submit" name="alta" value="Guardar balance">
</form>
<?php 
       require_once("balance.php");
       $obj = new balance();

    if(isset($_POST["alta"])){
     $fechainicio  = $_POST["fechainicio"];
     $fechafin = $_POST["fechafin"];
     $total = $_POST["total"];
      
      
       $obj->alta($fechainicio,$fechafin,$total);
       echo "<h2>Balance registrado</h2>";
    }
       if(isset($_POST["Eliminar"])){
          echo "<script> var opcion = confirm('¿esta seguro que desea eliminar?');
          if(opcion===true){
            window.location.href = 'index.php?el=".$_POST["id"]."';
          } </script>";      
        }
        if(isset($_GET["el"])){
        $obj->baja($_GET["el"]);
        echo "<script>alert('Eliminado con exito'); window.location.href = 'index.php' </script>";
      }
 ?>
 <table>
 	<tr>
 		<th>Fecha inicio</th>
 		<th>Fecha fin</th>
    <th>Total </th>
    <th>Eliminar</th>
 		 	</tr>
 	<?php 
     $res = $obj->consulta();
     while ($fila = $res->fetch_assoc()) {
     	echo"<tr>";
     	echo"<td>".$fila["fechainicio"]."</td>";
        echo"<td>".$fila["fechafin"]."</td>";
        echo"<td>".$fila["total"]."</td>";
         ?>
       <td>
        <form action='' method="post">
            <input type="hidden" value="<?php  echo $fila['IDbalance'] ?>" name="id" >
            <input type="submit" name="Eliminar" value="Eliminar">
        </form>
      </td>
      <?php
        echo "</tr>";
     }
 	 ?>
 </table>