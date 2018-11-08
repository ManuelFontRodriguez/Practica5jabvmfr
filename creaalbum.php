<?php session_start(); ?>

<?php require("mantenercookie.inc"); ?>

<?php require("redirec.inc"); ?>
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

 <form id="formCreaAlbum" action="" method="">
        <br>
        <label id="nomAlbum">T&iacute;tulo:</label> <input type="text" name="titulo" id="tituloAlbum" placeholder="Nombre del albúm" autofocus="" required="" maxlength="200" ><br><br></input>
        <label id="descAlbum">Descripci&oacute;n: <textarea name="descripcion" rows="5" cols="40" placeholder="Descripción del albúm" maxlength="4000"></textarea></label><br><br></input>
        <p id="botonAlbum"><input name="submit" type="submit" id="botonCreaAlbum" value="Crear" class="boton"/></input></p>
    </form>


        <?php require("footer.inc"); ?>



        
<p> 
</p> 
</body> 
</html>