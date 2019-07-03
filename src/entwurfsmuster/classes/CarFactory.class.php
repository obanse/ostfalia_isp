<?php

class CarFactory {

    public static function createCar($name, $decorators = array(), $engineKit = null) {
        $car = new Car($name);
        foreach ($decorators as $decorator) {
            $car = new $decorator($car);
        }
        if (is_object($engineKit)) {
            $car->insertEngine($engineKit);
        }
        return $car;
    }
}