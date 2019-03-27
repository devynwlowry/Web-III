<?php 

require "vendor/autoload.php";


use Location\Coordinate;
use Location\Distance\Vincenty;

$coordinate1 = Coordinate(37.9715, 23.7267);
$coordinate2 = Coordinate(41.775928, -72.521500);

$calculate = new Vincenty();


echo $calculate = getDistance($coordinate1, $coordinate2);


?>