<?php

include_once('database.php');

//recibo datos

$nombre=$_POST['nombre'];
$ci=$_POST['ci'];
$mail=$_POST['mail'];
$clave=$_POST['clave'];

$conectar=conn();
$sql="INSERT INTO `usuarios` (`nombre`, `cedula`, `mail`, `clave`) VALUES ('$nombre', '$ci', '$mail', '$clave')";
$result = mysqli_query($conectar , $sql) or trigger_error("Query Failed! SQL -Error: ". mysqli_error($conectar));

// PHP program to pop an alert
// message box on the screen
echo '<script>alert("Datos cargados")</script>';
// Display the alert box 


header("Location: index.php");
exit();


?>