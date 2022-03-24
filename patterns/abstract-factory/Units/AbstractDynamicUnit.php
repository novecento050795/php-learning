<?php
namespace Units;

use Units\AbstractUnit;

abstract class AbstractDynamicUnit extends AbstractUnit{
  public $atack = 0;

  public function atack(AbstractUnit $unit): int {
    return $unit->hp -= $this->atack;
  }
}