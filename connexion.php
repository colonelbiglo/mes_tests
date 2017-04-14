<html>
     <head>
	       <title>ma page</title>
		   <meta charset = "utf-8" />
	 </head>
	 <body>
	       <?php
		   
		   if(isset ($_COOKIE['lastconnexion']))
		   {
	           echo $_COOKIE['lastconnexion'];
		   }
		   else
		   {
			   echo "premiere connexion";
		   }
		   ?>
		   <br>
	       <a href = "deconnexion.php">Deconnexion</a>
		   
	 </body>



</html>