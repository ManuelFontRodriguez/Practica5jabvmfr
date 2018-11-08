<?php 
$tiempo=time();
 if(!isset($_COOKIE['UltimaVisita'])) 
 { 
    $_SESSION['ultima'] = 'es tu primera visita'; 
   setcookie('UltimaVisita', $tiempo, time() + 365 * 24 * 60 * 60); 
 } 
 else 
 { 

$_SESSION['ultima'] = 'Tú última conexión fue hace '.$_COOKIE['UltimaVisita']; 
   setcookie('UltimaVisita', $tiempo, time() + 365 * 24 * 60 * 60); 
  
 }
 
 

 echo 'Tú última conexión fue el'.$_SESSION['ultima'];

?> 