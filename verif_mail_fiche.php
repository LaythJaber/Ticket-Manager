
<!DOCTYPE html>
<html>

<meta name="author" content="Layth Jaber">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width , initial-scale=1">
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/bootstrap.min.css"> 
<link rel="stylesheet" href="css/bootstrap-theme.css">
<link rel="stylesheet" href="css/bootstrap-theme.min.css">

<link href="jquery-ui.css" rel="stylesheet">
<link rel="stylesheet" href="jquery-ui.min.css">
<script src="external/jquery/jquery.js"></script>
<script src="jquery-ui.min.js"></script>



<script src="js/bootstrap.js"></script>
<script src="js/bootstrap.min.js"></script>



<body>
<?php
  $toc=$_GET['toc'];
$bdd= new PDO('mysql:host=localhost;dbname=escalade;charset=utf8','root','orangeroot', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

$cr= $bdd->prepare('SELECT * from  incident where Toc= :t');
$cr->execute(array('t'=>$toc));

 $record= $cr->fetch();

 
      
       
       $a=$record['Criticité'];
	   $b=$record['Toc'];
       $c=$record['Origine'];
       $d=$record['Chez'] ;
       $e=$record['Noeud'] ;
	   
       $f=$record['Zone'];
       $g=$record['Nature'];
       $h=$record['Impact'];
       $i=$record['Cel2g'];
       $j=$record['Cel3g'];
	   $k=$record['Cel4g'];
	   $l=$record['Cvs'];
	   $m=$record['Data'];
	   
	   $n=$record['Debut'];
       $o=$record['Fin'];
       $p=$record['Prevision'];
	   $q=$record['Type'];
	   
	   $r=$record['Sf'];
       $s=$record['Cause'];
       $t=$record['ac'];

	   $n=substr("$n",0,-3); 
     $o=substr("$o",0,-3); 
	 $p=substr("$p",0,-3); 
$test="<!DOCTYPE html>
<html>
<head>


	
</head>
<style>
h1{ color:#ff8c00;}
body{background-color:  #eee;}
.a{
	border: 1px solid white;
	
	background: black;
}
td{border: 1px solid black;}
	
.b{ border: 1px solid white;}	

}

</style>

<body>

<center><div style='width:600px ; height:650px ;border:2px solid #999999; '>
<h1><strong>FICHE IDENTITE INCIDENT</strong></h1>

<table   style='overflow:hidden;table-layout:fixed; width:400px ; height:430px ;'>


	

	<tr><td class='a'><font color='#ff8c00'>OCEANE</font></td><td colspan='3'>$b</td></tr>
	<tr><td class='a'><font color='#ff8c00'>Criticite</font></td><td colspan='3'> $a</td></tr>
	<tr><td class='a'><font color='#ff8c00'>Origine</font></td><td colspan='3'>$c</td></tr>
	<tr><td class='a'><font color='#ff8c00'>Action Chez</font></td><td colspan='3'>$d</td></tr>
	<tr><td class='a'><font color='#ff8c00'>Noeud</font></td><td colspan='3'>$e</td></tr>
	<tr><td class='a'><font color='#ff8c00'>Zone</font></td><td colspan='3'>$f</td></tr>
	<tr><td class='a'><font color='#ff8c00'>Nature</font></td><td colspan='3'>$g</td></tr>
	<tr><td class='a'><font color='#ff8c00'>Impact</font></td><td colspan='3'>$h</td></tr>
	<tr><td class='a'><font color='#ff8c00'>Cells </font></td><td>2G : $i</td><td>3G : $j</td><td>4G :$k</td></tr>
	<tr><td class='a'><font color='#ff8c00'>Client </font></td><td colspan='2'>Voix: $l</td><td>Data: $m</td></tr>
    <tr><td class='a'><font color='#ff8c00'>Date debut</font></td><td colspan='3'>$n</td></tr>
	
	<tr><td class='a'><font color='#ff8c00'>Date Fin</font></td><td colspan='3'>$p</td></tr>	
	<tr ><td class='b' height='30px'></td></tr>
	<tr><td class='a'><font color='#ff8c00'>Famille</font></td><td colspan='3'>$q</td></tr>
	<tr><td class='a'><font color='#ff8c00'>Sous Famille</font></td><td colspan='3'>$r</td></tr>
	<tr ><td class='b' height='30px'></td></tr>
    <tr><td class='a'><font color='#ff8c00'>Cause</font></td><td colspan='3'>$s</td></tr>
	<tr><td class='a' ><font color='#ff8c00'>Action Corrective</font></td><td colspan='3'>$t</td></tr>
</table>

</div></center>



</body> ";
	   echo $test;
echo'
<center>
<a href="Send_mail_fiche.php?toc='.$toc.'" target="_self"> <input type="button" class="btn btn-warning" value="Envoyer"></a>
 </center>
';
?>
</body>
</html>