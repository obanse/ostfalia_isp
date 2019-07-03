<?php

class SolarPoweredElectroEngineKit extends EngineKit {

    protected $electroEngine = null;

    public function __construct() {
        $this->electroEngine = new SolarPoweredElectroEngine();
    }

    public function getAcceleration() {
        return $this->electroEngine->getAcceleration() * 1.0;
    }

    public function getConsumptionPerKilometer() {
        return 0.0;
    }

    public function getCost() {
        return $this->electroEngine->getCharge();
    }

    public function getName() {
        return $this->electroEngine->getLabel();
    }

}