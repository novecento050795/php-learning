<?php
require 'vendor/autoload.php';

use Builders\HomeBuilder;

$home = (new HomeBuilder)
  ->setRoof("good roof")
  ->setDoors("good doors")
  ->setWalls("good walls")
  ->setWindows("good windows")
  ->getResult();

var_dump($home);

$home->sell();
