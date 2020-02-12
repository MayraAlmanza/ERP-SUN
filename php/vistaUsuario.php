<form action="" method="post">
	Nombre: <br>
	<input type="text" name="nombre" placeholder="Nombre:">
	<br>
	Password: <br>
	<input type="password" name="password" placeholder="Password"> <br>
	Tipo: <br>
	<select name="tipo">
		<option value="1">Admin</option>
		<option value="2">Usuario</option>
	</select><br>
	<input type="submit" name="alta" value="Guardar usuario">
</form>
<?php 
       require_once("ususario.php");
       $obj = new usuario();

    if(isset($_POST["alta"])){
     $nombre  = $_POST["nombre"];
     $password = $_POST["password"];
      $tipo = $_POST["tipo"];
      
       $obj->alta($nombre,$tipo,$password);
       echo "<h2>Usuario registrado</h2>";
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
 		<th>Nombre</th>
 		<th>Password</th>
 		<th>Tipo</th>
    <th>Eliminar</th>
 	</tr>
 	<?php 
     $res = $obj->consulta();
     while ($fila = $res->fetch_assoc()) {
     	echo "<tr>";
     	echo "<td>".$fila["nombre"]."</td>";
        echo"<td>********</td>";
        echo"<td>".$fila["tipo"]."</td>";
       ?>
       <td>
        <form action='' method="post">
            <input type="hidden" value="<?php  echo $fila['IDusuario'] ?>" name="id" >
            <input type="submit" name="Eliminar" value="Eliminar">
        </form>
      </td>
      <?php
        echo "</tr>";
     }
 	 ?>
 </table>