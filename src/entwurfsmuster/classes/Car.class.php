<?php

require_once("CarBase.class.php");

class Car extends CarBase {

    protected $name = '';
    protected $maxSpeed = 50.0;
    protected $turnSpeed = 14.0;
    protected $acceleration = 3.47;
    protected $deceleration = 10.0;
    protected $cost = 17000;
    protected $kilometersDriven = 0.0;
    protected $consumptionPerKilometer = 0.1;
    protected $engineKit = 'Standard';
    protected $tankSize = 50.0;
    protected $tankStatus = 50.0;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function getName(): string {
        return $this->name;
    }

    public function getMaxSpeed(): float {
        return $this->maxSpeed;
    }

    public function getTurnSpeed(): float
    {
        return $this->turnSpeed;
    }

    public function getAcceleration(): float
    {
        return $this->acceleration;
    }

    public function getDeceleration(): float
    {
        return $this->deceleration;
    }

    public function getCost(): int
    {
        return $this->cost;
    }

    public function getKilometersDriven(): float {
        return $this->kilometersDriven;
    }

    public function getConsumptionPerKilometer(): float
    {
        return $this->consumptionPerKilometer;
    }

    public function getEngineKit() {
        return $this->engineKit;
    }

    public function getTankSize(): float {
        return $this->tankSize;
    }

    public function getTankStatus(): float {
        return $this->tankStatus;
    }
}