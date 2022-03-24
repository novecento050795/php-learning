<?php
namespace Models;

use Models\CloneInterface;

class Person implements CloneInterface {

  public function getClone(): Person {
    $object = clone $this;
    // do something else
    echo "Person clonned successfully!";
    return $object;
  }
}
