<?php
namespace Transports;

use Transports\Transport;

class Ship implements Transport {
  public function deliver() {
    return "Поплыли!";
  }
}