<?php

class Mage extends Character {
  
    public function __construct($pseudo) {
        $this->pseudo = $pseudo;
        $this->mana = $this->mana * 10;
        $this->hp = 300;
    }


    public function attack($target) {
        $this->mana -= $this->atk;
        $target->hp -= $this->atk;
        $target->isAlive();
        
        if ($this->mana <= 0) {
            $this->atk=0;
            $status = "$this->pseudo ne peut plus attaquer. "; 
            return $status;
        } else {
            $status = "$this->pseudo attaque $target->pseudo et il lui reste $this->mana points de mana! et il reste $target->hp point de vie à $target->pseudo.";
            return $status;
        }
    }

}
 
