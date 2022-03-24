<?php
namespace Buildings;

interface BuildingInterface {

  public function __construct(
    String $roof,
    String $windows,
    String $doors,
    String $walls
  );

  public function sell(): void;
}