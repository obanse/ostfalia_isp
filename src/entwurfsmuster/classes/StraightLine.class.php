<?php

class StraightLine extends TrackPart {

    public function __construct($name, $length) {
        parent::__construct($name, $length);
        $this->straightLength = $length;
    }

    public function driveOnTrack($car, $initialSpeed, &$resultingSpeed) {
        return $this->simulateDriveOnTrack($car, $car->getMaxSpeed(), $initialSpeed, $resultingSpeed);
    }

    public function printInfo() {
        print '<fieldset style=\"-moz-border-radius: 5px 5px 5px 5px;\"><table cellspadding=0 cellspacing=0><tr><td><img src="../images/straight_small.png"></td><td>';
        parent::printInfo();
        print '</td></tr></table></fieldset>';
    
    }
}
