<?php
session_start();
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

    public function verifUserConnect($speudo, $Mdp)
    {
        $request = $this->_BDD->prepare("SELECT * FROM user WHERE Nom_user = ? AND Mdp = ?");
        $request->execute(array($speudo, $Mdp));
        $userExist = $request->rowCount();

        if ($userExist == 1) {
            $data = $request->fetch();
            $_SESSION['id'] = $data['id_user'];
            $_SESSION['droits'] = $data['Admin'];
            return "succesConnect";
        } else {
            return "userDoesntExist";
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

    public function commetaire($id_user, $id_jeux, $message, $note)
    {
        $this->_BDD->query("INSERT INTO `commentaire`(`id_user`, `id_jeu`, `Message`, `note`) VALUES ('$id_user','$id_jeux','$message', $note)");    
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
