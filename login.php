<?php 
$usuario = $_POST ["usuario"];
$contrasenia = $_POST ["pass"];

$ckusuario = "admin";
$ckpass = 12345;

if ($usuario==$ckusuario && $contrasenia==$ckpass) {
    header ("location:https://www.google.com");
} else {
    header ("location:https://www.dropbox.com/error");
}


?>