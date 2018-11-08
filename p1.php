<?php 
session_start(); 
$_SESSION['usuario'] = 'pepito'; 
?> 
<html> 
<head> 
<title>Prueba de sesión</title> 
</head> 
<body> 
<a href='p2.php'>Ir a la segunda página</a> 
</body> 
</html>