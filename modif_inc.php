<?php
$tt=$_POST['toc'];

$bdd= new PDO('mysql:host=localhost;dbname=escalade;charset=utf8','root','orangeroot', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

$cr =$bdd ->prepare('UPDATE incident SET Fin= :fin WHERE Toc=:t');
$cr ->execute(array(
'fin'=> $_POST['datefin'],
't'=>$tt 


	));
$cr->closeCursor();
 $x='index.php?toc='. $tt .' ';
 header('Location: '.$x.'');
?>