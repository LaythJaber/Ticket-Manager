

<!DOCTYPE html>
<html>
<head>
<title>Escalade</title>
<meta charset="utf-8">
<meta name="author" content="Layth Jaber">
<meta name="viewport" content="width=device-width , initial-scale=1">
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/bootstrap.min.css"> 
<link rel="stylesheet" href="css/bootstrap-theme.css">
<link rel="stylesheet" href="css/bootstrap-theme.min.css">
<script src="js/bootstrap.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.js"></script>
<script src="js/engine.js"></script>
<link href="jquery-ui.css" rel="stylesheet">
<link rel="stylesheet" href="jquery-ui.min.css">
<script src="external/jquery/jquery.js"></script>
<script src="jquery-ui.min.js"></script>

</head>

<style>
h1{ color:#f0ad4e;}
body{background-color:  #eee;}
</style>
<script>
$(document).ready(function() {
$('#datepicker').datepicker({
  dateFormat: 'yy-mm-dd        -:-:-'
});
  });

  
</script>
<body>
	
<div class="container">  
<form class="form-inline" action="modif_inc.php" method="POST" role="form">
   <legend><h1>Escalade</h1></legend>
  <?php 
  $toc=$_GET['toc'];
$bdd= new PDO('mysql:host=localhost;dbname=escalade;charset=utf8','root','orangeroot', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

$cr= $bdd->prepare('SELECT * from  incident where Toc= :t');
$cr->execute(array('t'=>$toc));

 $record= $cr->fetch();
 
 

 echo '
      <pre> 
      <strong>TOC :       </strong>'. $record['Toc'].'<br>
      <strong>Criticité : </strong>'. $record['Criticité'].'<br>
      <strong>Nature :       </strong>'. $record['Nature'].'<br>
      <strong>Impact : </strong>'. $record['Impact1'] .'    '.    $record['Impact2']    .'   '. $record['Impact3'].'<br>
      <strong>Zone :       </strong>'. $record['Zone'].'<br>
      <strong>Date de Debut : </strong>'. $record['Debut'].'<br>
      <strong>Date de Fin : </strong>'. $record['Fin'].'<br>
      <strong>Nombre de cellule : </strong>'. $record['NbCel'].'<br>
     
     </pre>';
$cr->closeCursor();
 ?>
 

  <?php echo ' <input type="hidden" name="toc" value="'. $toc .'"> ' ; ?>
   <div class="form-group"> <label for="datefin">Fin  </label> <input id="datepicker"  class="form-control" name="datefin"  type="date"></div>
   					


   		
         <br> <br>  
        <a href="index.php" target="_self"> <input type=button class="btn btn-warning" value="Back"></span></a>
        <button type="submit" class="btn btn-warning">Save</button>      
        <?php 
          $y='Delete.php?toc='. $toc .' ';
          $z='Ftech.php?toc='.$toc .' ';
          $n='Send_mail.php?toc='.$toc.' ';
        echo '<a href="'.$y.'" target="_self"><input type=button class="btn btn-warning" value="Delete"></a>'; 
        echo '   <a href="'.$z.'" target="_self"><input type=button class="btn btn-warning" value="FII"></a>';
        echo '     <a href="'.$n.'" target="_self"><input type=button class="btn btn-warning" value="Send Mail"></a>'; 
        ?>
        
        </form>
</div>




</body>
