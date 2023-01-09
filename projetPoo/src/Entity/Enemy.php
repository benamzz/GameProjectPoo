<?php

namespace App\Entity;

final class Enemy extends AbstractEntity
{
  public function __construct(string $name, int $power, $health)
  {   
    $this->name = "El Gladiator";
    $this->power = random_int(10, 40);
    parent::__construct($name, $power, $power*3);
  }
}