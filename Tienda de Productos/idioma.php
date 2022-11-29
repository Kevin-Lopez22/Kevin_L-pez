<?php
session_start();

if(isset($_GET)){
    
    if(isset($_COOKIE["c_idioma"]) && $_GET["idiom"]==0){
        setcookie("c_idioma","en",0);
        header("Location: panelPrincipal.php");
    }
    
    if(isset($_COOKIE["c_idioma"]) && $_GET["idiom"]==1){
        setcookie("c_idioma","es",0);
        header("Location: panelPrincipal.php");
    }

    if(isset($_SESSION["s_idioma"]) && $_GET["idiom"]==0){
        $_SESSION["s_idioma"] = "en";
        header("Location: panelPrincipal.php");
    }

    if(isset($_SESSION["s_idioma"]) && $_GET["idiom"]==1){
        $_SESSION["s_idioma"] = "es";
        header("Location: panelPrincipal.php");
    }
}
header("Location: panelPrincipal.php");
?>