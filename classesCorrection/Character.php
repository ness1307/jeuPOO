<?php

/**
 * Class Character
 * Generate a general class
 */

class Character {
    public $hp = 100;
    public $mp = 15;
    public $pseudo;
    public $atk = 15;
    protected $alive = true;

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
    
    public function isAlive() {
        if ($this->hp <= 0) {
            $this->hp = 0;
            $this->alive = false;
            return false;
        } else {
            return true;
        }
    }
}
