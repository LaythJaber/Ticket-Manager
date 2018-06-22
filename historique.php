<!DOCTYPE html>
<html>
<head>
<title>Historique</title>
<meta name="author" content="Layth Jaber">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width , initial-scale=1">
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/bootstrap.min.css"> 
<link rel="stylesheet" href="css/bootstrap-theme.css">
<link rel="stylesheet" href="css/bootstrap-theme.min.css">





<script src="js/bootstrap.js"></script>
<script src="js/bootstrap.min.js"></script>
	
</head>

<div class="container">


<table class="table table-hover">
	<thead>
		<tr>
			<th >OCEANE</th><th>User</th><th>Date d'action</th><th>Type d'action</th>


		</tr>
	</thead>
	<tbody>
		<tr>
		<?php

$toc1=$_GET['toc'];
$bdd= new PDO('mysql:host=localhost;dbname=escalade;charset=utf8','root','orangeroot', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));



$cr= $bdd->prepare('SELECT * from  historique where toc= :t ORDER BY  dateac DESC');
$cr->execute(array('t'=>$toc1));

while( $record= $cr->fetch() )
{           $t=htmlspecialchars($record['toc']);
        echo '<tr ><td><a href=index.php?toc='.$t.'>'. $t .'</a> 
       </td><td>'. htmlspecialchars($record['user']).
       '</td><td>'. htmlspecialchars($record['dateac']).
       '</td><td>'. htmlspecialchars($record['type']).
       '</tr>';




}
$cr->closeCursor();


 

?>
			
		</tr>
	</tbody>
</table>
</div>

</body>

</html>