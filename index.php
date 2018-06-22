<!DOCTYPE html>
<html>
<head>
<title>Escalade</title>
<meta name="author" content="Layth Jaber">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width , initial-scale=1">
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/bootstrap.min.css"> 
<link rel="stylesheet" href="css/bootstrap-theme.css">
<link rel="stylesheet" href="css/bootstrap-theme.min.css">



<!-- <link href="jquery-ui.css" rel="stylesheet">
<link rel="stylesheet" href="jquery-ui.min.css">
<script src="external/jquery/jquery.js"></script>
<script src="jquery-ui.min.js"></script> !-->

<link rel="stylesheet" type="text/css" href="./jquery.datetimepicker.css"/>

<script src="/build/jquery.datetimepicker.full.min.js"></script>
<script src="jquery.js"></script>
<script src="build/jquery.datetimepicker.full.js"></script>

<script src="js/bootstrap.js"></script>
<script src="js/bootstrap.min.js"></script>
	<title>Escalade</title>
</head>

<style>
h1 { color: #f0ad4e; font-family: 'Lato', sans-serif; font-size: 54px; font-weight: 300; line-height: 58px; margin: 0 0 58px; }




body{ 
	background-color: #eee;}
#cause { width: 100%;
    
    border: none;
   
    background-color: #E8E1E1; 
}
body {
  padding-top: 50px;
}
legend a {
  color: inherit;
}
legend.legendStyle {
padding-left: 5px;
padding-right: 5px;
}
fieldset.fsStyle {
font-family: Verdana, Arial, sans-serif;
font-size: small;
font-weight: normal;
border: 0px solid #999999;
padding: 4px;
margin: 5px;
}
legend.legendStyle {
font-size: 90%;
color: #888888;
background-color: transparent;
font-weight: bold;
}

legend {
width: auto;
border-bottom: 0px;
}

.dropdown-menu {width: 100%;
position: fixed;
top: 50px;
left: 0;
z-index: 1000;
display: none;
float: left;
min-width: 160px;
padding: 5px 0;
margin: 0 auto;

text-align:left;
}

.dropdown-menu li {display:inline-block;}

.dropdown-menu li.dropdown .dropdown-menu {top:210px;}


.dropdown-menu li.dropdown {background:url(http://decombh.org/img/nav_down.png) no-repeat bottom right !important;
background-position: 5px 9px !important;
}
.top-buffer { margin-top:20px; }

</style>

<body>


<script>
$(document).ready(function() {
	
	$('.dontshow').hide();
	
$('#datepicker').datetimepicker();

$('#datepicker2').datetimepicker();
$('#datepicker3').datetimepicker();
$('#datepicker').datetimepicker({step:10});

$('#datepicker2').datetimepicker({step:10});
$('#datepicker3').datetimepicker({step:10});
    $('.test').hide();
	$('.l1').hide(); 
    $('.l2').hide();
    $('.l3').hide();
    $('.l4').hide();
    $('.l5').hide();
    $('.l6').hide();
    $('.l7').hide();
    $('.l8').hide();
    $('.l9').hide();
    $('.l10').hide();
    $('.l11').hide();	
    $('#another2').hide();
    $('select[name="p16"]').change(function() { 
	
    var valeur = $(this).val(); // valeur sélectionnée
     
        if(valeur != '') { // si non vide
            if(valeur == 'RADIO') { 
                $('.l1').show();
    
     
    $('.l2').hide();
    $('.l3').hide();
    $('.l4').hide();
    $('.l5').hide();
    $('.l6').hide();
    $('.l7').hide();
    $('.l8').hide();
    $('.l9').hide();
    $('.l10').hide();
    $('.l11').hide();	 

            } else if(valeur =='TRANS')
               { $('.l2').show();           
            
    $('.l1').hide(); 
    
    $('.l3').hide();
    $('.l4').hide();
    $('.l5').hide();
    $('.l6').hide();
    $('.l7').hide();
    $('.l8').hide();
    $('.l9').hide();
    $('.l10').hide();
    $('.l11').hide();	
            }
         else if(valeur =='ENV_TECH')
               { $('.l3').show(); 

    $('.l1').hide(); 
    $('.l2').hide();
    
    $('.l4').hide();
    $('.l5').hide();
    $('.l6').hide();
    $('.l7').hide();
    $('.l8').hide();
    $('.l9').hide();
    $('.l10').hide();
    $('.l11').hide();	         
            }
             else if(valeur =='OP NON MAITRISEE')
               { $('.l4').show();  
    $('.l1').hide(); 
    $('.l2').hide();
    $('.l3').hide();
    
    $('.l5').hide();
    $('.l6').hide();
    $('.l7').hide();
    $('.l8').hide();
    $('.l9').hide();
    $('.l10').hide();
    $('.l11').hide();	          
            }
             else if(valeur =='AUTRE')
               { $('.l5').show(); 
    
    $('.l1').hide(); 
    $('.l2').hide();
    $('.l3').hide();
    $('.l4').hide();
    
    $('.l6').hide();
    $('.l7').hide();
    $('.l8').hide();
    $('.l9').hide();
    $('.l10').hide();
    $('.l11').hide();	          
            
			}
             else if(valeur =='TUN_0119_w11')
               { $('.l6').show(); 

    $('.l1').hide(); 
    $('.l2').hide();
    $('.l3').hide();
    $('.l4').hide();
    $('.l5').hide();
    
    $('.l7').hide();
    $('.l8').hide();
    $('.l9').hide();
    $('.l10').hide();
    $('.l11').hide();	          
            }
			
			 else if(valeur =='FO')
               { $('.l7').show(); 

    $('.l1').hide(); 
    $('.l2').hide();
    $('.l3').hide();
    $('.l4').hide();
    $('.l5').hide();
    $('.l6').hide();
    
    $('.l8').hide();
    $('.l9').hide();
    $('.l10').hide();
    $('.l11').hide();	
			   } 


			 else if(valeur =='Acces')
               { $('.l8').show(); 

    $('.l1').hide(); 
    $('.l2').hide();
    $('.l3').hide();
    $('.l4').hide();
    $('.l5').hide();
    $('.l6').hide();
    $('.l7').hide();
    
    $('.l9').hide();
    $('.l10').hide();
    $('.l11').hide();	}

			else if(valeur =='Site Strategique')
               { $('.l9').show(); 

    $('.l1').hide(); 
    $('.l2').hide();
    $('.l3').hide();
    $('.l4').hide();
    $('.l5').hide();
    $('.l6').hide();
    $('.l7').hide();
    $('.l8').hide();
    
    $('.l10').hide();
    $('.l11').hide();	}	
			   
			   
			else if(valeur =='Core du reseau')
               { $('.l10').show(); 

    $('.l1').hide(); 
    $('.l2').hide();
    $('.l3').hide();
    $('.l4').hide();
    $('.l5').hide();
    $('.l6').hide();
    $('.l7').hide();
    $('.l8').hide();
    $('.l9').hide();
    
    $('.l11').hide();	}
			   
			else if(valeur =='KPI Service')
               { $('.l11').show(); 

    $('.l1').hide(); 
    $('.l2').hide();
    $('.l3').hide();
    $('.l4').hide();
    $('.l5').hide();
    $('.l6').hide();
    $('.l7').hide();
    $('.l8').hide();
    $('.l9').hide();
    $('.l10').hide();
            	}






        }
    });
 
  
  
  });

  
</script>





    
    
   
  
  


<?php
session_start();
if(! isset($_SESSION['user']) && empty($_SESSION['user'])) {
    header('Location: http://localhost');
}

echo '<div align="right"  style="vertical-align: top;"> <strong> Bienvenue '. $_SESSION['user'].' </strong>    
<a href="deconnexion.php" target="_self"><input type=button class="btn btn-warning" value="Deconnexion"></a></div>';

if( isset($_GET['toc']))
{ 
$toc1=$_GET['toc'];
}
else {$toc1=0;}

          $y="Delete.php?toc=$toc1";
          $z="verif_mail_fiche.php?toc=$toc1";
          $n="verif_mail.php?toc=$toc1";
          $f="historique.php?toc=$toc1";
		  $g="index.php?toc=$toc1";
$bdd1= new PDO('mysql:host=localhost;dbname=escalade;charset=utf8','root','root', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

$cr3= $bdd1->prepare('SELECT * from  incident where Toc= :t');
$cr3->execute(array('t'=>$toc1));

 $record3= $cr3->fetch();
          

$d1=$record3['Debut'];
$d1 = substr("$d1",0,-3);

$d2=$record3['Prevision'];
$d2 = substr("$d2",0,-3);

$d3=$record3['Fin'];
$d3=substr("$d3",0,-3);


echo' <div class="container">  
   <form class="form-inline" action="enr_inc_deb.php" method="POST" role="form">
   <fieldset class="fsStyle">
      <legend class="legendStyle">
        <a data-toggle="collapse" data-target="#location" href="#"><h1>Escalade SMC BackOffice</h1></a>
      </legend>
      <div id="location">
   			
   			
           	
             <div class="form-group">
               <label for="crit">Criticité</label> 
            <select class="form-control" id="crit" name="p1" >
			<option selected="" class="dontshow">'. $record3['Criticite'].'</option>
				<option></option>
			 <option>Mineur</option>
              <option>Majeur</option>
              <option>Critique</option>
			</select></div>
   				 
           <div class="form-group"> <label for="toc">OCEANE  </label> <input id="toc"  class="form-control" name="toc2" required="" size=8 type="text" pattern="[0-9a-zA-Z]{10}" value="'. $record3['Toc'].'"></div>
           
           <div class="form-group">
               <label for="origine">Origine</label> 
            <select class="form-control" id="origine" name="p3">
              <option selected="" class="dontshow">'. $record3['Origine'].'</option>
			  <option></option>
			  <option>Supervision</option>
              <option>Service client</option>
			  <option>SMC</option>
              <option>TMC</option>
			  <option>Autre</option>
			</select></div>
			
			<div class="form-group">
               <label for="actchez">Action Chez</label> 
            <select class="form-control" id="actchez" name="p4">
              <option selected="" class="dontshow">'. $record3['Chez'].'</option>
			  <option></option>
			  <option>DRS</option>
              <option>TT</option>
			  <option>Ooredoo</option>
              <option>SNCFT</option>
			  <option>STEG</option>
			  <option>Mobiserve</option>
              <option>Huawei</option>
			  <option>Deploiement</option>
              <option>DSI</option>
			  <option>Ingenierie</option>
			  <option>Marketing</option>
			  <option>Autre</option>
			</select></div>
		   
		   <div class="form-group">
		    <label for="noeud">Noeud</label>
		   <input id="noeud"  class="form-control" name="p5"  type="text" value="'. $record3['Noeud'].'">
		   </div>
		   <br><br>
		  <div class="form-group"> <label for="zone">Zone  </label> <input id="zone"  class="form-control" name="p6"  type="text" value="'. $record3['Zone'].'"></div>

		   
		   <div class="form-group">
               <label for="nature">Nature</label> 
            <select class="form-control" id="nature" name="p7">
              <option selected="" class="dontshow">'. $record3['Nature'].'</option>
			  <option></option>
			  <option>Sans Impact</option>
              <option>Indisponibilite</option>
			  <option>Degradation</option>
              <option>Coupure FO</option>
			</select></div>
          

           <div class="form-group">
               <label for="impact">Impact</label> 
            <input id="impact"  class="form-control" name="p8"  type="text" value="'. $record3['Impact'].'">
			</div>

			<div class="form-group"> <label for="cel2g">Cells :  2G</label> <input id="cel2g"  class="form-control" name="p9" size="1" type="text" value="'. $record3['Cel2g'].'"></div>
			<div class="form-group"> <label for="cel3g">3G</label> <input id="cel3g"  class="form-control" name="p10"  size="1" type="text value="'. $record3['Cel3g'].'"></div>
			<div class="form-group"> <label for="cel4g">4G</label> <input id="cel4g"  class="form-control" name="p11"  size="1" type="text value="'. $record3['Cel4g'].'"></div>
			<br><br>
			<div class="form-group"> <label for="cvs"> Nb.Clients :   Voix </label> <input id="cvs"  class="form-control" name="p12"  size="3" type="text value="'. $record3['Cvs'].'"></div>
			<div class="form-group"> <label for="data">Data</label> <input id="data"  class="form-control" name="p13"  size="3" type="text value="'. $record3['Data'].'"></div>
			
			<div class="form-group"> <label for="datepicker">Debut  </label> <input id="datepicker"  class="form-control" name="p14"  type="text" size="14" value="'. $d1.'"></div> 
     <div class="form-group"> <label for="datepicker3">Prevision  </label> <input id="datepicker3"  class="form-control" name="p20"  type="date" size="14" value="'.$d2.'"></div>	
			<div class="form-group"> <label for="datepicker2">Fin  </label> <input id="datepicker2"  class="form-control" name="p15"  type="date" size="14" value="'.$d3.'"></div>		 
        
		 <br><br>
   <div class="form-group"> <label for="type">Famille </label> 
              <select class="form-control" id="type" name="p16">
              <option selected="" class="test">'.$record3['Type'] .'</option>
              <option></option>
			  <option>RADIO</option>
              <option>TRANS</option>
              <option>ENV_TECH</option>
              <option>OP NON MAITRISEE</option>
              <option>FO</option>
              <option>Acces</option>
              <option>Site Strategique</option>
              <option>Core du reseau</option>
			  <option>KPI Service</option>
			  <option>AUTRE</option>
      </select></div>



    <div class="form-group"> <label for="sf">Sous Famille </label>
              <select class="form-control" id="sf" name="p17">
              <option selected="" class="test">'. $record3['Sf'] .'</option>
              <option></option>
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
              <option class=l2>Buxage</option>
              <option class=l2>Cablage</option>
              <option class=l2>CableIF</option>
              <option class=l2>Carte CTRL/IF/RRA</option>
              <option class=l2>Conditions Meteo</option>
              <option class=l2>E1_Trans</option>
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
              
              <option class=l2>Jarretiere</option>
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
              
			   
			  <option class=l7>FO</option>
              <option class=l7>FO Last Mile site mobile</option>
              <option class=l7>FO Last Mile B2B premium</option>
              
			  <option class=l8>Le rest des sites d\'acces</option>
              <option class=l8>Energie site normal</option>
              <option class=l9>Energie site strategique</option>
              <option class=l9>Climatisation site strategique</option>
              
			  
              
			  <option class=l10>BSC</option>
              <option class=l10>RNC</option>
              <option class=l10>MSC serveur</option>
              <option class=l10>MSC Blade</option>
              <option class=l10>MGW</option>
              <option class=l10>SGSN</option>
              <option class=l10>GGSN</option>
              <option class=l10>HLR</option>
              <option class=l10>CCN</option>
              <option class=l10>OCC</option>
              <option class=l10>Routeur Core</option>
              <option class=l10>Switch Core</option>
              <option class=l10>SMSC</option>
              <option class=l10>MMSC</option>
              <option class=l10>OpenCode</option>
              <option class=l10>SMGS</option>
              <option class=l10>VMS</option>
              <option class=l10>RBT</option>
              <option class=l10>OTA</option>
              <option class=l10>Zebra</option>
              <option class=l10>USSDG</option>
              <option class=l10>Sandvine</option>
              <option class=l10>OpenWave</option>
              <option class=l10>Roamware</option>
              <option class=l10>MobileTV</option>
			   <option class=l10>CallBlocker</option>
              <option class=l10>DNS</option>
              <option class=l10>iDNS</option>
              <option class=l10>Hosting</option>
              <option class=l10>Switch Hosting</option>
              <option class=l10>FW Hosting</option>
              <option class=l10>IMS</option>
              <option class=l10>BroadFoft</option>
              <option class=l10>Communigate</option>
			  <option class=l10>Radius(ADSL)</option>
              <option class=l10>BRAS</option>
              <option class=l10>PCRF</option>
              <option class=l10>DSTK(iSMS)</option>
			  
			  <option class=l11>KPI USSD</option>
			  <option class=l11>CSSR Voix</option>
              <option class=l11>Erreur OCC</option>
              <option class=l11>KPI Robot</option>
              <option class=l11>KPI Plateformes (Dash KPI)</option>
				<option class=atr>Autre</option>

			  
		


      </select></div>

      

        <br> <br> 
    <div class="form-group"> <label for="cause">Cause </label>

	<input id="cause"  class="form-control" name="p18" rows="2" size="160"  type="text" value="'. $record3['Cause'] .'"></div>

      
         <br> <br> 
    <div class="form-group"> <label for="cause">Actions Corrective </label> <input id="cause"  class="form-control" name="p19"  type="text" rows="2" size="146" value="'. $record3['ac'] .'"></div>

      
         <br> <br> 
		 
		
		
		
		<button type="submit" class="btn btn-warning" name="new">Sauvegarder</button>
        <button type="submit" class="btn btn-warning" name="update">Nouveau</button> 
		
		<input type="hidden" name="toc" value="'. $toc1 .'">
		    <a href="'.$y.'" target="_self"><input type=button class="btn btn-warning" value="Supprimer"></a>
            <a href="'.$z.'" target="_self"><input type=button class="btn btn-warning" value="FII"></a>
            <a href="'.$n.'" target="_self"><input type=button class="btn btn-warning" value="Escalade"></a>
			<a href="'.$f.'" target="_self"><input type=button class="btn btn-warning" value="Historique"></a>
			<a href="'.$g.'" target="_self"><input type=button class="btn btn-warning" value="Refresh"></a>
		  </div>
      
   </fieldset>
		</form>
</div>
          
  

';
            
$cr3->closeCursor();
 ?>
 

  <br></br>
   					
<center><iframe src="tabexp.php" style="width:1200px ; height:550px" frameBorder="0" scrolling="no"/></center>
 
   		
           
       
        
      



















 















