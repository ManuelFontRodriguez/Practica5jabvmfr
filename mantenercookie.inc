<?php

//MANTENER SESION ABIERTA
if (isset($_COOKIE['Usuario'])and !isset($_SESSION['usuario'])) {
    
if(!isset($_COOKIE['UltimaVisita'])) 
 { 
    $_SESSION['ultima'] = 'Es tu primera visita'; 
   setcookie('UltimaVisita', date(DATE_COOKIE), time() + 365 * 24 * 60 * 60); 
 } 
 else 
 { 

$_SESSION['ultima'] = 'Tú última conexión fue el '.$_COOKIE['UltimaVisita']; 
   setcookie('UltimaVisita', date(DATE_COOKIE), time() + 365 * 24 * 60 * 60); 
  
 } 
    $_SESSION['usuario']=$_COOKIE['Usuario'];
    $_SESSION['Contraseña']=$_COOKIE['Contraseña'];
    header("Location: principallogged.php");

}

?>