<?php
/*
* Class general
*
*/


class Character {
    public $hp = 180;    //vie
    public $mana = 50;    //magic
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
        $status = "$this->pseudo attaque $target->pseudo et se retrouve à $target->hp points de vie!";
        return $status;
    }
 
    public function isAlive() {
        if ($this->hp <= 0) {
            $this->alive = false;
            $this->hp = 0;            
            return false;
        } else {
            return true;
        }
    }


}