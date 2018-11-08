<?php session_start(); ?>

<?php require("mantenercookie.inc"); ?>
<?php require("redirec.inc"); ?>
<?php require("redirec4.inc"); ?>
<?php require("cabecera.inc"); ?>
<?php require("menu.inc"); ?>
<!-- El cuerpo --> 
<body> 

<?php require("logo.inc"); ?>



        <nav id="menuPrincipal">
            <ul>
                <li><a href="<?php echo $menu;?>"><span>&nbsp</span><span>FlicktriX</span></a></li>
                <li><a href="<?php echo $menu;?>"><span>&nbsp</span><span>FlicktriX</span></a></li>
            </ul>
        </nav>
                                

                        <section>
                        <div>
                        <article>
                        <h1 align="center"><u>VISTA PREVIA ÁLBUM</u></h1>

                            <h2><?php echo $_SESSION['tituloalbum'];?></h2>
                           <div align="center"><img src="album.jpg" width="100%" height="85%"></div>


                            
                            <br>
                            <br>
                            <footer>
                                Nombre: <?php echo $_SESSION['usuarioAlbum'];?>
                            <br>
                            <br>
                                Texto adicional: <?php echo $_SESSION['comentario'];?>
                            <br>
                            <br>
                                Color de la portada: <?php echo $_SESSION['color'];?>
                            <br>
                            <br>
                                Número de copias: <?php echo $_SESSION['copias'];?>
                            </footer>
                        </article>
                        <article>
                        <h1 align="center"><u>DATOS</u></h1>
                        El precio de la solicitud de imprimir el álbum: <strong><?php echo $_SESSION['tituloalbum'];?></strong> es <strong><u><?php echo $_SESSION['precio'];?></strong></u>
                        <br>
                        <br>
                        Su solicitud está siendo procesada.
                        <br>
                        <br>


                        <br>


                        </article>
                        </div>
                       
        </section>

  
  <?php require("pie.inc"); ?>


        
<p> 
</p> 
</body> 
</html>