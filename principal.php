<?php session_start(); ?>

<?php require("mantenercookie.inc"); ?>

<?php require("cabecera.inc"); ?>

<?php
 
 if(isset($_SESSION['usuario'])){
    
    header("Location: principallogged.php");


   }

?>

<?php

global $wppa;//variables globales, 2 arrays, wppa con las variables que el usuario pone, creedeciales los nombres que le quieras poner a las cookies
global $Creedenciales;
$Creedenciales = array( "Usuario" , "Contraseña");

print_r ($wppa)."\n" ;//imprime el array


if(isset($_POST['enviar'])){//isset se hace una vez el usuario le de a enviar
    if(empty($_POST['usuario']) || empty($_POST['password']))//empty comprueba que no haya un campo vacio, como el bernabeu ahora mismo
    echo '<br>Debes llenar todos los datos';
    elseif(($_POST['usuario']=="teste" and $_POST['password']=="teste") ||($_POST['usuario']=="teste1" and $_POST['password']=="teste")){//ejemplo que he puesto, si esta bien pa dentro
    
    $wppa = array($_POST["usuario"] ,$_POST["password"]);
    $_SESSION['usuario']=$_POST['usuario'];
    $_SESSION['password']=$_POST['password'];
    


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
    header("Location: principallogged.php");


}
    elseif($_POST['usuario']!="teste" or $_POST['password']!="teste"){//no cumple el ejemplo, pa tu casa
    
    
    //echo '<br>Creedenciales incorrectos tolai';



}
}
if(isset($_POST['enviar'])){
if(isset($_POST['cbox1']) and  $_POST['cbox1'] == '1') {
if($wppa[0]=="teste" && $wppa[1]=="teste"||$wppa[0]=="teste1" && $wppa[1]=="teste"){// comprueba que el usuario se pueda meter, se puede meter arriba, pero esta aqui pa que se vea bienif(isset($_POST['enviar']))
//crea las cookies, 3 parametros ( nombre de la cookie,  valor de la cookie, tiempo de expiracion de la cookie)
setcookie( $Creedenciales[0], $wppa[0] , time() + (86400 * 90+3600), "/"); // 86400 = 1 day
setcookie( $Creedenciales[1], $wppa[1] , time() + (86400 * 90+3600), "/"); // 86400 = 1 day
}
}

}



?>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- El cuerpo --> 
<body> 
    <header>
    
     <a title="FlicktriX - Página de inicio" href="principal.php"><img id="logo" src="camera.png" alt="logo" /></a>


    </header>
    <nav id="menuIconos">
        <input type="checkbox" id="ckbmenu">
  
        <ul>

            <li><label for="ckbmenu">&equiv;</label></li>
            <li id="inicio"><a href="principal.php"><span class="glyphicon glyphicon-home"></span>&nbsp<span>Inicio</span></a></li>
            <li id="busqueda"><a href="busqueda.php"><span class="glyphicon glyphicon-screenshot"></span>&nbsp<span>Buscar</span></a></li>
            <li id="registro"><a href="registro.php"><span class="glyphicon glyphicon-plus"></span>&nbsp<span>Registro</span></a></li>

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

    if(!empty($_POST['usuario']) and empty(!$_POST['password']))
    if($_POST['usuario']!="teste" or $_POST['password']!="teste"){//no cumple el ejemplo, pa tu casa

    echo "<br>Credenciales incorrectos<br>";
 }
    ?>           
    <br>
    <form id="loginPrincipal" action="principal.php" method="POST" >
    <label>Nombre: <input type="text" name="usuario" id="usuario" required ></label>
    <label>Contrase&ntilde;a: <input type="password" name="password" id="password" required pattern="[a-zA-Z0-9_-]*" title="Por favor, los caracteres introducidos no son validos" maxlength="20" minlength="5"></label></input>
    <button type="submit" class="boton" name="enviar" id="submit">Login</button><br>
    <label>REcuerdame como si fuera esta la primera veeez:  <input type="checkbox" name="cbox1" value="1"></label><br>
    </form>


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

