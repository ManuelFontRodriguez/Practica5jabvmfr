<?php require("cabecera.inc"); ?>
<?php require("menu.inc"); ?>

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
                                
                
                
        <form id="buscador" action="resultadobusqueda.php" method="POST" >
            <br>
            <p><label>Titulo: <input type="text" name="titu" id="titu" placeholder="Pon el título a buscar"required ></label></p>
            <p><label>Fecha inicio: <input type="date" name="finicio" id="finicio" placeholder="Pon la fecha inicio"required></label></p>
            <p><label>Fecha fin: <input type="date" name="ffinal" id="ffinal"placeholder="Pon la fecha fin" required></label></p>
            <p><label>País <input type="text" name="pais" id="pais"placeholder="Pon el país de búsqueda" required ></label></p>
            <br>
            <p id="bot"><input name="submit" type="submit" id="boton" value="Búsqueda" class="boton"/></p> 
        </form>

<?php require("footer.inc"); ?>


</body> 
</html>