<?php

class jeux
{
    private $_id;
    private $_nom;
    private $_image1;
    private $_image2;
    private $_image3;
    private $_image4;
    private $_description;
    private $_BDD;

    public function __construct($BDD)
    {
        $this->_BDD = $BDD;
        $this->_image1 = "test.png";
    }

    public function ajoutjeux($nom, $image1, $image2, $image3, $image4, $description)
    {
        $nom = htmlspecialchars($nom);
        $image1 = htmlspecialchars($image1);
        $image2 = htmlspecialchars($image2);
        $image3 = htmlspecialchars($image3);
        $image4 = htmlspecialchars($image4);
        $description = htmlspecialchars($description);
    }

    public function getjeux($id)
    {
        $requetjeu = $this->_BDD->query("SELECT * FROM `jeux` WHERE `id_jeux`= $id");
        $donnéjeux = $requetjeu->fetch();
        $this->_nom = $donnéjeux['Nom'];
        $this->_image1=$donnéjeux['Image'];
        $this->_image2=$donnéjeux['Image1'];
        $this->_image3=$donnéjeux['Image2'];
        $this->_image4=$donnéjeux['Image3'];
        $this->_description = $donnéjeux['Description'];
    }

    public function removejeux($id){
        echo "activer";
        unlink('images/'.$this->_image1);
        unlink('images/'.$this->_image2);
        unlink('images/'.$this->_image3);
        unlink('images/'.$this->_image4);
    }

    public function getNom(){
        return $this->_nom;
    }

    public function getimage1(){
        return $this->_image1;
    }

    public function getimage2(){
        return $this->_image2;
    }

    public function getimage3(){
        return $this->_image3;
    }

    public function getimage4(){
        return $this->_image4;
    }

    public function getdescription(){
        return $this->_description;
    }
}
