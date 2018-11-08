<?php session_start(); ?>

<?php

if(isset($_POST['submit'])){
    if(isset($_POST['sure']) and  $_POST['sure'] == $_SESSION['usuario']) {
        if(!isset($_COOKIE['UltimaVisita'])) { 
    $_SESSION['ultima'] = 'Es tu primera visita'; 
   setcookie('UltimaVisita', date(DATE_COOKIE), time() + 365 * 24 * 60 * 60); 
 } 
 else{
    $_SESSION['ultima'] = 'Es tu primera visita'; 
    setcookie('UltimaVisita', date(DATE_COOKIE), time() + 365 * 24 * 60 * 60); 
 }

    header("Location: principallogged.php");
    
    }
    else{
        $_SESSION = array(); 
        // Borra la cookie que almacena la sesión 
        if(isset($_COOKIE[session_name()])) { 
          setcookie(session_name(), '', time() - 42000, '/'); 
        } 
        // Finalmente, destruye la sesión 
        session_destroy(); 
      
    header("Location: registro.php");
   
    }
    }

?>