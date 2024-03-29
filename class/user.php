<?php
class user
{
    //priver :
    private $_id;
    private $_email;
    private $_mdp;
    private $_mdpConfirm;
    private $_nom;
    private $_role;
    private $_BDD;



    //public:
    public function __construct($BDD)
    {
        $this->_BDD = $BDD;
    }
    //fonction pour qui connecter le user
    public function verifUserConnect($speudo, $Mdp)
    {
        $speudo = htmlspecialchars($speudo);
        $Mdp = hash('sha256', $Mdp);
        $request = $this->_BDD->prepare("SELECT * FROM user WHERE Nom_user = ? AND Mdp = ?"); //vérification des information du user
        $request->execute(array($speudo, $Mdp));
        $userExist = $request->rowCount();

        if ($userExist == 1) {
            $data = $request->fetch();
            $_SESSION['id'] = $data['id_user'];
            $this->_role = $data['Admin'];
            $this->_nom = $data['Nom_user'];
            echo '<meta http-equiv="refresh" content="0">';
            return "succesConnect";
        } else {
            return "userDoesntExist";
        }
    }

    public function deconnection()
    {
        session_destroy();
        echo  '<meta http-equiv = "refresh" content = "0">';
    }
    
    //fonction pour l'inscription du user
    public function registUser($speudo, $mdp, $confMdp)
    {
        $speudo = htmlspecialchars($speudo);
        if ($mdp == $confMdp) {
            $mdp = hash('sha256', $mdp);
            $Nom = $speudo;
            $vérifNam = $this->_BDD->prepare("SELECT * FROM `user` WHERE `Nom_user` = ?"); //vérification si le nom d'utilisateur et disponible
            $vérifNam->execute(array($Nom));
            $userExist = $vérifNam->rowCount();
            if ($userExist == 1) {
                return "mailUsed";
            } else {
                $requeteInscription = $this->_BDD->query("INSERT INTO `user`(`Nom_user`, `Mdp`, `Admin`) VALUES ('$Nom ', '$mdp' ,'FALSE')"); //réscription du user en base
                $this->verifUserConnect($speudo, $confMdp);
                return "succesRegister";
            }
        } else {
            return "mdpDifferents";
        }
    }


    public function giveUser($id){
        $vérifNam = $this->_BDD->prepare("SELECT * FROM `user` WHERE `id_user` = ?");
        $vérifNam->execute(array($id));
        $data = $vérifNam ->fetch();
        $this->_nom = $data['Nom_user'];
        $this->_role = $data['Admin'];
        $this->_mdp = $data['Mdp'];
        $this->_id = $id;
    }

    public function getNam(){
        return $this->_nom;
    }

    public function getRole(){
        return $this->_role;
    }

    public function getMdp(){
        return $this->_mdp;
    }

    public function getId(){
        return $this->_id;
    }


    //fonction pour le user nom comtact
    public function conactat($Nom, $prenom, $mail, $message)
    {
        $message = htmlspecialchars($message);
    }
    //fonction pour commenter les jeu
    public function commetaire($id_user, $id_jeux, $message)
    {
        $message = htmlspecialchars($message);
        $this->_BDD->query("INSERT INTO `commentaire`(`id_user`, `id_jeu`, `Message`) VALUES ('$id_user','$id_jeux','$message')");
    }
    //fonction pour évaluer les jeu
    public function note($id_user, $id_jeux, $note)
    {
        $this->_BDD->query("INSERT INTO `note`(`id_user`, `id_jeu`, `note`) VALUES ($id_user,$id_jeux,$note)");
    }
    //fonction qui gère les message d'erreur
    public function errorGestion($erreur)
    {
        if ($erreur == "userDoesntExist") {
            echo "<p class='red-text'>nom d'utilisateur ou mot de passe incorrect</p>";
        }
        if ($erreur == "noPassword") {
            echo "<p class='red-text'>Merci de remplir le champ mot de passe</p>";
        }
        if ($erreur == "invalidMail") {
            echo "<p class='red-text'> nom d'utilisateur est invalide</p>";
        }
        if ($erreur == "succesConnect") {
            echo "<p class='green-text'>Connecté!</p>";
        }
        if ($erreur == "mdpDifferents") {
            echo "<p class='red-text'>Les deux mots de passes ne correspondent pas</p>";
        }
        if ($erreur == "mailInvalide") {
            echo "<p class='red-text'>nom d'utilisateur est incorrecte</p>";
        }
        if ($erreur == "mdpVide") {
            echo "<p class='red-text'>Merci de remplir le champ mot de passe</p>";
        }
        if ($erreur == "nomPrenomVide") {
            echo "<p class='red-text'>Merci de remplir les champs nom et prenom</p>";
        }
        if ($erreur == "mailUsed") {
            echo "<p class='red-text'>nom d'utilisateur déjà utilisée</p>";
        }
        if ($erreur == "succesRegister") {
            echo "<p class='green-text'>Vous êtes inscris!</p>";
        }
    }
}
