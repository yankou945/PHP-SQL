
<?php

class Guerrier{
   
    public $arme;
    public $force;
    public $nom;
    public $niveau;
    public $age;

    
    public function __construct($L, $H)
    {
        $this->arme = $W;
        $this->force = $F;
        $this->nom = $N;
        $this->niveau = $L;
        $this->age = $A;
    
    }   
    
    
    public function getArme(){
        return $this->arme;
    }
    

    public function getForce(){
        return $this->force;
    }
    
    public function getNom(){
        return $this->nom;
    }
    
    public function getNiveau(){
        return $this->Niveau;
    }
    public function getAge(){
        return $this->age;
    }
    
    public function setArme($NewArme){
        $this->arme = $NewArme;
    }
    
    public function setNiveau($NewNiveau){
        $this->niveau = $NewNiveau;
    }

    public function setAge($NewAge){
        $this->age = $NewAge;
    }


    public function setForce($NewForce){
        $this->force = $NewForce;
    }

    public function setNom($NewNom){
        $this->nom = $NewNom;
    }




    
    public function getInfo(){
        return "age : " . $this->age.'<br>'. "niveau : " .$this->niveau.'<br>'. "force : " .$this->force. "nom : " .$this->nom.'<br>'. "arme : " .$this->arme.'<br>';

    }
}


?>