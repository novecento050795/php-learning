<?php
use Factory\AbstractFactoryRace; 

use Units\Alien\AlienFootman;
use Units\Alien\AlienTransport;
use Units\Alien\AlienWeaponry;

class ZombieFactory extends AbstractFactoryRace
{
    /**
     * @return Footman
     */
    
    public function createFootman()
    {
        return new AlienFootman();
    }

    /**
     * @return Transport
     */

    public function createTransport()
    {
        return new AlienTransport();
    }

    /**
     * @return Weaponry
     */

    public function createWeaponry()
    {
        return new AlienWeaponry();
    }
}