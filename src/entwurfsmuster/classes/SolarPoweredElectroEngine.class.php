<?php

class SolarPoweredElectroEngine {

    protected $label = 'Solar Powered Electro-Engine';
    protected $charge = 20000;
    protected $acceleration = 6;

    public function getAcceleration() {
        return $this->acceleration;
    }

    public function getCharge() {
        return $this->charge;
    }

    public function getLabel() {
        return $this->label;
    }
}