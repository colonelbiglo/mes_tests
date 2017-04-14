<?php session_start();
?>
<html>
     <head>
	       <title>ma page</title>
		   <meta charset = "utf-8" />
	 </head>
	 <body>
	       <?php
		         session_destroy();
		         setcookie("lastconnexion",date('D, d M Y H:i:s'), time()+3600);
		   
		   echo "Deconnexion reussie: retour a la page d'acceuil";
		   
		   header ('Location: text1.php');
		   
		   ?>
	 </body>



</html>