<?php

class GasEngineKit extends EngineKit {

    public function __construct() {
        parent::__construct();
        $this->acceleration = 3.47; // 0 - 100 in 8 seconds
        $this->consumptionPerKilometer = 0.1;
        $this->cost = 5000;
    }
}