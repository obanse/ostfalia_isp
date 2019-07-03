<?php

require_once '../classes/CarBase.class.php';
require_once '../classes/Car.class.php';
require_once '../classes/CarFactory.class.php';
require_once '../classes/EngineKitFactory.class.php';

require_once '../classes/EngineKit.class.php';
require_once '../classes/GasEngineKit.class.php';

require_once '../classes/CarDecorator.class.php';
require_once '../classes/Spoilerkit.class.php';
require_once '../classes/WideTires.class.php';

require_once '../classes/TrackPart.class.php';
require_once '../classes/StraightLine.class.php';
require_once '../classes/Track.class.php';
require_once '../classes/Turn.class.php';

require_once '../classes/SolarPoweredElectroEngine.class.php';
require_once '../classes/SolarPoweredElectroEngineKit.class.php';

// require_once '../classes/Log.class.php';

$electroEngineKit = EngineKitFactory::createEngineKit('SolarPoweredElectroEngineKit');
$car = CarFactory::createCar('TestCar', array('Spoilerkit', 'WideTires'), $electroEngineKit);
$car->getDisplayInformation();

$track1 = new StraightLine('straight line', 1);
$track2 = new Turn('first turn', 2);
$track3 = new StraightLine('second straight line', 1);
$track = new Track('RaceTrack', 0);
$track->addTrack($track1);
$track->addTrack($track2);
$track->addTrack($track3);
$track->printInfo();

printf("Time for {$track1->getName()}: %.2f s<br>",$track1->driveOnTrack($car, 0, $resultingSpeed));
printf("Time for {$track2->getName()}: %.2f s<br>",$track2->driveOnTrack($car, 0, $resultingSpeed));
printf("Time for {$track3->getName()}: %.2f s<br>",$track3->driveOnTrack($car, 0, $resultingSpeed));
printf("Time for {$track->getName()}: %.2f s<br>",$track->driveOnTrack($car, 0, $resultingSpeed));
