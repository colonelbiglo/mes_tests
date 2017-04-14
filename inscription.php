<?php /*session_start();*/
 
if((isset($_POST['user'])) && (isset($_POST['password'])) && (isset($_POST['email'])))
{
   $host ="localhost";
	 $nom="root";
	 $pass="";
	 $email="";
	 $db="base";
	 
	 $conn = mysqli_connect($host,$nom,$pass,$db);
	 
	 $nom = $_POST['user'];
     $pass = $_POST['password'];
	 $email = $_POST['email'];
	 
	 $mysql_qry = 'INSERT INTO test (NameU,PasswordU,EmailU) VALUES("'.$nom.'","'.$pass.'","'.$email.'")';
	 
	 $result = mysqli_query($conn,$mysql_qry);
	 if($result > 0){
		echo "$nom";
		echo "$pass";
		echo "$email";
	}
	else {
	echo "Problème d'inscription";
	}
	header("Location: text1.php");
}
else
{
?>	
				       <center> <h1><b>INSCRIPTION</b></h1>
						<form action="inscription.php"     method="POST">
						  <p><b>Votre Username</b></p><input type="text"  name="user"></input> 
						  <p><b>Votre MDP</b></p><input type="password"  name="password"></input>
						  <p><b>Votre adresse email</b><p><input type = "email" name = "email"></input>
						  <br/><input type="submit"  value="envoyez" />
						</form>
				       </center> 
<?php
}
?>	 