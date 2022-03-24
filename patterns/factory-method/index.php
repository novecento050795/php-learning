<?php
require 'vendor/autoload.php';

use Factory\RoadLogistics;
use Factory\SeaLogistics;

echo (new SeaLogistics)->createTransport()->deliver() . "\n";
echo (new RoadLogistics)->createTransport()->deliver() . "\n";