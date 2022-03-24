<?php
require 'vendor/autoload.php';

use Units\Alien\{
  AlienFootman,
  AlienTransport,
  AlienWeaponry
};

use Units\Zombie\{
  ZombieFootman,
  ZombieTransport,
  ZombieWeaponry
};

$unit1 = new AlienFootman;
$unit2 = new ZombieWeaponry;

echo "{$unit2->hp}\n";
$unit1->atack($unit2);
echo "{$unit2->hp}\n";

