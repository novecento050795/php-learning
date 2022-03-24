<?php

use Factory\RoadLogistics;
use Factory\SeaLogistics;

require 'vendor/autoload.php';

echo (new SeaLogistics)->createTransport()->deliver() . "\n";
echo (new RoadLogistics)->createTransport()->deliver() . "\n";