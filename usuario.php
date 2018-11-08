<?php session_start(); ?>

<?php require("mantenercookie.inc"); ?>
<?php require("redirec5.inc"); ?>

<?php require("cabecera.inc"); ?>
<?php require("menu.inc"); ?>
<?php //require("redirec2.inc");

//HACEER?>

<?php


   $user = $_POST['nombre'];
   $password = $_POST['pwd'];
   $password2 = $_POST['pwd2'];
   $email = $_POST['email'];
   $fnac = $_POST['fnac'];
   $fnacF = date("d/m/Y", strtotime($fnac));
   $pais = $_POST['pais'];
   $ciudad = $_POST['ciudad'];
   $sexo = $_POST['hm'];



   if ($password !=$password2) {
       
    echo"<script type=\"text/javascript\">alert('LAS CONTRASEÑAS DEBEN COINCIDIR'); window.location='registro.php';</script>";  
 
    //header("Location: registro.php");

   }


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
                <li><a href="<?php echo $menu;?>"><span>&nbsp</span><span>FlicktriX</span></a></li>
                <li><a href="<?php echo $menu;?>"><span></span>&nbsp<span>FlicktriX</span></a></li>
            </ul>
        </nav>
                


<br>
<li>Usuario: <strong><?php echo $user;?></strong></li>
<li>Contraseña1: <strong><?php echo $password;?></strong></li>
<li>Contraseña2: <strong><?php echo $password2;?></strong></li>
<li>Email: <strong><?php echo $email;?></strong></li>
<li>Fnac: <strong><?php echo $fnac;?></strong></li>
<li>País: <strong><?php echo $pais;?></strong></li>
<li>Ciudad: <strong><?php echo $ciudad;?></strong></li>
<li>Sexo: <strong><?php echo $sexo;?></strong></li>
<br>
<form id="formRegistro2" action="auxi.php" method="POST" >
                <br>
                
                <label>Estos son tus datos, ¿SON CORRECTOS? <br> Si aceptas, se confirmará el registro, sino volverás a hacerlo.<br><br></label>
                <label><input type="radio" name="sure" value="<?php echo $_SESSION['usuario']=$user;?>"> SÍ</label>
                <label><input type="radio" name="sure" value="n"> NO</label>
                <br><br>
                
  
                
                <p id="bot"><input name="submit" type="submit" id="boton" value="CONFIRMAR" class="boton"/></p>

                </form>









    <?php require("footer.inc"); ?>




</body> 
</html>

