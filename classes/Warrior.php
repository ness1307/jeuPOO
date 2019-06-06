<?php

class Warrior extends Character {


    public function __construct($pseudo) {
        $this->pseudo = $pseudo;
        $this->hp = 300;
        $this->atk = 30;
    }

    public function attack($target) {
        $lucky = rand(1 ,4);
        var_dump($lucky);
        if ($lucky == 1) {
            $this->atk = 50;
            $target->hp -= $this->atk;
            $target->isAlive();
            $status = "Num random: $lucky, $this->pseudo a fait une super attaque! et il reste $target->hp ponit de vie à Leo.";
            return $status;
        } elseif ($lucky == 2) {
            $this->atk = 10;
            $target->hp -= $this->atk;
            $target->isAlive();
            $status = "Num choisie: $lucky, $this->pseudo a fait une petite attaque! et il reste $target->hp point de vie à Leo.";
            return $status;
        } elseif ($lucky == 3) {
            $this->hp += 30;
            $target->isAlive();
            $status = "Luis a gagné $this->hp HP!";
            return $status;
        }
    }
    
}



