<?php
//require_once "/.php";
require_once "Controle/controle.php";
$username=$_GET["username"];
$res = checkUsernameValidity($username);
echo $res;

 

?>