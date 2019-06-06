/**********************
* Fichier Mage.php
**********************/


<?php

class Mage extends Character {
    public function __construct($pseudo) {
        $this->pseudo = $pseudo;
        $this->mp = $this->mp * 2;
    }

    /**
     * Use to atack as a Mage
     *
     * @var string Use to target someone
     */
     


     
    public function attack($target) {
        $rand = rand(1, 5);
        $manaAtk = rand(1, 17);
        if ($this->mp >= $manaAtk) {
            $target->hp -= $manaAtk * $rand;
            $this->mp -= $manaAtk;
            $target->isAlive();
            $status = "$this->pseudo attaque $target->pseudo qui a $target->hp points de vie! Il reste $this->mp mp à $this->pseudo!";
        } else if ($this->mp > 0){
            $target->hp -= $this->mp * $rand;
            $this->mp = 0;
            $target->isAlive();
            $status = "$this->pseudo attaque $target->pseudo qui a $target->hp points de vie! Il reste $this->mp mp à $this->pseudo!";
        } else {
            $status = "$this->pseudo n'a plus de mana, et ne peut pas attaquer!";
        }

        return $status;
    }
}

