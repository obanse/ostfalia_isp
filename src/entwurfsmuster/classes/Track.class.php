<?php

class Track extends TrackPart {

    protected $tracks = array();
    
    public function  __construct($name, $length) {
        $this->name		= $name;
        $this->length	= $length;
    }

    public function addTrack($track) {
        if (is_object($track) && $track instanceOf TrackPart)
        {
            $this->tracks[] = $track;
        }
    }


    public function removeTrack($track) {
        $this->tracks[] = array_diff($this->tracks, array($track));
    }

    public function getLength() {
        $length = 0.0;
        foreach($this->tracks as $track)
        {
            $length += $track->getLength();
        }
        return $length;
    }

    public function getTurnLength() {
        $length = 0.0;
        foreach($this->tracks as $track)
        {
            $length += $track->getTurnLength();
        }
        return $length;
    }

    public function getStraightLength() {
        $length = 0.0;
        foreach($this->tracks as $track)
        {
            $length += $track->getStraightLength();
        }
        return $length;
    }

    public function driveOnTrack($car, $initialSpeed, &$resultingSpeed) {
        $time = 0.0;
        foreach($this->tracks as $track)
        {
            $time += $track->driveOnTrack($car, $initialSpeed, $resultingSpeed);
            $initialSpeed = $resultingSpeed;
        }
        return $time;
    }

    public function printInfo() {
        print "<fieldset style=\"-moz-border-radius: 5px 5px 5px 5px;\"><legend>{$this->getName()}</legend>This track consists of multiple tracks!<br>";
        printf("The overall length is  %.3f kilometers.<br>", $this->getLength());
        printf("The straight parts have a combined length of %.3f kilometers.<br>", $this->getStraightLength());
        printf("The turns have a combined length of %.3f kilometers.<br>", $this->getTurnLength());
        foreach($this->tracks as $track)
        {
            $track->printInfo();
        }
        print "</fieldset>";
    }
}