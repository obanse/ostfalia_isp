<?php

abstract class TrackPart {

    protected $name = '';
    protected $length = 0.0;
    protected $straightLength = 0.0;
    protected $turnLength = 0.0;

    public function __construct($name, $length) {
        $this->name		= $name;
        $this->length	= $length;
    }

    abstract public function driveOnTrack($car, $initialSpeed, &$resultingSpeed);

    public function getLength() {
        return $this->length;
    }

    public function getTurnLength() {
        return $this->turnLength;
    }

    public function getStraightLength() {
        return $this->straightLength;
    }

    public function getName() {
        return $this->name;
    }


    public function printInfo() {
        printf("The track called <i>{$this->getName()}</i> has got a length of %.3f kilometers.<br>", $this->getLength());
    }

    public function simulateDriveOnTrack($car, $maxSpeed, $initialSpeed, &$resultingSpeed)
    {
        $toDrive = $this->length * 1000;
        $time    = 0.0;
        if ($initialSpeed < $maxSpeed) {
            $maxSpeedLength = ($maxSpeed * $maxSpeed) / (2 * $car->getAcceleration());
            $fullSpeedTime = ($maxSpeed - $initialSpeed) / $car->getAcceleration();
            if ($toDrive < $maxSpeedLength) {
                //geschwindigkeit am ende der Strecke
                $resultingSpeed = sqrt(2 * $car->getAcceleration() * $toDrive + $initialSpeed * $initialSpeed);
                $time += ($resultingSpeed - $initialSpeed) / $car->getAcceleration();
                $toDrive = 0;
            } else {
                $resultingSpeed = $maxSpeed;
                $driven = 0.5 * $car->getAcceleration() * $fullSpeedTime * $fullSpeedTime + $fullSpeedTime * $initialSpeed;
                $toDrive = $toDrive - $driven;
                $time += $fullSpeedTime;
            }
        } else if ($initialSpeed > $maxSpeed) {
            $brakingTime = ($initialSpeed - $maxSpeed) / $car->getDeceleration();
            $time += $brakingTime;
        }
        if ($toDrive > 0) {
            $resultingSpeed = $maxSpeed;
            $time += $toDrive / $maxSpeed;
        }
        // $carDriven = $car->drive($this->length);
        return $time;
    }


}