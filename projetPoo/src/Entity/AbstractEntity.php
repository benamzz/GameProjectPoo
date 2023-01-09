<?php
namespace App\controller;

abstract class AbstractEntity
{

    protected string $name;
    protected int $power, $health;
    protected bool $isAlive;


    public function __construct(string $name, int $health, int $power )
    {   
        $this->name = $name;
        $this->health = $health;
        $this->power = $power;       
        $this->isAlive = true;
    }

    public function getHealth(): int
    {
        return $this->health;
    }

    public function getPower(): int
    {
        return $this->power;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function isAlive(): bool
    {
        return $this->isAlive;
    }

    public function attack(): int
    {
        $attack = $this->power;
        echo $this->name . " lance une attaque\n";
        return $attack;
    }

    public function getDamage(int $attack): void
    {
        print_r($this->name . " perd ".$attack ." point de vie.\n");
        $this->health -= $attack;

        if ($this->health <= 0) {
            $this->alive = false;
            print_r("\n Aujourd'hui ". $this->name . " ne se relèvera pas, il a été vaincu !!\n");
        }
    }
}