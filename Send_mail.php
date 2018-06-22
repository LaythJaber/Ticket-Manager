<?php
session_start(); 
  $toc=$_GET['toc'];
  	date_default_timezone_set('Europe/Paris');
  file_put_contents("log.txt",$toc. " ; "  .$_SESSION['user']. " ; " .date("[j/m/y H:i:s]")."  ; Envoie Escalade par Mail   \r\n".file_get_contents("log.txt"));
$bdd= new PDO('mysql:host=localhost;dbname=escalade;charset=utf8','root','orangeroot', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

$cr3 =$bdd ->prepare('INSERT INTO  historique (toc,user,type) VALUES(:toc3 ,:us,:tp)');
$cr3->execute(array(
'toc3'=>$toc,
'us'=> $_SESSION['user'],
'tp'=> "Mail Escalade" ));
$cr3->closeCursor();


$cr20 =$bdd ->prepare('UPDATE incident SET check1=2  WHERE Toc= :tc');
$cr20 ->execute(array('tc'=> $toc
                        ));
$cr20 ->closeCursor();


$cr= $bdd->prepare('SELECT * from  incident where Toc= :t');
$cr->execute(array('t'=>$toc));

 $record= $cr->fetch();

 
      
       
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
     $n=substr("$n",0,-3); 
     $o=substr("$o",0,-3); 
	 $p=substr("$p",0,-3); 
 /*
 
$mail = 'jaber.layth@gmail.com'; // Déclaration de l'adresse de destination.
if (!preg_match("#^[a-z0-9._-]+@(hotmail|live|msn).[a-z]{2,4}$#", $mail)) // On filtre les serveurs qui rencontrent des bogues.
{
	$passage_ligne = "\r\n";
}
else
{
	$passage_ligne = "\n";
}
//=====Déclaration des messages au format texte et au format HTML.
$message_txt = "Salut à tous, voici un e-mail envoyé par un script PHP.";
$message_html = "<html><head></head><body><b>Salut à tous</b>, voici un e-mail envoyé par un <i>script PHP</i>.</body></html>";
//==========
 
//=====Création de la boundary
$boundary = "-----=".md5(rand());
//==========
 
//=====Définition du sujet.
$sujet = "Hey mon ami !";
//=========
 
//=====Création du header de l'e-mail.
$header = "From: \"layth\"".$passage_ligne;
$header.= "Reply-to: \"Layth\"jaber.layth@gmail.com".$passage_ligne;
$header.= "MIME-Version: 1.0".$passage_ligne;
$header.= "Content-Type: multipart/alternative;".$passage_ligne." boundary=\"$boundary\"".$passage_ligne;
//==========
 
//=====Création du message.
$message = $passage_ligne."--".$boundary.$passage_ligne;
//=====Ajout du message au format texte.
$message.= "Content-Type: text/plain; charset=\"ISO-8859-1\"".$passage_ligne;
$message.= "Content-Transfer-Encoding: 8bit".$passage_ligne;
$message.= $passage_ligne.$message_txt.$passage_ligne;
//==========
$message.= $passage_ligne."--".$boundary.$passage_ligne;
//=====Ajout du message au format HTML
$message.= "Content-Type: text/html; charset=\"ISO-8859-1\"".$passage_ligne;
$message.= "Content-Transfer-Encoding: 8bit".$passage_ligne;
$message.= $passage_ligne.$message_html.$passage_ligne;
//==========
$message.= $passage_ligne."--".$boundary."--".$passage_ligne;
$message.= $passage_ligne."--".$boundary."--".$passage_ligne;
//==========
 
//=====Envoi de l'e-mail.
mail($mail,$sujet,$message,$header);
//==========
*/

require "phpmailer/class.phpmailer.php"; 
	  	  
            $mail = new PHPmailer(); 

            $mail->IsSMTP(); 
			$mail->IsHTML(true);

            $mail->Host='10.29.28.60'; 
			$mail->From='SMC_BackOffice@orange.com';  
		    $mail->FromName = "SMC BackOffice";
			$mail->SMTPAuth = false; // Cette partie est optionnelle si le serveur SMTP n'a pas besoin d'authentification
			$mail->Username = 'lasup'; // mettre l'adresse email que founit l'hébergeur
			$mail->Password = 'Orange@2018'; 


            $mail->CharSet = 'UTF-8';
			$mail->AddAddress('Layth.Jaber@orange.com'); 
				
			//$mail->AddAddress('Ramzi.Azaiez@orange.com'); 
			




/*
	         if( isset($_POST['choix1'])
			 { $mail->AddAddress('Mohamed.Essafi@orange.com'); }
			 if( isset($_POST['choix2'])
			 { $mail->AddAddress('Maaouia.Bentraki@orange.com'); }
			 if( isset($_POST['choix3'])
			 { $mail->AddAddress('Ahmed.Karoui@orange.com'); }
			 if( isset($_POST['choix4'])
			 { $mail->AddAddress('Mehdi.tkhayat@orange.com'); }
			 if( isset($_POST['choix5'])
			 { $mail->AddAddress('Mohamed.Rahal@orange.com'); }
	
	



			if( isset($_POST['choix6'])
			 { $mail->addCC('DRS_SMC@orange.com'); }
			 if( isset($_POST['choix7'])
			 { $mail->addCC('Head_ops@orange.com'); }
			 if( isset($_POST['choix8'])
			 { $mail->addCC('Slim.jarraya@orange.com'); } */
	
            $mail->AddReplyTo('Layth.Jaber@orange.com'); 
			$mail->Subject="Escalade incident ".$record['Criticite']."";  
			
			$mail->Body="<!DOCTYPE html>
<html>
<head>
<meta charset='UTF-8'>

	
</head>
<style>
h1{ color:#ff8c00;}
body{background-color:  #eee;}
.a{
	border: 1px solid white;
	
	background: black;
}
td{border: 1px solid black;
	
	

}
td:hover{
background: white;
}
</style>

<body>

<center><div style='width:500px ; height:600px ;border:2px solid #999999; '>
<h1><strong>Escalade SMC BackOffice</strong></h1>

<table  style='font-size:20px'>
	
	

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
	<tr><td class='a'><font color='#ff8c00'>Prevision</font></td><td colspan='3'>$o</td></tr>
	<tr><td class='a'><font color='#ff8c00'>Date Fin</font></td><td colspan='3'>$p</td></tr>	

</table>

</div></center>



</body>";
			
       		
				
				

				
				
				
				
				
				
				
				
				
				
				
				
				
	
$mail->Body.="</html>";

   echo $mail->Body;

            if(!$mail->Send()){ //Teste le return code de la fonction 

              echo $mail->ErrorInfo; //Affiche le message d'erreur (ATTENTION:voir section 7) 

            } 

            else{      

              echo '<h1><center><strong>Mail envoye !</strong></center></h1>'; 

            } 

            $mail->SmtpClose(); 

            unset($mail);
		$cr->closeCursor();	
		  header('Location: index.php?toc=0');
		 ?>
		 