<?php
// Iekļaujam nepieciešamās klases
include_once "Aircraft.php";
include_once "Airport.php";
require_once 'Flight.php';

// Piemērs: lidmašīnas objekta izveide
$manalidmasina = new Aircraft("Airbus", "A220-300", 120, 850);
var_dump($manalidmasina); // Izvērtējot objektu, neizmantojiet dump, ja vēlaties stringu

// Piemērs: lidostas objekta izveide
$manalidosta = new Airport("RIX", 56.924, 23.971);
var_dump($manalidosta); // Izvērtējot objektu, neizmantojiet dump, ja vēlaties stringu


$mana2lidosta = new Airport("RIX",40.6413, -73.7781);
var_dump($mana2lidosta); // Izvērtējot objektu, neizmantojiet dump, ja vēlaties stringu

// Piemērs: lidojuma objekta izveide
$departureTime = new DateTime("2024-12-01 14:30", new DateTimeZone("Europe/Riga"));
$lidojums = new Flight("SA503", $manalidosta, $mana2lidosta, $departureTime, $manalidmasina);

// Izvērsta informācija par lidojumu
echo "Flight created: " . $lidojums . "<br>";

// Izsaucam getDistance metodi, lai iegūtu attālumu starp lidostām
echo "Distance: " . $lidojums->getDistance() . " km<br>";

// Izsaucam getDuration metodi, lai iegūtu lidojuma ilgumu minūtēs
echo "Duration: " . $lidojums->getDuration() . " minutes<br>";
?>
