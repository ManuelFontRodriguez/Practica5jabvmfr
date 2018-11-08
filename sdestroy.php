<?php 
  // Borra todas las variables de sesión 
  $_SESSION = array(); 
  // Borra la cookie que almacena la sesión 
  if(isset($_COOKIE[session_name()])) { 
    setcookie(session_name(), '', time() - 42000, '/'); 
    setcookie('Usuario', '', time() - (86400 * 90+3600), '/'); 
    setcookie('Contraseña', '', time() - (86400 * 90+3600), '/'); 
  } 
  // Finalmente, destruye la sesión 
  session_destroy(); 
  header("Location: principal.php");

?>