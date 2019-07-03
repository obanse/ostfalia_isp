<?php

require_once '../classes/CarBase.class.php';
require_once '../classes/CarFactory.class.php';
require_once '../classes/CarObserver.class.php';
require_once '../classes/EnergySourceObserver.class.php';
require_once '../classes/EngineKit.class.php';
require_once '../classes/GasEngineKit.class.php';
require_once '../classes/EngineKitFactory.class.php';
require_once '../classes/Car.class.php';

$eso = new EnergySourceObserver();
$engine = EngineKitFactory::createEngineKit('GasEngineKit');
$car = CarFactory::createCar('TestRenner', [], $engine);

$car->attachObserver($eso);
$car->getDisplayinformation();

print '<br>Driven: ' . $car->drive(400.0);

$car->useEnergySource(400.0 * $car->getConsumptionPerKilometer());

for ($x = 0; $x < 4; $x++) {

  print '<br>Driven: ' . $car->drive(25.0);

  $car->useEnergySource(25.0 * $car->getConsumptionPerKilometer());

}

$car->getDisplayinformation();