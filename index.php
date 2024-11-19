<?php
include_once "Aircraft.php";
include_once "Airport.php";
require_once 'Flight.php';



echo"skibidi toilet ✔😜🐱‍👤🐱‍👤🐱‍👤<br><br>";
$manalidmasina =new Aircraft ("airbuss","A220-300",120,850);
var_dump($manalidmasina);




echo"<br><br>";
$manalidosta =new Airport ("RIX", 56.924, 23.971);
var_dump($manalidosta);




echo"<br><br>";
$departureTime = new DateTime("2024-11-25 15:30:00", new DateTimeZone('Europe/Riga'));
$flight = new Flight("SA503", $origin, $destination, $departureTime, $Aircraft);

// Izvadām lidojuma detaļas
echo $flight->getFlightDetails();
?>
