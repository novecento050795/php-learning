<?php
namespace Transports;

use Transports\Transport;

class Truck implements Transport {

  public function deliver() {
    return "Поехали!";
  }
}