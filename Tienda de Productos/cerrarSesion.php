<?php
session_start();
session_destroy();
setcookie("c_control","",0);

header("Location: index.php");
?>