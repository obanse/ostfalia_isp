<?php

require_once '../classes/CarBase.class.php';
require_once '../classes/Car.class.php';

require_once '../classes/EngineKit.class.php';
require_once '../classes/GasEngineKit.class.php';
require_once '../classes/DieselEngineKit.class.php';

$car = new Car('TestWagen');
$gasEngineKit = new GasEngineKit();
$car->insertEngine($gasEngineKit);
$car->getDisplayInformation();

$car->removeEngine();
$dieselEngineKit = new DieselEngineKit();
$car->insertEngine($dieselEngineKit);
$car->getDisplayInformation();
