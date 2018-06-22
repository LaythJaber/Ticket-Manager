<?php
$tt=$_POST['toc'];

$bdd= new PDO('mysql:host=localhost;dbname=escalade;charset=utf8','root','orangeroot', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

$cr =$bdd ->prepare('UPDATE incident SET Type= :ty , Sf =:sf , Cause= :cs , ac=:AC WHERE Toc=:t');
$cr ->execute(array(
'ty'=> $_POST['type'],
'sf'=> $_POST['sf'],
'cs'=> $_POST['cause'],
't'=>$tt, 
'AC'=>$_POST['ac']

	));
$cr->closeCursor();
 $x='Ftech.php?toc='. $tt .' ';
 header('Location: '.$x.'');
?>