<?php

abstract class CarBase {

    protected $name = "";

    public function __construct($name)
    {
        $this->name = $name;
    }

    abstract public function getAcceleration(): float;
    abstract public function getConsumptionPerKilometer(): float;
    abstract public function getCost(): int;
    abstract public function getDeceleration():float;
    abstract public function getMaxSpeed(): float;
    abstract public function getTurnSpeed(): float;

    public function getDisplayInformation(): void {        
        print '<table cellspacing=2>';
        print '<tr><td align=right>Prize:</td><td>' . $this->getCost() . ' &euro;</td></tr>';
        print '<tr><td align=right>Name:</td><td>' . $this->getName() . '</td></tr>';
        printf('<tr><td align=right>Acceleration:</td><td>%.2f m/s&sup2;</td></tr>' , $this->getAcceleration());
        printf('<tr><td align=right>0-100km/h:</td><td>%.2f s</td></tr>', (27.78 / $this->getAcceleration()));
        printf('<tr><td align=right>Max-Speed:</td><td>%.2f m/s</td></tr>' , $this->getMaxSpeed());
        printf('<tr><td align=right>Turn-Speed:</td><td>%.2f m/s</td></tr>' , $this->getTurnSpeed());
        printf('<tr><td align=right>TankStatus:</td><td>%.2f Liter</td></tr>' , $this->getTankStatus());
        printf('<tr><td align=right>Consumption:</td><td>%.2f Liter/km</td></tr>' , $this->getConsumptionPerKilometer());
        print '</table>';
        print '<hr>';
    }

}