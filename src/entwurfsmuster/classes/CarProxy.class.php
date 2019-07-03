<?php

class CarProxy {

    protected $car = null;
    protected $energySourceRefilled;

    public function __construct($car = null) {
        $this->car = $car;
    }

    public function attachCar($car) {
        $this->car = $car;
    }

    public function detachCar() {
        $this->car = null;
    }

    public function getEnergySourceRefilled() {
        return $this->energySourceRefilled;
    }

    public function drive($amount) {
        if (is_object($this->car)) {
            $energySourceUsed = $this->car->getConsumptionPerKilometer() * $amount;
            printf('attempting drive of %.2f kilometers using %.2f liters of %.2f<br>' , $amount, $energySourceUsed, $this->car->getTankStatus());
            if ($energySourceUsed > $this->car->getTankSize()) {
                print '<span style="color: red">Will not drive, tank size not sufficient.</span><br>';
                return $this->car->getKilometersDriven();
            } else if($energySourceUsed > $this->car->getTankStatus()) {
                $needed = $energySourceUsed - $this->car->getTankStatus();
                printf('<span  style="color: orange">Refilling tank with %.2f Liters to be able to drive the track</span><br>', $needed);
                $this->car->fillTank($needed);
                $this->energySourceRefilled += $needed;
            }
            $this->useEnergySource($energySourceUsed);
            return $this->car->drive($amount);

        }
        return 0.0;
    }

    public function useEnergySource($amount) {
        if ($amount > $this->car->getTankStatus()) {
            $needed = $amount - $this->car->getTankStatus();
            $this->energySourceRefilled += $needed;
            printf('<span  style="color: orange">Refilling tank with %.2f liters to be able to use %.2f liters</span><br>', $needed, $amount);
        }
        return $this->car->useEnergySource($amount);
    }

    public function  __call($name,  $arguments) {
        $return = false;
        if (method_exists($this->car, $name)) {
            $return = call_user_func_array(array($this->car, $name), $arguments);
        } else {
            $return = $this->car->__call($name, $arguments);
        }
        return $return;
    }
}