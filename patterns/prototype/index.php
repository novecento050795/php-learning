<?php
require 'vendor/autoload.php';

use Models\Person;

$person1 = new Person;
$person2 = $person1->getClone();
var_dump($person2);