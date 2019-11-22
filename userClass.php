<?php
    class User
    {
        private $db;
 
        function __construct($connection)
        {
          $this->db = $connection;
        }
            public function register($nom,$prenom,$email,$telephone,$password)
            {
                try
                {
                    $new_password = password_hash($password, PASSWORD_DEFAULT);
                    $stmt = $this->db->prepare("INSERT INTO husers(nom,prenom,email,telephone,password) VALUES(:nom, :prenom, :email, :telephone, :password)");
                    $stmt->bindparam(":nom", $nom);
                    $stmt->bindparam(":prenom", $prenom);
                    $stmt->bindparam(":email", $email);
                    $stmt->bindparam(":telephone", $telephone);
                    $stmt->bindparam(":password", $new_password);
                    $stmt->execute();
                    return $stmt;
                   /* $insertion = "INSERT INTO husers(nom,prenom,email,telephone,password)
                VALUES ('$nom','$prenom','$email','$telephone','$password')";
                $connection->exec($insertion);
                echo "Données bien enregistrées";*/
                }
                catch(PDOEception $e)
                {
                    echo 'Données non enregistrées: '.$e->getMessage();
                }
            }

            public function login($email,$password)
            {
                try
                {
                    $stmt = $this->db->prepare("SELECT  FROM husers WHERE email=:email");
                    $stmt->execute(array(':email'=>$email, ':password'=>$password));
                    $userRow=$stmt->fetch(PDO::FETCH_ASSOC);
                    if($stmt->rowcount() > 0)
                    {
                        if(password_verify($password,$userRow['id']))
                        {
                            $_SESSION['user_session'] = $userRow['id'];
                            return true;
                        }
                        else
                        {
                            return false;
                        }
                    }
                }
                catch(PDOException $e)
                {
                    echo $e->getMessage();
                }
            }
        public function redirect($url)
        {
            header("Location: $url");
        } 

        public function compte($nbLigne)
        {
            $requete = $this->db->query ('SELECT COUNT(id) as countid FROM husers');
            $nbLigne = $requete->fetch();
            return $nbLigne;
        }

        public function logout()
        {
            session_destroy();
            unset($_SESSION['user_session']);
            return true;
        }
    }
?>