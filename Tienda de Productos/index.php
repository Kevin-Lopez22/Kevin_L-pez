<?php
$nombre = "";
$clave = "";
$recordar = false;

if(isset($_COOKIE["c_recordar"])&& $_COOKIE["c_recordar"]!=""){
    $recordar = true;
    $nombre=isset($_COOKIE["c_nombre"])?$_COOKIE["c_nombre"]:"";
    $clave=isset($_COOKIE["c_clave"])?$_COOKIE["c_clave"]:"";
}

?>

<!DOCTYPE html>
<html>
    <head></head>
    <body>
        <h1>LOGIN </h1>
        <form method = "POST" action="panelPrincipal.php">
            <fieldset>
                Usuario: <br>
                <input type="text" name="nombre" value="<?php echo $nombre; ?>" /><br>
                Clave:<br>
                <input type="password" name="clave" value="<?php echo $clave; ?>" /><br>
                <input type="checkbox" name="chk_settings" <?php echo($recordar)?"checked":"";?>/> Recordame<br>
                <br>
                <input type="submit" value="Enviar"> 
            </fieldset>    
        </form>
    </body>
</html>