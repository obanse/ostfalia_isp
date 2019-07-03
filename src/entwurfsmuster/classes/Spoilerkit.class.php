<?php

class Spoilerkit extends CarDecorator {

    public function __construct($car) {
        parent::__construct($car, 'Spoiler-kit');
    }

    public function getMaxSpeed(): float {
        return $this->car->getMaxSpeed() * 0.9;
    }

    public function getTurnSpeed(): float {
        return $this->car->getTurnSpeed() * 1.2;
    }

    public function getCost(): int {
        return $this->car->getCost() + 2000;
    }

    public function getName() {
        return $this->car->getName();
    }

    public function getConsumptionPerKilometer(): float {
        return $this->car->getConsumptionPerKilometer() * 1.05;
    }


}