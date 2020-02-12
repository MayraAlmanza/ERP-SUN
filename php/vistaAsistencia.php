<form action="" method="post">
	Fecha: <br>
	<input type="date" name="fecha" placeholder="Fecha:">
	<br>
	ID empleado: <br>
  <input type="text" name="IDempleado" placeholder="ID empleado:">
  <br>
  Hora: <br>
  <input type="time" name="hora" placeholder="Hora:">
  <br>
	<input type="submit" name="alta" value="Asistencia guardada">
</form>
<?php 
       require_once("asistencia.php");
       $obj = new asistencia();

    if(isset($_POST["alta"])){
    
     $fecha = $_POST["fecha"];
      $IDempleado = $_POST["IDempleado"];
      $hora = $_POST["hora"];
      
       $obj->alta($fecha,$IDempleado,$hora);
       echo "<h2>Asistencia registrada</h2>";
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
 		<th>Fecha</th>
 		<th>IDempleado</th>
 		<th>hora</th>
    <th>Eliminar</th>
 	</tr>
 	<?php 
     $res = $obj->consulta();
     while ($fila = $res->fetch_assoc()) {
     	echo"<tr>";
      echo"<td>".$fila["fecha"]."</td>";
      echo"<td>".$fila["IDempleado"]."</td>";
      echo"<td>".$fila["hora"]."</td>";
     ?>
       <td>
        <form action='' method="post">
            <input type="hidden" value="<?php  echo $fila['IDasistencia'] ?>" name="id" >
            <input type="submit" name="Eliminar" value="Eliminar">
        </form>
      </td>
      <?php
      echo "</tr>";
     }
 	 ?>
 </table>