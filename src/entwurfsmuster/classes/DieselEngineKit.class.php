<?php

class DieselEngineKit extends EngineKit {

    public function __construct() {
        parent::__construct();
        $this->acceleration = 3.1;
        $this->consumptionPerKilometer = 0.07;
        $this->cost = 6000;
    }


}