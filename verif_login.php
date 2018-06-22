<!DOCTYPE html>
<title>SUPTECH</title>
<html>
<head>




		  
		  <script type="text/javascript" src="jquery.js"></script>
			<script type="text/javascript" src="thickbox.js"></script>
			<link rel="stylesheet" href="thickbox.css" type="text/css" media="screen" />
		  </head>
<?php


if (isset($_POST['user']) AND isset($_POST['pwd1']) ) 
{


$bdd= new PDO('mysql:host=localhost;dbname=escalade;charset=utf8','root','orangeroot', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

$a=$_POST['user'];

$cr =$bdd ->prepare('SELECT password FROM users where user= :t');
$cr ->execute(array( 't'=>$a));
$record= $cr->fetch();
if(   $record['password']==$_POST['pwd1'])
{
	
	
    session_start();

    $_SESSION['user'] = $a;

setcookie('user', $a , time() + 365*24*3600, "/", null, false, true );
setcookie('password', $record['password'], time() + 365*24*3600, "/", null, false, true);

   
header('Location: index.php?toc=0');

}
else
{  
	header('Location: http://localhost');
}
}
?>	

</html>
