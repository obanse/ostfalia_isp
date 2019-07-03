<?php

class Car extends CarBase {

    protected $name = '';
    protected $maxSpeed = 50.0;
    protected $turnSpeed = 14.0;
    protected $acceleration = 3.47;
    protected $deceleration = 10.0;
    protected $cost = 12000;
    protected $kilometersDriven = 0.0;
    protected $consumptionPerKilometer = 0.1;
    protected $tankSize = 50.0;
    protected $tankStatus = 50.0;
    protected $engineKit = null;
    protected $observers = array();

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function getName(): string {
        $name = $this->name;
        if (is_object($this->engineKit)) {
            $name .= ' with ' . $this->engineKit->getName();
        }
        return $name;
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
        if (is_object($this->engineKit)) {
            return $this->engineKit->getAcceleration();
        }
        return $this->acceleration;
    }

    public function getDeceleration(): float
    {
        return $this->deceleration;
    }

    public function getCost(): int
    {
        $prize = $this->cost;
        if (is_object($this->engineKit)) {
            $prize += $this->engineKit->getCost();
        }
        return $prize;
    }

    public function getKilometersDriven(): float {
        return $this->kilometersDriven;
    }

    public function getConsumptionPerKilometer(): float
    {
        if (is_object($this->engineKit)) {
            return $this->engineKit->getConsumptionPerKilometer();
        }
        return 0.0;
    }

    public function getEngineKit() {
        return $this->engineKit;
    }

    public function attachObserver($observer) {
        if (is_object($observer) && $observer instanceof CarObserver) {
            $this->observers = array_merge($this->observers, array($observer));
        }
    }

    public function detachObserver($observer) {
        $this->observers[] = array_diff($this->observers, array($observer));
    }

    public function notify() {
        foreach ($this->observers as $observer) {
            $observer->update($this);
        }
    }

    public function getTankSize(): float {
        return $this->tankSize;
    }

    public function getTankStatus(): float {
        return $this->tankStatus;
    }

    public function insertEngine($engineKit) {
        if (!is_object($this->engineKit)) {
            $this->engineKit = $engineKit;
        }
        return ($this->engineKit != null);
    }

    public function removeEngine() {
        $this->engineKit = null;
    }

    public function drive($amount) {
        if (is_object($this->engineKit)) {
            $this->kilometersDriven += $amount;
            // $this-notify();
        } else {
            print '<br><span style="color: red">No engine!</span>';
        }
        return $this->kilometersDriven;
    }

    public function useEnergySource($amount) {
        $this->tankStatus -= $amount;
        $this->notify();
        return $this->tankStatus;
    }

    public function fillTank($amount) {
        $spaceLeft = $this->tankSize - $this->tankStatus;
        if ($amount > $spaceLeft) {
            print '<span style="color: red">Tried to fill more than possible! Just used ' . $amount - $spaceLeft . '</span>';
            $this->tankStatus = $this->tankSize;
        } else {
            $this->tankStatus += $amount;
        }
        $this->notify();
        return $this->tankStatus;
    }

}