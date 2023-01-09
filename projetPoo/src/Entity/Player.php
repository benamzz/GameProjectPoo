<?php

namespace App\Entity;
use App\Entity\AbstractEntity;
use \App\Interface\InterfaceCapacite;

final class Player extends AbstractEntity implements InterfaceRest
{
    private int $maxHealth;

    public function __construct($name)
    {        
        $this->health = 100;
        $this->power = random_int(20,40);
        parent::__construct($name,);
    }

    //  Function qui permet de reprendre des points de vie
    public function getRest(): void
    {
        $rest = $this->power;
        $this->health += $rest;
        if($this->health > $this->maxHealth){
            $this->health = $this->maxHealth;
            echo "Votre santé est à son maximum";
        }
        print_r("Vous vous êtes regénéré de " . $rest . " point de vie\n");
    }
}