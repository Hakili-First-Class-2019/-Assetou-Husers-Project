<?php
require_once 'connexionBd.php';
require_once 'userClass.php';

if(isset($_POST['connexion']))
{
   $email = trim($_POST['email']);
   $password = trim($_POST['password']); 
 
  if(!filter_var($email, FILTER_VALIDATE_EMAIL)) 
   {
      $error[] = "format email incorrect";
   }
  
   else if($password=="") 
   {
      $error[] = "Veuillez renseigner un mot de passe svp !";
   }

   else
    {  
        $user = new User($connection);
        $user->login($email,$password);
    }
}
?>