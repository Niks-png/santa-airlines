<?php
class Airport {
    public function __construct(
        public $iatacods,    // IATA kods (lidostas kods)
        public $platumagradi, // platums
        public $garumagradi  // garums
    ) {}

    public function __toString() {
        return "{$this->iatacods} ({$this->platumagradi}, {$this->garumagradi})";
    }
}
?>