<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Sign up : cleartuts</title>
</head>
<body>
<div class="container">
     <div class="form-container">
     <form action="traitement.php" method="post">
                <table>
                    <tr>
                        <td>NOM:</td>
                        <td><input type="text" placeholder="Votre nom" name="nom"/></td>
                    </tr>
                    <tr>
                        <td>PRENOM(S):</td>
                        <td><input type="text" placeholder="Votre prenom" name="prenom"/></td>                        
                    </tr>
                    <tr>
                        <td>EMAIL:</td>
                        <td><input type="text" placeholder="Votre email" name="email"/></td>                        
                    </tr>
                    <tr>
                        <td>TELEPHONE:</td>
                        <td><input type="text" placeholder="Votre telephone" name="telephone"/></td>                        
                    </tr>
                    <tr>
                        <td>MOT DE PASSE:</td>
                        <td><input type="password" placeholder="Votre mot de passe" name="password"/></td>                        
                    </tr>
                    <tr><td><button type="submit" name="ajouter" value="AJOUTER">AJOUTER</button></td></tr>
                </table>         
            </form>
       </div>
</div>

</body>
</html>