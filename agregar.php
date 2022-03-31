<?php
session_start();
if( !isset( $_POST["clave"] ) ) {
?>
<body bgcolor="#D2EBF7" style="font-family: Tahoma;">
<?php echo "<h2>Usuario: " . $_SESSION["nombre"] . " " . $_SESSION["apellido"] . "</h2>"; ?>
<form name="form1" method="post" action="agregar.php">
  <input type="hidden" name="clave" value="123456">
  <table width="200">
  <tr>
    <td>Producto:</td>
    <td><input type="text" name="producto" size="30" maxlength="30"></td>
  </tr>
  <tr>
    <td>Cantidad:</td>
    <td><input type="text" name="cantidad" size="3" maxlength="3"></td>
  </tr>
  <tr>
    <td colspan="2" align="center">
    <input type="submit" name="Submit" value="Enviar">
    </td>
  </tr>
</table>
</form>
</body>
<?php
}
else {
  $producto = $_POST["producto"];
  $cantidad = $_POST["cantidad"];
  $_SESSION["carrito"][$producto] = $cantidad;
  header( "location: carrito.php" );
}
?>
  
  
  