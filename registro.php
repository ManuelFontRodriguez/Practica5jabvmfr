<?php session_start(); ?>


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
                
            <form id="formRegistro" action="usuario.php" method="POST" >
                <br>
                <label>Nombre: <input type="text" name="nombre" id="nombre" placeholder="Pon tu nombre y apellidos" required ><br><br></input></label>
                <label>Contrase&ntilde;a: <input type="password" name="pwd" id="pwd" required pattern="[a-zA-Z0-9_-]*" title="Por favor, los caracteres introducidos no son validos"  placeholder="Pon tu contraseña" maxlength="20" minlength="5"><br><br></input></label>
                <label>Confirma la contrase&ntilde;a: <input  type="password" name="pwd2" id = "pwd2"required pattern="[a-zA-Z0-9_-]*" title="Por favor, los caracteres introducidos no son validos"placeholder="Repite tu contraseña" maxlength="20" minlength="5"><br><br></input></label>
                <label>Email: <input type="email" name="email" id="email" placeholder="Pon tu email" required><br><br></input></label>
                <label>Fecha de nacimiento: <input type="date" name="fnac" id="fnac" placeholder="Pon tu fecha de nacimiento" required><br><br></input></label>
                <label>País de residencia: <input type="text" name="pais" id="pais"placeholder="Pon tu país de residencia" required ><br><br></input></label>
                <label>Ciudad: <input type="text" name="ciudad" id="ciudad"placeholder="Pon tu ciudad de residencia" required ><br><br></input></label>
                <label>Sexo:</label>
                <label><input type="radio" name="hm" value="h"> Hombre</input></label>
                <label><input type="radio" name="hm" value="m"> Mujer</input></label>
                <br><br>
                
                <label for="uploadPhoto" id="labelupload">
                        Subir IMAGEN: 
                   
                    <input type="file" id="uploadPhoto" accept="image/*" ></input> </label>
                <br/><br/><br/>
                <p id="bot"><input name="submit" type="submit" id="boton" value="Registrarse" class="boton"/></input></p>

                </form>



    <?php require("footer.inc"); ?>




</body> 
</html>