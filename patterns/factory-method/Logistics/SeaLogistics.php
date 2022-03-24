<?php
namespace Factory;

use Logistics\Logistics;
use Transports\Ship;

class SeaLogistics implements Logistics {
  public function createTransport() {
    return new Ship;
  }
}