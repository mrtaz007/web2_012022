<?php
  session_start();
  if( !isset( $_POST["nombre"] ) or !isset( $_POST["apellido"] ) ) {
    header( "location: inicio.html" );
  }
  else {
    $_SESSION["nombre"] = $_POST["nombre"];
	$_SESSION["apellido"] = $_POST["apellido"];
	$_SESSION["carrito"] = array();
	header( "location: carrito.php" );
  }
?>