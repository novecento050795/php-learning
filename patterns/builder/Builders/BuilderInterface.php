<?php
namespace Builders;

use Buildings\BuildingInterface;

interface BuilderInterface {
  public function setRoof(String $roof): BuilderInterface;
  public function setWindows(String $windows): BuilderInterface;
  public function setDoors(String $doors): BuilderInterface;
  public function setWalls(String $walls): BuilderInterface;
  public function getResult(): BuildingInterface;
}