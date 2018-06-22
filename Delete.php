<?php
session_start();
	date_default_timezone_set('Europe/Paris');
$tt=$_GET['toc'];
file_put_contents("log.txt",$tt. " ; "  .$_SESSION['user']. " ; " .date("[j/m/y H:i:s]")."  ; Suppression de l'escalade   \r\n".file_get_contents("log.txt"));

$bdd= new PDO('mysql:host=localhost;dbname=escalade;charset=utf8','root','orangeroot', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

$cr =$bdd ->prepare('DELETE FROM incident  WHERE Toc=:t');
$cr ->execute(array('t'=>$tt ));
$cr->closeCursor();

  
 header('Location: index.php?toc=0');
?>