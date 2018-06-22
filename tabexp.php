
<?php

error_reporting(E_ERROR | E_WARNING | E_PARSE);
$hostname_conexion_orange = "localhost";
$database_conexion_orange = "escalade";
$username_conexion_orange = "root";
$password_conexion_orange = "orangeroot";
$conexion_orange = mysql_pconnect($hostname_conexion_orange, $username_conexion_orange, $password_conexion_orange) or trigger_error(mysql_error(),E_USER_ERROR); 
mysql_select_db($database_conexion_orange, $conexion_orange);

$result = mysql_query("SELECT * from `incident` where 1") ;
$bdd= new PDO('mysql:host=localhost;dbname=escalade;charset=utf8','root','orangeroot', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta charset="utf-8">
<link rel="stylesheet" href="boot.min.css" >
    <script src="jq.js"></script>
    <script src="datatable.js"></script>
<script type="text/javascript">
	$(document).ready(function() {
	$('#tab2').hide();	
    $('#datatables').DataTable();
} );
function tableau()
{$('#tab2').show().tableExport({type:'excel',escape:'false'});
$('#tab2').show().hide();
	
}
 
</script>
</head>
<body>
<script type="text/javascript" src="jsexport/jspdf/libs/sprintf.js"></script>
<script type="text/javascript" src="jsexport/jspdf/jspdf.js"></script>
<script type="text/javascript" src="jsexport/jspdf/libs/base64.js"></script>
<script type="text/javascript" src="jsexport/tableExport.js"></script>
<script type="text/javascript" src="jsexport/jquery.base64.js"></script>
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/bootstrap.min.css"> 
<link rel="stylesheet" href="css/bootstrap-theme.css">
<link rel="stylesheet" href="css/bootstrap-theme.min.css">




<script src="js/bootstrap.js"></script>
<script src="js/bootstrap.min.js"></script>

							
<a  href="#" onclick="tableau()"> <img style="transform:translate(170px,18px)" src="icons/excel.png" width="24px"> </a>
							
						

          <table id="datatables" class="display" cellspacing="0" width="100%" >
                 <thead>
                         <tr>
                                  <th >OCEANE</th><th>Criticité</th><th>Nature</th><th>Impact</th><th>Zone</th><th>Date.deb</th><th>Date.fin</th><th>Escalade</th><th>FII</th>
                           
                           </tr>       
						   
                 </thead>
                 <tbody>
                   <?php
				      while ( $row = mysql_fetch_array($result))   {   
					  $dd1=$row['Debut'];
		$dd1 = substr("$dd1",0,-3);



$dd3=$row['Fin'];
$dd3=substr("$dd3",0,-3);  
					       ?>
                           <tr>
                                <td> <a href=index.php?toc=<?php echo $row['Toc']; ?> target="_top"> <?php echo utf8_encode($row['Toc'])?> </a> </td>
                                <td> <?php echo utf8_encode($row['Criticite'])?> </td>
                                <td> <?php echo utf8_encode($row['Nature'])?> </td>
                                <td> <?php echo utf8_encode($row['Impact'])?> </td>
								 <td> <?php echo utf8_encode($row['Zone'])?> </td>
                                <td> <?php echo utf8_encode($dd1) ?> </td>
                                <td> <?php echo utf8_encode($dd1)?> </td>

                             <?php $o=$row['Debut'];
	  

							$t=$row['Toc'];
	
       $dt = new DateTime($o);
       $dt->add(new DateInterval('PT2H'));
	   
	   
	   
	   $date1 = new DateTime("now");
	   $date1->add(new DateInterval('PT2H'));
	   
	   if ($row['Criticité'] <> 'Mineur')
	   {   
	   if( ($date1 > $dt) AND ($row['check1']==0) )
	   { 
         $cr20 =$bdd ->prepare('UPDATE incident SET check1=1  WHERE Toc=:tc');
         $cr20 ->execute( array('tc'=> $t ));
		 $cr20 ->closeCursor();
        }
		if( $date1 <$dt )
		{
		 $cr20 =$bdd ->prepare('UPDATE incident SET check1=0  WHERE Toc=:tc');
         $cr20 ->execute( array('tc'=> $t ));
		 $cr20 ->closeCursor();
			
		}
		else 
		$cr20 =$bdd ->prepare('UPDATE incident SET check1=0  WHERE Toc=:tc');	
		
	   }  
	   if( $row['check1']==1 )
	   { echo '<td><center><img src="red.jpg" width="20" height="20"></center></td>';
                          }
       else
	   { echo '<td></td>';	}	   
       
		if( $row['check2']==1 )
	   { echo '<td><center><img src="red.jpg" width="20" height="20"></center></td>';
                          }
       else
	   { echo '<td></td>';	}
	   
	    
                        ?>
                           
                           
                           </tr>                          
                         <?php
					  }
				     ?>
				  </tbody> 
              </table>
         
                 
</body>

<?php
echo 
	 "<table id='tab2'  >
<tr>
<thead>
<th >OCEANE</th><th>Criticité</th><th>Origine</th><th>Action chez</th><th>Noeud</th><th>Zone</th><th>Nature</th><th>Impact</th><th>2G</th><th>3G</th><th>4G</th><th>Voix</th><th>Data</th><th>Debut</th><th>Prevision</th><th>Fin</th><th>Famille</th><th>Sous Famille</th><th>Cause</th><th>Action Corrective</th>
</thead>
</tr>";
$bdd= new PDO('mysql:host=localhost;dbname=escalade;charset=utf8','root','orangeroot', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));



$cr =$bdd ->query('SELECT * FROM incident ORDER BY Toc');

while( $record= $cr->fetch() )
{  

 
      
       
       $a=$record['Criticite'];
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
	 
echo"
<tr><td>$b</td>
   <td> $a</td>
	<td>$c</td>
	<td>$d</td>
	<td>$e</td>
	<td>$f</td>
	<td>$g</td>
	<td>$h</td>
	<td> $i</td>
	<td> $j</td>
	<td>$k</td>
	<td> $l</td>
	<td> $m</td>
    <td>$n</td>
	<td>$p</td>
	<td>$o</td>	
	
	<td>$q</td>
	<td>$r</td>
	
    <td>$s</td>
	<td>$t</td></tr>";
	}
    echo "</table>";
?>
</html>
