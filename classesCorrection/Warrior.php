/**********************
* Fichier Warrior.php
**********************/

<?php

class Warrior extends Character {
    public function __construct($pseudo) {
        $this->pseudo = $pseudo;
    }
   
    public function attack($target) {
        $rand = rand(1, 10);
        $target->hp -= $this->atk + $rand;
        $target->isAlive();
        $status = "$this->pseudo attaque $target->pseudo qui a $target->hp points de vie!";
        return $status;
    }
}