<?php 

require "vendor/autoload.php";


use Location\Coordinate;
use Location\Distance\Vincenty;

$coordinate1 = new Coordinate(37.9715, 23.7267);
$coordinate2 = new Coordinate(41.775928, -72.521500);

$calculate = new Vincenty();

echo "This is what the distance is in Meters: ";
echo $calculate -> getDistance($coordinate1, $coordinate2);
echo "<br>";
echo "And this is what the distance is in Miles: ";
echo $calculate -> getDistance($coordinate1, $coordinate2) * 0.000621371192;

// $conversion = 0.000621371192;



?>