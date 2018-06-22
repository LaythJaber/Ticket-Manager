
<?php
session_start();
 	date_default_timezone_set('Europe/Paris');
	
if (isset($_POST['new'])) {

try{
$bdd2= new PDO('mysql:host=localhost;dbname=escalade;charset=utf8','root','orangeroot', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

$a=$_POST['toc2'];

$cr2 =$bdd2 ->prepare('SELECT * FROM incident where Toc= :t');
$cr2 ->execute(array( 't'=>$a));
$record6= $cr2->fetch();
if(  is_null($record6['Toc']) )
{
$cr =$bdd2 ->prepare('INSERT INTO incident VALUES( :tc,:Crit,:or ,:ch,:no ,:zone,:nat,:imp,:Cel2,:Cel3,:Cel4,:Cv,:Dat,:deb,:pr,:fin,:ty,:sf,:cs,:ac,0,1 )');
$cr ->execute(array(
'Crit'=> $_POST['p1'],
'tc'=>$a,
'or'=> $_POST['p3'],
'ch'=>$_POST['p4'],
'no'=> $_POST['p5'],
'zone'=>$_POST['p6'],
'nat'=> $_POST['p7'],
'imp'=>$_POST['p8'],
'Cel2'=> $_POST['p9'],
'Cel3'=>$_POST['p10'],
'Cel4'=> $_POST['p11'],
'Cv'=>$_POST['p12'],
'Dat'=> $_POST['p13'],
'deb'=>$_POST['p14'],
'fin'=> $_POST['p15'],
'ty'=>$_POST['p16'],
'sf'=> $_POST['p17'],
'cs'=>$_POST['p18'],
'ac'=>$_POST['p19'],
'pr'=>$_POST['p20']
	));
$cr->closeCursor();
$cr3 =$bdd2 ->prepare('INSERT INTO  historique (toc,user,type) VALUES(:toc3 ,:us,:tp)');
$cr3->execute(array(
'toc3'=>$a,
'us'=> $_SESSION['user'],
'tp'=> "Creation" ));
$cr3->closeCursor();

 file_put_contents("log.txt",$a. " ; "  .$_SESSION['user']. " ; " .date("[j/m/y H:i:s]")."  ; Creation de l'escalade   \r\n".file_get_contents("log.txt"));
header('Location: index.php?toc='.$a.'');
}
else{
	
		 $tt=$_POST['toc2'];

$bdd= new PDO('mysql:host=localhost;dbname=escalade;charset=utf8','root','orangeroot', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

$cr4 =$bdd ->prepare('UPDATE incident SET Criticite=:Crit ,Toc=:tc,Origine=:or ,Chez=:ch,Noeud=:no ,Zone=:zone,Nature=:nat,Impact=:imp,Cel2g=:Cel2,Cel3g=:Cel3,Cel4g=:Cel4,Cvs=:Cv,Data=:Dat,Debut=:deb,Fin=:fin,Type=:ty,Sf=:sf,Cause=:cs,ac=:Ac,Prevision=:pr  WHERE Toc=:tc');
$cr4 ->execute(array(
'Crit'=> $_POST['p1'],
'tc'=>$tt,
'or'=> $_POST['p3'],
'ch'=>$_POST['p4'],
'no'=> $_POST['p5'],
'zone'=>$_POST['p6'],
'nat'=> $_POST['p7'],
'imp'=>$_POST['p8'],
'Cel2'=> $_POST['p9'],
'Cel3'=>$_POST['p10'],
'Cel4'=> $_POST['p11'],
'Cv'=>$_POST['p12'],
'Dat'=> $_POST['p13'],
'deb'=>$_POST['p14'],
'fin'=> $_POST['p15'],
'ty'=>$_POST['p16'],
'sf'=> $_POST['p17'],
'cs'=>$_POST['p18'],
'Ac'=>$_POST['p19'],
'pr'=>$_POST['p20']
 


	));
$cr4->closeCursor();
$cr3 =$bdd2 ->prepare('INSERT INTO  historique (toc,user,type) VALUES(:toc3 ,:us,:tp)');
$cr3->execute(array(
'toc3'=>$a,
'us'=> $_SESSION['user'],
'tp'=> "Modification" ));
$cr3->closeCursor();
 file_put_contents("log.txt",$a. " ; "  .$_SESSION['user']. " ; " .date("[j/m/y H:i:s]")."  ; Modification de l'escalade   \r\n".file_get_contents("log.txt"));
 $x='index.php?toc='. $tt .' ';
 header('Location: '.$x.'');
	
	}
$cr2->closeCursor();

}
catch(Exception $e)
{
	die('Erreur : ' .$e->getMessage());
}
}
 
 elseif (isset($_POST['update'])) {
	 
	 
	
 header('Location:index.php?toc=0 ');
	 
 }
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
	 
 


?>