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





<script src="js/bootstrap.js"></script>
<script src="js/bootstrap.min.js"></script>
	<title>Login</title>
</head>

<body>



<div class="container">  
   <form class="form-inline" action="verif_login.php" method="POST"  target="_top" role="form">
  <!-- <legend><h1>Login</h1></legend> --!-->
   			
   			
           	
            
               
   				 
           <div class="form-group"> <label for="user">Utilisateur   </label> <input id="user"  class="form-control" name="user" required=""  type="text"  ></div>
		   <br><br>
		   <div class="form-group"> <label for="pwd">Mot de passe</label> <input id="pwd1"  class="form-control" name="pwd1" required=""  type="password"  ></div>
           <br><br>

<center><button type="submit" onClick="self.parent.tb_remove()"  class="btn btn-warning"  >Envoyer</button></center>





</body>
</html>