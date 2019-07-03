<?php

class HydrogenEngine {

    public $label = 'Hydrogen Engine';
    public $charge = 20000;
    public $acceleration = 13.12;
    public $usagePerHundredMiles = 10;

    public function getAcceleration() {
        return $this->acceleration;
    }

    public function getCharge() {
        return $this->charge;
    }

    public function getLabel() {
        return $this->label;
    }

    public function getUsagePerHundredMiles() {
        return $this->usagePerHundredMiles;
    }

}