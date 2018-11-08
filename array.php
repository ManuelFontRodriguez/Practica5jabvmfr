<?php

global $wppa;//variables globales, 2 arrays, wppa con las variables que el usuario pone, creedeciales los nombres que le quieras poner a las cookies
$wppa = array($_POST["usuario"] ,$_POST["password"]);
global $Creedenciales;
$Creedenciales = array( "Usuario" , "Contraseña");

print_r ($wppa)."\n" ;//imprime el array



if(isset($_POST['enviar'])){//isset se hace una vez el usuario le de a enviar
    if(empty($_POST['usuario']) || empty($_POST['password']))//empty comprueba que no haya un campo vacio, como el bernabeu ahora mismo
    echo '<br>Debes llenar todos los datos';
    elseif($_POST['usuario']=="test" and $_POST['password']=="test"){//ejemplo que he puesto, si esta bien pa dentro
    $_SESSION['usuario']=$_POST['usuario'];
    $_SESSION['password']=$_POST['password'];
    
    echo '<br>Te logiaste perra, tu usuario es '.$_SESSION['usuario'];
    session_start();
    header("Location: principallogged.php");

}
    elseif($_POST['usuario']!="test" or $_POST['password']!="test"){//no cumple el ejemplo, pa tu casa
    echo '<br>Creedenciales incorrectos tolai';



}
}
if(isset($_POST['enviar'])){
if(isset($_POST['cbox1']) and  $_POST['cbox1'] == '1') {
if($wppa[0]=="test" && $wppa[1]=="test"){// comprueba que el usuario se pueda meter, se puede meter arriba, pero esta aqui pa que se vea bienif(isset($_POST['enviar']))
//crea las cookies, 3 parametros ( nombre de la cookie,  valor de la cookie, tiempo de expiracion de la cookie)
setcookie( $Creedenciales[0], $wppa[0] , time() + (86400 * 90+3600), "/"); // 86400 = 1 day
setcookie( $Creedenciales[1], $wppa[1] , time() + (86400 * 90+3600), "/"); // 86400 = 1 day
printf("<br>  tus cookies  se han guardado desgraciao"); 
}
}
else{
printf("<br>  tus cookies NO se han guardado desgraciao"); 
  
}
}


//MANTENER SESION ABIERTA
if (isset($_COOKIE[$Creedenciales[0]])) {
echo "hola";
    header("Location: principallogged.php");

}








?>
<html>
<td rowspan="2"><form name="login" method="post" action="array.php">
<table width="250" border="0" align="center" cellpadding="0" cellspacing="0">
<tr>

<td>Usuario:</td>
<td><input name="usuario" type="text" id="usuario"></td>
</tr>
<tr>
<td>Password:</td>
<td><input name="password" type="password" id="password"></td>
</tr>



<td><label><input type="checkbox" name="cbox1" value="1">REcuerdame como si fuera esta la primera veeez:</label><br>
</td>
</tr>
<tr align="center">
<td colspan="2"><input name="enviar" type="submit" id="enviar" value="Enviar"></td>
</tr>
</table>
</form></td>
</html>