<?php 
  // Borra todas las variables de sesión 
  $_SESSION['tituloalbum']="";
  $_SESSION['comentario']="";
  $_SESSION['usuarioAlbum']="";
  $_SESSION['color']="";
  $_SESSION['copias']="";
  $_SESSION['precio']="";


  // Finalmente, destruye la sesión 
  header("Location: formulario.php");

?>