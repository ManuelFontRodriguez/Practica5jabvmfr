<?php session_start(); ?>


<?php require("redirec.inc"); ?>
<?php require("mantenercookie.inc"); ?>
<?php require("cabecera.inc"); ?>



<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- El cuerpo --> 
<body> 
    <header>
    
     <a title="FlicktriX - Página de inicio" href="principallogged.php"><img id="logo" src="camera.png" alt="logo" /></a>


    </header>
    <nav id="menuIconos">
        <input type="checkbox" id="ckbmenu">
  
        <ul>

            <li><label for="ckbmenu">&equiv;</label></li>
            <li id="inicio"><a href="principallogged.php"><span class="glyphicon glyphicon-home"></span>&nbsp<span>Inicio</span></a></li>
            <li id="busqueda"><a href="busqueda.php"><span class="glyphicon glyphicon-screenshot"></span>&nbsp<span>Buscar</span></a></li>
            <li id="registrado"><a href="registrado.php"><span class="glyphicon glyphicon-user"></span>&nbsp<span>Mis datos</span></a></li>
            <li id="logout"><a href="sdestroy.php"><span class="glyphicon glyphicon-off"></span>&nbsp<span>Logout</span></a></li>

<!-- El cuerpo 
            <li><a href="principal.html"><span>&nbsp</span><span>FlicktriX</span></a></li>
            <li><a href="principal.html"><span></span>&nbsp<span>FlicktriX</span></a></li>
            <li><a href="registrado.html"><span></span>&nbsp<span>Usuario registrado</span></a></li>
            <li><a href="busqueda.html"><span ></span>&nbsp<span>Buscar</span></a></li>
            <li><a href="registro.html"><span></span>&nbsp<span>Registro</span></a></li>
            --> 
         </ul>
    </nav>            

 <?php
 
 echo 'Te haz loguedo como '.$_SESSION['usuario'].'<br>';
 echo $_SESSION['ultima'];




?>
    <br>
                <section>
                    <h2 class="tituloSec">COMPARTE TUS FOTOS CON TUS AMIGOS.</h2>

                <div>
                <article>
                                
                            <a title="foto" href="ultimafoto.php"> <div align="center"><img id="ultsfotos" src="foto.jpg"></div></a>
                            <p style="text-align:center">Descripción</p>
                            <br>
                            <footer>
                                <div style="text-align:center"><a href=""><pie>Autor</a></pie></div>
                            </footer>
                </article>
                                
                <article>
                                
                            <a title="foto" href="ultimafoto.php"> <div align="center"><img src="foto.jpg"></div></a>
                            <p style="text-align:center">Descripción</p>
                            <br>
                            <footer>
                                <div style="text-align:center"><a href=""><pie>Autor</a></pie></div>
                            </footer>
                </article>
                               <article>
                                
                            <a title="foto" href="ultimafoto.php"> <div align="center"><img src="foto.jpg"></div></a>
                            <p style="text-align:center">Descripción</p>
                            <br>
                            <footer>
                                <div style="text-align:center"><a href=""><pie>Autor</a></pie></div>
                            </footer>
                </article>              
                  <article>
                                
                            <a title="foto" href="ultimafoto.php"> <div align="center"><img src="foto.jpg"></div></a>
                            <p style="text-align:center">Descripción</p>
                            <br>
                            <footer>
                                <div style="text-align:center"><a href=""><pie>Autor</a></pie></div>
                            </footer>
                </article>               
                 <article>
                                
                            <a title="foto" href="ultimafoto.php"> <div align="center"><img src="foto.jpg"></div></a>
                            <p style="text-align:center">Descripción</p>
                            <br>
                            <footer>
                                <div style="text-align:center"><a href=""><pie>Autor</a></pie></div>
                            </footer>
                </article>
                </div>
                </section>

<?php require("pie.inc"); ?>
   
<p> 
</p> 
</body> 
</html>