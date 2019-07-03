<?php

class WideTires extends CarDecorator {

    public function __construct($car) {
        parent::__construct($car, 'Wide - Tires');
    }  

    public function getTurnSpeed(): float {
        return $this->car->getTurnSpeed() * 1.1;
    }

    public function getCost(): int {
        return $this->car->getCost() + 1000;
    }

    public function getConsumptionPerKilometer(): float {
        return $this->car->getConsumptionPerKilometer() * 1.05;
    }



}