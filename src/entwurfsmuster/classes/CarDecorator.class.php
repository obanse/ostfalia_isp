<?php

abstract class CarDecorator extends CarBase {

    protected $car = null;

    public function __construct($car, $name) {
        $this->car = $car;
        $this->name = $name;
    }

    public function getMaxSpeed(): float {
        return $this->car->getMaxSpeed();
    }

    public function getTurnSpeed(): float {
        return $this->car->getTurnSpeed();
    }

    public function getAcceleration(): float {
        return $this->car->getAcceleration();
    }

    public function getDeceleration(): float {
        return $this->car->getDeceleration();
    }

    public function getCost(): int {
        return $this->car->getCost();
    }

    public function getName() {
        return $this->car->getName();
    }

    public function getConsumptionPerKilometer(): float {
        return $this->car->getConsumptionPerKilometer();
    }

    public function __call($name, $arguments) {
        $return = false;
        if (method_exists($this->car, $name)) {
            $return = call_user_func_array(array($this->car, $name), $arguments);
        } else {
            $return = $this->car->__call($name, $arguments);
        }
        return $return;
    }


}