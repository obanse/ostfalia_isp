<?php

require_once '../classes/CarBase.class.php';
require_once '../classes/Car.class.php';
require_once '../classes/CarFactory.class.php';
require_once '../classes/EngineKitFactory.class.php';

require_once '../classes/CarProxy.class.php';

require_once '../classes/EngineKit.class.php';
require_once '../classes/GasEngineKit.class.php';
require_once '../classes/DieselEngineKit.class.php';
require_once '../classes/CarObserver.class.php';

require_once '../classes/CarDecorator.class.php';
require_once '../classes/Turbo.class.php';
require_once '../classes/Spoilerkit.class.php';
require_once '../classes/WideTires.class.php';

require_once '../classes/TrackPart.class.php';
require_once '../classes/StraightLine.class.php';
require_once '../classes/Track.class.php';
require_once '../classes/Turn.class.php';

//require_once '.class.php';
require_once '../classes/SolarPoweredElectroEngine.class.php';
require_once '../classes/SolarPoweredElectroEngineKit.class.php';

require_once '../classes/HydrogenEngine.class.php';
require_once '../classes/HydrogenEngineKit.class.php';

// require_once '../classes/Log.class.php';

$gasEngineKit = EngineKitFactory::createEngineKit('GasEngineKit');
$car = CarFactory::createCar('TestCar', array('Spoilerkit', 'WideTires', 'Turbo'), $gasEngineKit);
