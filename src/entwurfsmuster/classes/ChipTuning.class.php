<?php

class ChipTuning extends CarDecorator {

    public function __construct($car) {
        parent::__construct($car, 'Chip - Tuning');
    }

    public function getMaxSpeed(): float {
        return $this->car->getMaxSpeed() * 1.20;
    }

    public function getConsumptionPerKilometer(): float {
        return $this->car->getConsumptionPerKilometer() * 0.9;
    }

    public function getCost(): int {
        return $this->car->getCost() + 1000;
    }


}