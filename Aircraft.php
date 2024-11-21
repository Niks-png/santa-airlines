<?php
class Aircraft {
    public function __construct(
        public $rizzotajs,  // ražotājs
        public $model,      // modelis
        public $sedskaits,  // sēdvietu skaits
        public $vid_atru    // vidējais ātrums (km/h)
    ) {}

    // Pievienota __toString metode, lai varētu pareizi konvertēt objektu uz virkni
    public function __toString() {
        return "{$this->rizzotajs} {$this->model} ({$this->sedskaits} seats, {$this->vid_atru} km/h)";
    }
}
?>