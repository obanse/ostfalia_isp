<?php

require_once '../classes/CarBase.class.php';
require_once '../classes/Car.class.php';
require_once '../classes/CarFactory.class.php';
require_once '../classes/EngineKitFactory.class.php';

require_once '../classes/EngineKit.class.php';
require_once '../classes/SolarPoweredElectroEngine.class.php';
require_once '../classes/SolarPoweredElectroEngineKit.class.php';
require_once '../classes/HydrogenEngine.class.php';
require_once '../classes/HydrogenEngineKit.class.php';

$solarPoweredElectroEngineKit = EngineKitFactory::createEngineKit('SolarPoweredElectroEngineKit', $engineName);
$car = CarFactory::createCar('Testwagen', null, null);
$car->insertEngine($solarPoweredElectroEngineKit);
$car->getDisplayInformation();
$car->removeEngine();

/* print '<br>Driven: ' . $car->drive(490.0);
print '<br>Driven: ' . $car->drive(222.0);
print '<br>Driven: ' . $car->drive(44.0);
print '<br>Driven: ' . $car->drive(150.0);
$car->getDisplayInformation(); */

$solarPoweredElectroEngineKit = EngineKitFactory::createEngineKit('HydrogenEngineKit', $engineName);
$car->insertEngine($solarPoweredElectroEngineKit);
$car->getDisplayInformation();