<?php

require_once __DIR__ . "/../base/localWarrior.php";


$GLOBALS['warriorID'] = 'CNA_Danilo'; //modifier la variable globale

// Définissez vos class de combattants
abstract class Warrior extends LocalWarrior {
    public $id;
    public $name;
    public $speed;
    public $life;
    public $shield;
    public $imageUrl;
    public $weapon;
    
    public function __construct($id){
        $this->id=$id;
        $this->speed=30;
        $this->life=100;
        $this->shield=20;

    }


    public function setWeapon(Weapon $weapon) {

        $this->weapon = $weapon;
    }

};

// class StartrekWarrior{} //création classe StartrekWarrior

// class MarvelWarrior{} //création classe MarvelWarrior

// class PokemonWarrior{}//création classe PokemonWarrior


// faire hériter la classe de Warrior
class StartrekWarrior extends Warrior {
    public $mentalPower;
    public function __construct($id){
        
        parent::__construct($id);
        $this->mentalPower=8;  

    }

    public function power() {
      return $this->mentalPower;
    } 

}


class MarvelWarrior extends Warrior{
    public $superPower;
    public function __construct($id){

        parent::__construct($id);
        $this->superPower=100;

    }

    public function power() {
        return $this->superPower;
    }  
    
} 


class PokemonWarrior extends Warrior{
    public $level;
    public function __construct($id){

        parent::__construct($id);
        $this->level=1;

    }
    
    public function power() {
        return $this->level;
        
    }
    
}

class Weapon {
    public $id;
    public $strength;
    public $imageUrl;

    public function __construct($id, $strength){
        $this->id=$id;
        $this->strength=$strength;

    }



}




// public function __construct(int $id, string $name, int $speed, int $life, int $shield, string $imageUrl, string $weapon ){
//     $this->id=$id;
//     $this->name=$name;
//     $this->speed=$speed;
//     $this->life=$life;
//     $this->shield=$shield;
//     $this->imageUrl=$imageUrl;
//     $this->weapon=$weapon;  
// }














