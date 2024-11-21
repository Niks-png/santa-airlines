<?php
class Flight {
    public function __construct(
        public $flightCode,   // lidojuma kods
        public $origin,       // izlidošanas lidosta (Airport objekts)
        public $destination,  // galamērķa lidosta (Airport objekts)
        public $departureTime, // izlidošanas laiks (DateTime objekts)
        public $aircraft      // lidmašīna (Aircraft objekts)
    ) {}

    // __toString metode, lai izdrukātu lidojumu
    public function __toString() {
        return "Flight {$this->flightCode}: {$this->origin} to {$this->destination}, departing at {$this->departureTime->format('Y-m-d H:i:s')} on aircraft {$this->aircraft}.";
    }

    // Pievienojam getDistance metodi, lai aprēķinātu attālumu starp divām lidostām
    public function getDistance() {
        // Aprēķins, izmantojot Haversine formulu
        $lat1 = deg2rad($this->origin->platumagradi);
        $lon1 = deg2rad($this->origin->garumagradi);
        $lat2 = deg2rad($this->destination->platumagradi);
        $lon2 = deg2rad($this->destination->garumagradi);

        // Haversine formula
        $dlat = $lat2 - $lat1;
        $dlon = $lon2 - $lon1;
        $a = sin($dlat / 2) * sin($dlat / 2) + cos($lat1) * cos($lat2) * sin($dlon / 2) * sin($dlon / 2);
        $c = 2 * atan2(sqrt($a), sqrt(1 - $a));

        // Zemes rādiuss (km)
        $earth_radius = 6371;

        // Attālums starp divām vietām (km)
        return $earth_radius * $c;
    }

    // Pievienojam getDuration metodi, lai aprēķinātu lidojuma ilgumu minūtēs
    public function getDuration() {
        // Iegūstam attālumu starp lidostām (km)
        $distance = $this->getDistance();

        // Lidmašīnas vidējais ātrums (km/h)
        $averageSpeed = $this->aircraft->vid_atru;

        // Aprēķinām lidojuma ilgumu stundās
        $durationInHours = $distance / $averageSpeed;

        // Pārvēršam stundas uz minūtēm
        $durationInMinutes = $durationInHours * 60;

        // Pievienojam 30 minūtes sagatavošanās laikam
        $totalDuration = $durationInMinutes + 30;

        return round($totalDuration); // Atgriežam laiku minūtēs
    }
}
?>