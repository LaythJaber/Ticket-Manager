<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width , initial-scale=1">
<link rel="stylesheet" href="css/bootstrap.css">
<link rel="stylesheet" href="css/bootstrap.min.css"> 
<link rel="stylesheet" href="css/bootstrap-theme.css">
<link rel="stylesheet" href="css/bootstrap-theme.min.css">
<script src="js/bootstrap.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.js"></script>
<script src="js/engine.js"></script>
</head>
<script> $(document).ready(f);</script>
<style>
h1{ color:#f0ad4e;}
body{background-color:  #eee;}
</style>
<body>
	
<div class="container">  
   <form class="form-inline" action="enr_inc_deb.php" method="POST" role="form">
   <legend><h1>Incident</h1></legend>
   			
   			
           	
             <div class="form-group">
               <label for="crit">Criticité</label> 
            <select class="form-control" id="crit" name="crit">
              <option>Mineur</option>
              <option>Majeur</option>
              <option>Critique</option>
			</select>
   				 
    
             <br>
           <br>
           <div class="form-group"> <label for="toc">TOC  </label> <input id="toc"  class="form-control" name="toc" required="" type="text" pattern="[0-9]{10}"></div>
           <br><br>
           <div class="form-group">
               <label for="nature">Nature</label> 
            <select class="form-control" id="nature" name="nature">
              <option>Degradation</option>
              <option>indisponibilité</option>
			</select>
           <br><br>

           <div class="form-group">
               <label for="nature">Impact</label> 
            <select class="form-control" id="impact1" name="impact1">
              <option>Voix</option>
              <option>Data</option>
			</select>
			 
            <select class="form-control" id="impact2" name="impact2">
              <option>2G</option>
              <option>3G</option>
              <option>4G</option>
			</select>
           <input id="impact3"  class="form-control" name="impact3"  type="text">
           <br><br>

            <div class="form-group"> <label for="zone">Zone  </label> <input id="zone"  class="form-control" name="zone"  type="text"></div>

           
           <br><br>

           <div class="form-group"> <label for="cel">Nombre de cellule  </label> <input id="cel"  class="form-control" name="cel"  type="number" pattern="[0-9]{10}"></div>
          <br><br>
            
            <div class="form-group"> <label for="datedeb">Debut  </label> <input id="datedeb"  class="form-control" name="datedeb"  type="date"></div>

   					


   		
         <br> <br>  
        <button type="submit" class="btn btn-warning">Save</button>
        </form>
</div>




</body>
