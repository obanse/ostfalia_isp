<?php

class Turn extends TrackPart {

    public function __construct($name, $length) {
        parent::__construct($name, $length);
        $this->turnLength = $length;
    }

    public function driveOnTrack($car, $initialSpeed, &$resultingSpeed) {
        return $this->simulateDriveOnTrack($car, $car->getTurnSpeed(), $initialSpeed, $resultingSpeed);
    }

    public function printInfo() {
        print '<fieldset style=\"-moz-border-radius: 5px 5px 5px 5px;\"><table cellspadding=0 cellspacing=0><tr><td><img src="../images/uturn_small.png"></td><td>';
        parent::printInfo();
        print '</td></tr></table></fieldset>';
    }
}