<?php 


require "phpmailer/class.phpmailer.php"; 
	  	  
            $mail = new PHPmailer(); 

            $mail->IsSMTP(); 
			

            $mail->Host='smtp.10.29.28.60'; 
			$mail->From='SMC_BackOffice@orange.com';  
		    $mail->FromName = "SMC BackOffice";
			$mail->SMTPDebug  = 2;
$mail->SMTPAuth 	= true;
$mail->SMTPSecure = "tls";
			 // Cette partie est optionnelle si le serveur SMTP n'a pas besoin d'authentification
			$mail->Username = 'supervision'; // mettre l'adresse email que founit l'hébergeur
			$mail->Password = 'supOTN$16';
//$mail->Port = 587;
$mail->Encoding 	= '7bit';

          
         
      

  

           
			$mail->AddAddress("23272691@orange.com", 'layth');
				
	
	
            $mail->AddReplyTo('Layth.Jaber@orange.com'); 
			
			$mail->Body="hi";
			
       		
				
				

				
				
				
				
				
				
				
				
				
				
				
				
				
	


   echo $mail->Body;

            if(!$mail->Send()){ //Teste le return code de la fonction 

              echo $mail->ErrorInfo; //Affiche le message d'erreur (ATTENTION:voir section 7) 

            } 

            else{      

              echo '<h1><center><strong>Mail envoye !</strong></center></h1>'; 

            } 

            $mail->SmtpClose(); 

            unset($mail);
		
		  
		 ?>
		 
		 
		 
		 
		 
		



	

	