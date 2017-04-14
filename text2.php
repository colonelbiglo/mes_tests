	        <?php session_start();
			      
	        $nom = $_POST['user'];
			$pass = $_POST['password'];
			$email = $_POST['email'];
			
			if((isset($_POST['user'])) && (isset($_POST['password'])) && (isset($_POST['email'])))
			{	
				if(($nom=="yando") && ($pass=="kamga") && ($email=="hugues.yk@gmail.com"))
			    {
					$_SESSION['co']=1;
					echo 'connexion reussie <a href="membres.php">Espace membre</a>';
                }
                else
				{
					$_SESSION['co']=0;
                     echo "connexion echouée";
                }					 
			}
            else
		    {
                  echo "pas de post";
            }				  
	        ?>
