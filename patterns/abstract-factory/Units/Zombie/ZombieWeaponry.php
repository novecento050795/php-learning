<?php
namespace Units\Zombie;

use Interfaces\Units\Weaponry;

use Units\AbstractStaticUnit;

class ZombieWeaponry extends AbstractStaticUnit implements Weaponry {
  public $hp = 100;
}
