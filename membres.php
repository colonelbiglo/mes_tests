<?php session_start();

if($_SESSION['co']==0)
{
	echo "connexion impossible car vous n'etes pas membre.";
}
else
{
?>
   <center>
   <h1>Bienvenue</h1>
   <p>Super vous etes un membre</p>
   <a href ="deconnexion.php">Deconnexion</a>
<?php
}
?>