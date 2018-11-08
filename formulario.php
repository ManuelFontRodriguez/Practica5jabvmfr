<?php session_start(); ?>

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
                                
                
                <form id="formPedirAlbum" action="auxi2.php" method="POST">
                <br>

                <label>Nombre: <input type="text" name="nombre" id="nombre" placeholder="Pon tu nombre y apellidos" autofocus="" required="" maxlength="200" ></label><br><br></input>
                <label>Título Álbum: <input type="text" name="titalbum" id="titalbum" placeholder="Para la cubierta del álbum"  required="" maxlength="200" ></label><br><br></input>
                <label>Texto adicional: <textarea name="comentario" rows="5" cols="40" placeholder="Dedicatoria o descripción del álbum" maxlength="4000"></textarea></label><br><br></input>
                <label>Email: <input type="email" name="emailaddress" placeholder="Pon tu email" required="" maxlength="200"></label><br><br></input>
                <label>Dirección envío: <input type="text" name="direnvio" id="nombre" placeholder="Calle, número, piso, puerta, código postal, localidad, provincia, país" required="" maxlength="200" ></label></input>
                <label>Código postal: <input type="number" name="cp" id="cp" placeholder="Código postal" required="" maxlength="10"></label><br><br></input>
                <label>País: <input type="text" name="nombre" id="pais" placeholder="País" required="" maxlength="200"></label></input>
                <label>Provincia: <input type="text" name="provincia" id="provincia" placeholder="Provincia" required="" maxlength="200"></label></input>
                <label>Localidad: <input type="text" name="localidad" id="localidad" placeholder="Localidad" required="" maxlength="200"></label><br><br></input>
                <label>Color de la portada: <input type="color" name="color" id="color" required="" ></label><br><br></input>
                <label>Número de copias: <input type="number" name="copias" id="copias" required=""min="1" value="1" ></label><br><br></input>
                <label>Resolución de las fotos: <input type="number" name="resolucion" id="resolucion"min="150" value="150"max="900" ></label><br><br></input>
                <label for="album" required="">Álbum de PI:</label>	
                <select name="select"id="album">
                        <option value="value1">xxx</option> 
                        <option value="value2" selected>xxx</option>
                        <option value="value3">xxx</option>
                  </select><br><br>
                  
                <label>Fecha de recepción: <input type="date" name="nombre" id="fecharec" required="" min="<?php echo date('Y-n-j'); ?>" value="<?php echo date('Y-n-j'); ?>" ></label>  Fecha aproximada de recepción <br><br></input>
                ¿Impresión a color?
                <label><input type="radio" name="c" value="co"> Color</label></input>
                <label><input type="radio" name="c" value="bc"> Blanco y negro</label></input>
                <br><br>

                <p id="bot"><input name="submit" type="submit" id="boton" value="Solicitar" class="boton"/></input></p>

                </form>

                <table id="tablaTarifas">
                    <caption>Tarifas</caption>
                    <tr>
                        <th>Concepto</th>
                        <th>Tarifa</th>
                    </tr>
                    <tr>
                        <th>&lt; 5 p&aacute;ginas</th>
                        <th>0.10&euro; por p&aacute;g.</th>
                    </tr>
                    <tr>
                        <th>entre 5 y 10 p&aacute;gs.</th>
                        <th>0.08&euro; por p&aacute;g.</th>
                    </tr>
                    <tr>
                        <th>&gt; 11 p&aacute;ginas</th>
                        <th>0.07&euro; por p&aacute;g.</th>
                    </tr>
                    <tr>
                        <th>Blanco y negro</th>
                        <th>0&euro;</th>
                    </tr>
                    <tr>
                        <th>Color</th>
                        <th>0.05&euro; por foto</th>
                    </tr>
                    <tr>
                        <th>Resoluci&oacute; &gt; 300 dpi</th>
                        <th>0.02&euro; por foto</th>
                    </tr>

                </table>

  
  <?php require("pie.inc"); ?>


        
<p> 
</p> 
</body> 
</html>



