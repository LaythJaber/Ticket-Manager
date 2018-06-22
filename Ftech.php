<!DOCTYPE html>
<html>
<head>
<title>Fiche technique</title>
<meta charset="utf-8">
<meta name="author" content="Layth Jaber">
<meta name="viewport" content="width=device-width , initial-scale=1">
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/bootstrap.min.css"> 
<link rel="stylesheet" href="css/bootstrap-theme.css">
<link rel="stylesheet" href="css/bootstrap-theme.min.css">
<link rel="stylesheet" href="jquery-ui-1.12.1.custom/jquery-ui.min.css">
<script src="jquery-ui-1.12.1.custom/jquery-ui.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.js"></script>
<script src="js/engine.js"></script>
</head>


<script> 
$(document).ready(function() {
	
	
	
     $('.test').hide();
	 
    $('.l2').hide();
    $('.l3').hide();
    $('.l4').hide();
    $('.l5').hide();
    $('.l6').hide(); 
    $('#another2').hide();
    $('select[name="type"]').change(function() { 
	
    var valeur = $(this).val(); // valeur sélectionnée
     
        if(valeur != '') { // si non vide
            if(valeur == 'RADIO') { 
                $('.l1').show();
    $('#another').hide();
    $('.l2').hide();
    $('.l3').hide();
    $('.l4').hide();
    $('.l5').hide();
    $('.l6').hide(); 

            } else if(valeur =='TRANS')
               { $('.l2').show();           
            
    $('.l1').hide();
    $('.l3').hide();
    $('.l4').hide();
    $('.l5').hide();
    $('.l6').hide(); 
            }
         else if(valeur =='ENV_TECH')
               { $('.l3').show(); 

    $('.l2').hide();
    $('.l1').hide();
    $('.l4').hide();
    $('.l5').hide();
    $('.l6').hide();           
            }
             else if(valeur =='OP NON MAITRISEE')
               { $('.l4').show();  

    $('.l2').hide();
    $('.l3').hide();
    $('.l1').hide();
    $('.l5').hide();
    $('.l6').hide();          
            }
             else if(valeur =='AUTRE')
               { $('.l5').show(); 
    
    $('.l2').hide();
    $('.l3').hide();
    $('.l4').hide();
    $('.l1').hide();
    $('.l6').hide();           
            
			}
             else if(valeur =='TUN_0119_w11')
               { $('.l6').show(); 

    $('.l2').hide();
    $('.l3').hide();
    $('.l4').hide();
    $('.l5').hide();
    $('.l1').hide();           
            }









        }
    });
 
  
});
</script> 
<style>
h1{ color:#f0ad4e;}
body{background-color:  #eee;}
</style>

<body>
	
<div class="container">  
<form class="form-inline" action="modif_fiche.php" method="POST" role="form">
   <legend><h1>FII</h1></legend>
  
 <?php 
  $toc=$_GET['toc'];
$bdd= new PDO('mysql:host=localhost;dbname=escalade;charset=utf8','root','orangeroot', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

$cr= $bdd->prepare('SELECT * from  incident where Toc= :t');
$cr->execute(array('t'=>$toc));

 $record= $cr->fetch(); 
 $TYPE= $record['Type'];
 $SF=  $record['Sf'];
 $CAUSE= $record['Cause'];
 $AC= $record['ac']; 

 echo ' <input type="hidden" name="toc" value="'. $toc .'">  
   <div class="form-group"> <label for="type">Famille </label> 
    </div>

<div class="form-group">
            
              <select class="form-control" id="type" name="type">
              <option selected="" class="test">'. $TYPE .'</option>
              <option>RADIO</option>
              <option>TRANS</option>
              <option>ENV_TECH</option>
              <option>OP NON MAITRISEE</option>
              <option>TUN_0119_w11</option>
              <option>AUTRE</option>
      </select></div>



         <br> <br> 
    <div class="form-group"> <label for="sf">Sous Famille </label> </div> 
<div class="form-group">
            
              <select class="form-control" id="sf" name="sf">
              <option selected="" class="test">'. $SF .'</option>
              
			  <option class=l1 >Antenne</option>
              <option class=l1>BBU</option>
              <option class=l1>BSC</option>
              <option class=l1>Cablage</option>
              <option class=l1>Conditions Meteo</option>
              <option class=l1>E1_Radio</option>
              <option class=l1>Energie</option>
              <option class=l1>Fibre</option>
              <option class=l1>GTMU</option>
              <option class=l1>LAN_Radio</option>
              <option class=l1>NPMU</option>
              <option class=l1>PSU</option>
              <option class=l1>RNC</option>
              <option class=l1>RRU</option>
              <option class=l1>SFP</option>
              <option class=l1>VSWR</option>
              <option class=l1>WBBP</option>
              <option class=l1>WMPT</option>
              <option class=l1>Interference</option>
              
              <option class=l1>LBBP</option>
              <option class=l1>UMPT</option>
              <option class=l2>AntenneFH</option>
              <option class=l2>Busage</option>
              <option class=l2>Cablage</option>
              <option class=l2>CableIF</option>
              <option class=l2>Carte CTRL/IF/RRA</option>
              <option class=l2>Conditions Meteo</option>
              <option class=l2>El_Trans</option>
              <option class=l2>FH ONT</option>
              <option class=l2>FH Orange</option>
              <option class=l2>FO Orange</option>
              <option class=l2>FO SNCFT</option>
              <option class=l2>FO TT</option>
              <option class=l2>FO Tunisiana</option>
              <option class=l2>IDU</option>
              <option class=l2>LAN_Trans</option>
              <option class=l2>Modem</option>
              <option class=l2>NE 40</option>
              <option class=l2>ODU</option>
              <option class=l2>PTN</option>
              <option class=l2>Vandalisme</option>
              <option class=l2>VSAT</option>
              <option class=l2>WDM</option>
              
              <option class=l2>Jantere</option>
              <option class=l3>STEG HS >3h ; GE non fonctionnel</option>
              <option class=l3>STEG HS >3h ; Nbre GE mobiles insuffisant</option>
              <option class=l3>STEG HS >3h ; Intervenants indisponibles</option>
              <option class=l3>STEG HS >3h ; Facture impayee</option>
              <option class=l3>Anomalie Batterie</option>
              <option class=l3>Anomalie elecrtique</option>
              <option class=l3>Disjonction</option>
              <option class=l3>Sharing ONT</option>
              <option class=l3>Sharing TT</option>
              <option class=l3>Temperature Haute</option>
              <option class=l3>Blocage 3G/4G forcé</option>
              <option class=l3>Blocage 3G forcé</option>
              <option class=l3>Sharing Ooredoo</option>
              <option class=l3>STEG HS >3h ; Coupure generale</option>
              <option class=atr>Autre</option>
              <option class=l4>Support_Trans</option>
              <option class=l4>Support_Radio</option>
              <option class=l4>Deploiement</option>
              <option class=l4>NEC</option>
              <option class=l4>Huawei</option>
              <option class=l4>Mobiserve</option>
              <option class=l4>Ericson</option>
              <option class=l4>Alcatel</option>
              <option class=l4>Ingenierie</option>
              <option class=l4>Tunisie Telecom</option>
              <option class=l4>Ooredoo</option>
              <option class=l4>Intervention_FO</option>
              <option class=l5>STEG HS >3h ; Probleme d\'acces</option>
              <option class=l5>Acte proprietaire</option>
              <option class=l5>Condition Meteo</option>
              <option class=l5>Probleme d\'acces</option>
              <option class=l5>Vandalisme</option>
              <option class=l6>Antenne</option>
              <option class=l6>Connectique</option>
              <option class=l6>Radio U/UX</option>
              <option class=l6>Surge Protector defectueux</option>
              <option class=l6>Perte de configuration AN100</option>
              <option class=l6>Interference Frequence DL/UL</option>
              <option class=l6>Environnement technique</option>
              <option class=l6>Conditions Meteo</option>
      </select></div>

      

        <br> <br> 
    <div class="form-group"> <label for="cause">Cause </label>

	<input id="cause"  class="form-control" name="cause" rows="2" size="146"  type="text" value="'. $CAUSE .'"></div>

      
         <br> <br> 
    <div class="form-group"> <label for="cause">Actions Correction</label> <input id="cause"  class="form-control" name="ac"  type="text" rows="2" size="146" value="'. $AC .'"></div>

      
         <br> <br>      
   ';  ?>





 
<?php
 echo '
      <pre> 
      <strong>TOC :       </strong>'. $record['Toc'].'<br>
      <strong>Criticité : </strong>'. $record['Criticité'].'<br>
      <strong>Nature :       </strong>'. $record['Nature'].'<br>
      <strong>Impact : </strong>'. $record['Impact1'] .'    '.    $record['Impact2']    .'   '. $record['Impact3'].'<br>
      <strong>Zone :       </strong>'. $record['Zone'].'<br>
      <strong>Date de Debut : </strong>'. $record['Debut'].'<br>
      <strong>Date de Fin : </strong>'. $record['Fin'].'<br>
      <strong>Nombre de cellule : </strong>'. $record['NbCel'].'
     </pre>';
$cr->closeCursor();
 ?>
 

<a href="index.php?toc=0" target="_self"> <input type=button class="btn btn-warning" value="Back"></span></a>
        
        <button type="submit" class="btn btn-warning">Save</button>      
        <?php 
          $y='Delete.php?toc='. $toc .' ';
         
        echo '<a href="'.$y.'" target="_self"><input type=button class="btn btn-warning" value="Delete"></a>'; 
       
          $n='Send_mail_fiche.php?toc='.$toc.' ';
        
        echo '     <a href="'.$n.'" target="_self"><input type=button class="btn btn-warning" value="Send Mail"></a>'; 
        ?>
        
        </form>
</div>




</body>
