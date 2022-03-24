<?php
namespace Units\Alien;

use Interfaces\Units\Footman;
use Factory\AbstractFactoryRace; 

use Units\AbstractDynamicUnit;

class AlienFootman extends AbstractDynamicUnit implements Footman {
  public $atack = 30;
}
