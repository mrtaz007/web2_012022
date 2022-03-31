<?php
  session_start();
?>
<body bgcolor="#D2EBF7" style="font-family: Tahoma;">
<?php
  echo "<h2>Usuario: " . $_SESSION["nombre"] . " " . $_SESSION["apellido"] . "</h2>";
  if (count($_SESSION["carrito"]) == 0) {
    echo "<h3>Carrito Vacio</h3>";
  }
  else {
    echo "<table width='400' border='1'>";
	foreach( $_SESSION["carrito"] as $producto => $cantidad ) {
	  echo "<tr>";
	  echo "<td>$producto</td>";
	  echo "<td>$cantidad</td>";
	  echo "</tr>";
	}
	echo "</table>";
  }
?>
<a href="agregar.php">Agregar producto</a>
<a href="cerrar.php">Cerrar Sesión</a>
</body>