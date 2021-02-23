<?php
class user
{
    private $_email;
    private $_mdp;
    private $_mdpConfirm;
    private $_nom;
    private $_prenom;
    private $_BDD;




public function __construct($BDD)
{
    $this->_BDD = $BDD;
}

    public function verifUserConnect()
    {
        if (filter_var($this->_email, FILTER_VALIDATE_EMAIL)) {
            if (!empty($this->_mdp)) {
                $bdd = new PDO('mysql:host=localhost; dbname=film; charset=utf8', 'root', '');
                $request = $bdd->prepare("SELECT * FROM user WHERE email = ? AND password = ?");
                $request->execute(array($this->_email, $this->_mdp));
                $userExist = $request->rowCount();

                if ($userExist == 1) {
                    $data = $request->fetch();
                    session_start();
                    $_SESSION['logged'] = true;
                    $_SESSION['id'] = $data['id_user'];
                    $_SESSION['droits'] = $data['droit'];
                    return "succesConnect";
                } else {
                    return "userDoesntExist";
                }
            } else {
                return "noPassword";
            }
        } else {
            return "invalidMail";
        }
    }

    public function registUser($speudo, $mdp, $confMdp)
    {

        if ($mdp == $confMdp) {
            $Nom = $speudo;
            $vérifNam = $this->_BDD->prepare("SELECT * FROM `user` WHERE `Nom_user` = ?");
           $vérifNam->execute(array($Nom));
           $userExist = $vérifNam->rowCount();
           if ($userExist == 1) {
               return "mailUsed";
            } else {
                $requeteInscription = $this->_BDD->query("INSERT INTO `user`(`Nom_user`, `Mdp`, `Admin`) VALUES ('$Nom ', '$mdp' ,'FALSE')");
                return "succesRegister"; 
           }
        } else {
            return "mdpDifferents";
        }
    }
    public function conactat($Nom, $prenom, $mail, $message)
    {
    }

    public function errorGestion($erreur)
    {
        if ($erreur == "userDoesntExist") {
            echo "<p class='red-text'>E-mail ou mot de passe incorrect</p>";
        }
        if ($erreur == "noPassword") {
            echo "<p class='red-text'>Merci de remplir le champ mot de passe</p>";
        }
        if ($erreur == "invalidMail") {
            echo "<p class='red-text'>L'adresse e-mail est invalide</p>";
        }
        if ($erreur == "succesConnect") {
            echo "<p class='green-text'>Connecté!</p>";
        }
        if ($erreur == "mdpDifferents") {
            echo "<p class='red-text'>Les deux mots de passes ne correspondent pas</p>";
        }
        if ($erreur == "mailInvalide") {
            echo "<p class='red-text'>L'adresse e-mail est incorrecte</p>";
        }
        if ($erreur == "mdpVide") {
            echo "<p class='red-text'>Merci de remplir le champ mot de passe</p>";
        }
        if ($erreur == "nomPrenomVide") {
            echo "<p class='red-text'>Merci de remplir les champs nom et prenom</p>";
        }
        if ($erreur == "mailUsed") {
            echo "<p class='red-text'>Adresse e-mail déjà utilisée</p>";
        }
        if ($erreur == "succesRegister") {
            echo "<p class='green-text'>Vous êtes inscris!</p>";
        }
    }
}
