<?php

if(isset($_POST['submit'])){
    if(isset($_POST['sure']) and  $_POST['sure'] == 'y') {
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