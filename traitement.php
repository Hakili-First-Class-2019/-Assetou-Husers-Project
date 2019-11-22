<?php
require_once 'connexionBd.php';
require_once 'userClass.php';

if(isset($_POST['ajouter']))
{
   $nom = trim($_POST['nom']);
   $prenom = trim($_POST['prenom']);
   $email = trim($_POST['email']);
   $telephone = trim($_POST['telephone']);
   $password = trim($_POST['password']); 
 
   if($nom=="") {
      $error[] = "Veuillez renseigner le nom svp"; 
   }
   else if($prenom=="") 
   {
      $error[] = "Veuillez renseigner le prenom svp"; 
   }
   else if(!filter_var($email, FILTER_VALIDATE_EMAIL)) 
   {
      $error[] = "format email incorrect";
   }
   else if($telephone=="") 
   {
       $error[] = "Veuillez renseigner le telephone svp";
   }
   else if($password=="") 
   {
      $error[] = "Veuillez renseigner un mot de passe svp !";
   }

   else
   
   {  
      $user = new User($connection);
      $requete = $connection->query ('SELECT COUNT(id) as countid FROM husers');
      $nbligne = $requete->fetch();

      if($nbligne['countid'] < 5)
      {
         $user = new User($connection);
         $user->register($nom,$prenom,$email,$telephone,$password);
      }

      else
      {
         $user = new User($connection);
         $user->redirect('login.php');
         //header("Location: login.php");
      }
      
       
   }
}
?>