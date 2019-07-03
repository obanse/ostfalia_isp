<?php

class HydrogenEngineKit extends EngineKit {

    protected $hydrogenEngine = null;

    public function __construct() {
        $this->hydrogenEngine = new HydrogenEngine();
    }
    
    public function getAcceleration() {
        return $this->hydrogenEngine->getAcceleration() * 1.0;
    }
    
    public function getConsumptionPerKilometer() {
        return 0.0;
    }
    
    public function getCost() {
        return $this->hydrogenEngine->getCharge();
    }
    
    public function getName() {
        return $this->hydrogenEngine->getLabel();
    }

}