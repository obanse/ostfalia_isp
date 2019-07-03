<?php 

require_once '../classes/CarBase.class.php';
require_once '../classes/Car.class.php';

require_once '../classes/CarDecorator.class.php';
require_once '../classes/Spoilerkit.class.php';
require_once '../classes/Turbo.class.php';
require_once '../classes/WideTires.class.php';
require_once '../classes/ChipTuning.class.php';

$car = new Car('TestWagen');
$car->getDisplayInformation();

$car = new Spoilerkit($car);
$car->getDisplayInformation();

$car = new Turbo($car);
$car->getDisplayInformation();

$car = new WideTires($car);
$car->getDisplayInformation();

$car = new ChipTuning($car);
$car->getDisplayInformation();
