<?php

require_once '../classes/EngineKitFactory.class.php';
require_once '../classes/EngineKit.class.php';
require_once '../classes/DieselEngineKit.class.php';

require_once '../classes/CarFactory.class.php';
require_once '../classes/CarBase.class.php';
require_once '../classes/Car.class.php';

require_once '../classes/CarDecorator.class.php';
require_once '../classes/Turbo.class.php';

$engine = EngineKitFactory::createEngineKit('DieselEngineKit');

$car = CarFactory::createCar('TestWagen', ['Turbo'], $engine);
$car->getDisplayInformation();