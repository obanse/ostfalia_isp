<?php

class Turbo extends CarDecorator {

    public function __construct($car) {
        parent::__construct($car, 'Turbo');
    }

    public function getMaxSpeed(): float {
        return $this->car->getMaxSpeed() * 1.1;
    }

    public function getAcceleration(): float {
        return $this->car->getAcceleration() * 1.3;
    }

    public function getCost(): int {
        return $this->car->getCost() + 4000;
    }

    public function getConsumptionPerKilometer(): float {
        return $this->car->getConsumptionPerKilometer() * 1.3;
    }



}