<?php
namespace Factory;

use Logistics\Logistics;
use Transports\Truck;

class RoadLogistics implements Logistics {
  public function createTransport() {
    return new Truck;
  }
}