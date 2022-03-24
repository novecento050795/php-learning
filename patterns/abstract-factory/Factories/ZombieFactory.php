<?php
namespace Factory;

use Factory\AbstractFactoryRace;

use Units\Zombie\ZombieFootman;
use Units\Alien\ZombieTransport;
use Units\Zombie\ZombieWeaponry;

class ZombieFactory extends AbstractFactoryRace
{
    /**
     * @return Footman
     */

    public function createFootman()
    {
        return new ZombieFootman();
    }

    /**
     * @return Transport
     */

    public function createTransport()
    {
        return new ZombieTransport();
    }

    /**
     * @return Weaponry
     */

    public function createWeaponry()
    {
        return new ZombieWeaponry();
    }
}