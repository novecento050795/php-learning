<?php
namespace Builders;

use Builders\BuilderInterface;
use Buildings\BuildingInterface;
use Buildings\Home;

class HomeBuilder implements BuilderInterface {
  
  public function setRoof(String $roof): BuilderInterface {
    $this->roof = $roof;
    return $this;
  }

  public function setWindows(String $windows): BuilderInterface {
    $this->windows = $windows;
    return $this;
  }

  public function setDoors(String $doors): BuilderInterface {
    $this->doors = $doors;
    return $this;
  }

  public function setWalls(String $walls): BuilderInterface {
    $this->walls = $walls;
    return $this;
  }

  public function getResult(): BuildingInterface {
    return new Home(
      $this->roof,
      $this->windows,
      $this->doors,
      $this->walls
    );
  }

}