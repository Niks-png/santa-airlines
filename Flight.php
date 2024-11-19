<?php
class Flight {


    public function __construct(public $flightCode,
                                public $origin,
                                public $destination,
                                public $departureTime,
                                public $aircraft,) {
       
    }

    public function getFlightDetails() {
        return "Flight Code: {$this->flightCode}\n" .
               "From: {$this->origin->iataCode} To: {$this->destination->iataCode}\n" .
               "Departure: " . $this->departureTime->format('Y-m-d H:i:s') . "\n" .
               "Aircraft: {$this->aircraft->getDescription()}\n";
    }
}
?>