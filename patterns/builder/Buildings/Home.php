<?php
namespace Buildings;

use Buildings\BuildingInterface;
use Exception;

class Home implements BuildingInterface {

  public $roof;
  public $windows;
  public $doors;
  public $walls;

  public function __construct(
    String $roof = null,
    String $windows = null,
    String $doors = null,
    String $walls = null
  ) {   
    $this->roof = $roof;
    $this->windows = $windows;
    $this->doors = $doors;
    $this->walls = $walls;
  }

  public function sell(): void {
    
    foreach ($this as $key => $value) {
      if(!$value)
        throw new Exception("{$key} is required!");
    }
    echo "This building sold successfully!!! \n";
  }

}