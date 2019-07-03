<?php

abstract class EngineKit {

    protected $name = 'EngineKit';
    protected $acceleration = 0.00;
    protected $consumptionPerKilometer = 0.00;
    protected $cost = 0;

    public function __construct() {
        $this->name = get_class($this);
    }

    public function setName($name) {
        $this->name = $name;
    }

    public function getName() {
        return $this->name;
    }

    public function getAcceleration() {
        return $this->acceleration;
    }

    public function getConsumptionPerKilometer() {
        return $this->consumptionPerKilometer;
    }

    public function getCost() {
        return $this->cost;
    }

} 