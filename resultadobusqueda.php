<?php require("cabecera.inc"); ?>

<?php require("menu.inc"); ?>

<?php require("redirec2.inc"); ?>


 <?php
   $titu = $_POST['titu'];
   $finic = $_POST['finicio'];
   $ffinal = $_POST['ffinal'];
   $pais = $_POST['pais'];   
   $finicF = date("d/m/Y", strtotime($finic));
   $ffinalF = date("d/m/Y", strtotime($ffinal));

  


?>
<!-- El cuerpo --> 
<body> 
    <header>
            <a title="logo" href="<?php echo $menu;?>"><img id="logo" src="camera.png" alt="logo" /></a>
            <br>
        <br>

    </header>

        
        

        <nav id="menuPrincipal">
            <ul>
                <li><a href="<?php echo $menu;?>"><span>&nbsp</span><span>FlicktriX</span></a></li> <!--ARREGLAR ESTA MIERDA-->
                <li><a href="<?php echo $menu;?>"><span></span>&nbsp<span>FlicktriX</span></a></li>
            </ul>
       </nav>         

      
<br>
<li>Título: <strong><?php echo $titu;?></strong></li>
<li>Fecha inicio búsqueda: <strong><?php echo $finicF;?></strong></li>
<li>Fecha final búsqueda: <strong><?php echo $ffinalF;?></strong></li>
<li>País de búsqueda: <strong><?php echo $pais;?></strong></li>
<br>

                <section>
                <div>
                        <article>
                            <h2>IMAGEN</h2>
                           <a title="foto" href="ultimafoto.html"> <div align="center"><img src="foto.jpg" width="100%" height="85%"></div></a>
                            
                            <h3 style="text-align:center"><a href="ultimafoto.html">Foto</a></h3>

                            
                            <br>
                            <br>
                            <footer>
                                Fecha: 21-08-1996
                                    
                            <br>
                            <br>
                                País: España
                            </footer>
                        </article>
                        <article>
                                <h2>IMAGEN</h2>
                           <a title="foto" href="ultimafoto.html"> <div align="center"><img src="foto.jpg" width="100%" height="85%"></div></a>
                             <h3 style="text-align:center"><a href="ultimafoto.html">Foto</a></h3>
   
                                
                                <br>
                                <br>
                                <footer>
                                    Fecha: 21-08-1996
                                        
                                <br>
                                <br>
                                    País: España
                                </footer>
                            </article>
                            <article>
                                    <h2>IMAGEN</h2>
                           <a title="foto" href="ultimafoto.html"> <div align="center"><img src="foto.jpg" width="100%" height="85%"></div></a>
                                    <h3 style="text-align:center"><a href="ultimafoto.html">Foto</a></h3>

                                    
                                    <br>
                                    <br>
                                    <footer>
                                        Fecha: 21-08-1996
                                            
                                    <br>
                                    <br>
                                        País: España
                                    </footer>
                                </article>
                                </div>
</section>

<?php require("pie.inc"); ?>

<p> 
</p> 
</body> 
</html>