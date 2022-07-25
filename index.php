<?php
class Vehicles
{
   public $name;
   public $model;
   public $makeYear;
   public $color;
   public $fuelType;


   function __construct($name_arg, $model_arg, $makeYear_arg,$color_arg,$fuelType_arg)
   {

        $this->name   = $name_arg;
        $this->model  = $model_arg;
        $this ->makeYear  = $makeYear_arg;
        $this ->color  = $color_arg;
        $this ->fuelType  = $fuelType_arg;
   }

    public function printVehicle ()
   { 
        return 'Car name '.$this->name. '<br> Car model '.$this->model;
        // '<br> Car year '.$this->model. '<br> Car year '.$this->makeYear. '<br> Car color '.$this->color. '<br> Car fuel '.$this->fuelType;
   }
}
$vehicle1 = new Vehicles('Mazda','CX-5' ,2000,'red','fuel' );
$vehicle2 = new Vehicles('Infinity','QX-70' ,2010,'blue','diesel' );
$vehicle3 = new Vehicles('KIA','Sport' ,2020,'white','gas' );
$rtnVal = $vehicle1->printVehicle();
$rtnVal2 = $vehicle2->printVehicle();
$rtnVal3 = $vehicle3->printVehicle();
print "Car 1 $rtnVal <br> Car 2 $rtnVal2 <br> Car 3 $rtnVal3";

class Ships extends Vehicles{
    public $ship;
    public $colorShip;
    function __construct($ship_arg, $colorShip_arg)
    {
 
         $this->ship   = $ship_arg;
         $this->colorShip  = $colorShip_arg;
    }
 
     public function printShip ()
    { 
         return 'Ship name '.$this->ship. '<br> Ship color '.$this->colorShip;

    }
}
$ship = new Ships('Titanic', 'white');
$ship2 = new Ships('Titanic', 'red');
$ship3 = new Ships('Titanic', 'blue');
print "<br> Ship 1 {$ship->printShip()} <br> Ship 2 {$ship2->printShip()} <br> Ship 3 {$ship3->printShip()}";
?>