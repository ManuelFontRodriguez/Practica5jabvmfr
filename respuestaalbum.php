<?php session_start(); ?>

<?php require("mantenercookie.inc"); ?>
<?php require("redirec.inc"); ?>
<?php require("redirec3.inc"); ?>
<?php require("cabecera.inc"); ?>
<?php require("menu.inc"); ?>

<!-- El cuerpo --> 
<body> 

<?php require("logo.inc"); ?>

<?php

   $nombre = $_POST['nombre'];
   $album = $_POST['titalbum'];
   $comentario = $_POST['comentario'];
   $email = $_POST['email'];
   $direnvio = $_POST['direnvio'];
   $cp = $_POST['cp'];
   $pais = $_POST['pais'];
   $provincia = $_POST['provincia'];
   $localidad = $_POST['localidad'];
   $color = $_POST['color'];
   $copias = $_POST['copias'];
   $res = $_POST['resolucion'];
   $alb = $_POST['selectalb'];
   $frec = $_POST['frec'];
   $frecF = date("d/m/Y", strtotime($frec));
   $colorimp = $_POST['c'];


?>

<?php

$copias = $_POST['copias'];
$colorimp = $_POST['c'];
$res = $_POST['resolucion'];


$tarifap=0;
$tarifac=0;
$tarifares=0;
$paginas=11;
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

 if($colorimp=="A color"){
     $tarifac=0.05;
 }
 if($res>300){
     $tarifares=0.02;
 }

 $tarifatotal=(($tarifap*$paginas)+($tarifac*$numerof)+($tarifares*$numerof))*$copias;

 $message="El precio de tu solicitud es de ";
 $message.=$tarifatotal;
 $message.=" euros. ¿Estás interesado en la solicitud del álbum?";
 
 
?>

        <nav id="menuPrincipal">
            <ul>
                <li><a href="<?php echo $menu;?>"><span>&nbsp</span><span>FlicktriX</span></a></li>
                <li><a href="<?php echo $menu;?>"><span>&nbsp</span><span>FlicktriX</span></a></li>
            </ul>
        </nav>
                                
        <section>
                <div>
                <article>
                        <h1 align="center"><u>DATOS</u></h1>

                            <li>Nombre: <strong><?php echo $nombre;?></strong></li>
                            <li>Album: <strong><?php echo $album;?></strong></li>
                            <li>Comentario: <strong><?php echo $comentario;?></strong></li>
                            <li>Email: <strong><?php echo $email;?></strong></li>
                            <li>Dirección de envío: <strong><?php echo $direnvio;?></strong></li>
                            <li>Código postal: <strong><?php echo $cp;?></strong></li>
                            <li>País: <strong><?php echo $pais;?></strong></li>
                            <li>Provincia: <strong><?php echo $provincia;?></strong></li>
                            <li>Localidad: <strong><?php echo $localidad;?></strong></li>
                            <li>Color de la portada: <strong><?php echo $color;?></strong></li>
                            <li>Copias: <strong><?php echo $copias;?></strong></li>
                            <li>Resolución: <strong><?php echo $res;?></strong></li>
                            <li>Albúm: <strong><?php echo $alb;?></strong></li>
                            <li>Fecha de recepción: <strong><?php echo $frecF;?></strong></li>
                            <li>Color de impresión: <strong><?php echo $colorimp;?></strong></li>

                        </article>
                        
                        <article>
                        <h1 align="center"><u>VISTA PREVIA ÁLBUM</u></h1>

                            <h2><?php echo $_SESSION['tituloalbum']=$album;?></h2>
                           <div align="center"><img src="album.jpg" width="100%" height="85%"></div>


                            
                            <br>
                            <br>
                            <footer>
                                Nombre: <?php echo $_SESSION['usuarioAlbum']=$nombre;?>
                            <br>
                            <br>
                                Texto adicional: <?php echo $_SESSION['comentario']=$comentario;?>
                            <br>
                            <br>
                                Color de la portada: <?php echo $_SESSION['color']=$color;?>
                            <br>
                            <br>
                                Número de copias: <?php echo $_SESSION['copias']=$copias;?>
                            </footer>
                        </article>
                        <article>
                        <h1 align="center"><u>DATOS</u></h1>
                        El precio de la solicitud de imprimir el álbum: <strong><?php echo $album;?></strong> es <strong><u><?php echo $_SESSION['precio']=$tarifatotal;?></strong></u>
                        <br>
                        <br>
                        ¿Estás seguro de que deseas solicitar el álbum?
                        <br>
                        <br>

                            <form id="loginPrincipal" action="albumfinal.php" method="POST" >
                                <button aling="center" type="submit" class="boton" name="enviar" id="ALBUM">CONFIRMAR</button><br>
                            </form>
                            <br>
                            
                            <form id="loginPrincipal" action="repetirsol.php" method="POST" >
                                <button aling="center" type="submit" class="boton" name="enviar" id="ALBUM">REPETIR</button><br>
                            </form>

                        <br>


                        </article>
                        </div>
                       
        </section>

  
  <?php require("pie.inc"); ?>


        
<p> 
</p> 
</body> 
</html>



