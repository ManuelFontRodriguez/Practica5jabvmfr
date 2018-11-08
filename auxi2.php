<?php
   $copias = $_POST['copias'];
   $color = $_POST['c'];
   $res = $_POST['resolucion'];


   $tarifap=0;
   $tarifac=0;
   $tarifares=0;
   $paginas=
   $numerof=11;
   $tarifatotal=0;

   if($paginas<5){
       $tarifap=0.10;
   }
   else if($paginas>=5 && $paginas<11){
       $tarifap=0.08;
   }
   else if($paginas>10){
       $tarifap=0.07;
    }

    if($color=="co"){
        $tarifac=0.05;
    }
    if($res>300){
        $tarifares=0.02;
    }

    $tarifatotal=($tarifap*$paginas)+($tarifac*$numerof)+($tarifares*$numerof);

    $message="El precio de tu solicitud es de ";
    $message.=$tarifatotal;
    $message.=" euros. ¿Estás interesado en la solicitud del álbum?";
    

  /* echo "<script>javascript:
    var ask = confirm('".$message."');
    if(ask==true)
    {
        window.location = 'respuestaalbum.php';  
    }
    else
    {
        window.location = 'formulario.html';    
    }
    </script>";
    */


    
    
   echo $paginas, $color, $res;
   echo "<br>";
   echo $tarifap,$tarifac,$tarifares;
   echo "<br>";
   echo $tarifatotal;




    
?>