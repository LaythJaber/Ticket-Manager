<?php 
session_start();


$_SESSION = array();
session_destroy();


setcookie('user','' );
setcookie('password','');

header('Location: http://localhost');

?>