<?php session_start(); ?>

<?php require("mantenercookie.inc"); ?>

<?php require("redirec.inc"); ?>
<?php require("cabecera.inc"); ?>
<?php require("menu.inc"); ?>
<!-- El cuerpo --> 
<body> 

<?php require("barranav.inc"); ?>

        <br>
                
        <br>
        <br>
        <br>
        <div id="menuPerfil">
            <a id="Datos" title="misdatos" href=""> Mis datos</a>
            <a id="Albumes" title="misalbumes" href=""> Mis álbumes</a>
            <a id="crearAlbumes" title="micrearalbum" href="creaalbum.php"> Crear Álbum</a>
            <a id="solicitarAlbumes" title="misolicitaralbum" href="formulario.php"> Solicitar Álbum</a>
        </div>
        <br>
        <br>
        <p id="prueba" align="left" ><?php echo "<strong>Te has logueado como: <u>".$_SESSION['usuario']."</strong></u>"; ?></p> 

        <?php require("footer.inc"); ?>



        
<p> 
</p> 
</body> 
</html>