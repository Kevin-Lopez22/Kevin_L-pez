<?php
$guardarPreferencias = "hol";
$apoyo = 1;

if(isset($_POST["chk_settings"])){
    $guardarPreferencias=$_POST["chk_settings"];
}else{
    $guardarPreferencias="";
}



if($guardarPreferencias != ""){
    setcookie("c_nombre",$_POST["nombre"], 0);
    setcookie("c_clave",$_POST["clave"], 0);
    setcookie("c_recordar",$guardarPreferencias, 0);
    setcookie("c_idioma","es",0);
    setcookie("c_control",1,0);
}

if($guardarPreferencias == "" && !isset($_COOKIE["c_control"])){
    session_start();
    setcookie("c_nombre","", 0);
    setcookie("c_clave","", 0);
    setcookie("c_recordar","", 0);
    setcookie("c_idioma","",0);
    if (isset($_POST["nombre"]) && isset($_POST["clave"])) {
        $_SESSION["s_nombre"] = $_POST["nombre"];
        $_SESSION["s_clave"] = $_POST["clave"];
        $_SESSION["s_idioma"] = "es";
    }
}

    


if(isset($_COOKIE["c_idioma"]) && $_COOKIE["c_idioma"] == "es"){
    $file = "categorias_es.txt"; 
    $fp = fopen($file, "r"); 
    $contents = fread($fp, filesize($file));
}

if(isset($_COOKIE["c_idioma"]) && $_COOKIE["c_idioma"] == "en"){
    $file = "categorias_en.txt"; 
    $fp = fopen($file, "r"); 
    $contents = fread($fp, filesize($file));
}

if(isset($_SESSION["s_idioma"]) && $_SESSION["s_idioma"] == "es"){
    $file = "categorias_es.txt"; 
    $fp = fopen($file, "r"); 
    $contents = fread($fp, filesize($file));
}

if(isset($_SESSION["s_idioma"]) && $_SESSION["s_idioma"] == "en"){
    $file = "categorias_en.txt"; 
    $fp = fopen($file, "r"); 
    $contents = fread($fp, filesize($file));
}


?>

<html>
    <head>

    </head>

    <body>
        <h1>PANEL PRINCIPAL</h1>
        <h3>Bienvenido usuario: <?php if (isset($_COOKIE["c_nombre"]) && $_COOKIE["c_nombre"] != ""){
                                        echo $_COOKIE["c_nombre"]; } 
                                        if (isset($_SESSION["s_nombre"]) && $_SESSION["s_nombre"] != ""){
                                            echo $_SESSION["s_nombre"];}?></h3>
        <a href="idioma.php?idiom=1">ES (Español)</a> |
        <a href="idioma.php?idiom=0">En (English)</a><br>
        <a href="cerrarSesion.php">Cerrar Sesion</a> 
        <h2>Lista de Productos</h2>
        <?php echo $contents;?>
    </body>
</html>