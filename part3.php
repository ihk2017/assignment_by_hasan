<?php


/*
Constructor Parameters
1.Pass parameters to the constructor just like you would with any other function or method.
2.Constructor can assign value to class properties 
*/

//========================================================================


/*

class Car {
    public function __construct($num1,$num2) {
        echo $num1+$num2;
    }
}
$myCar = new Car(2,3);

*/


//========================================================================


/*

class Car {
    public $num1;
    public $num2;
    public function __construct($num1,$num2) {
        $this->num1 = $num1;
        $this->num2 = $num2;
    }
    function AddTwoNum(){
        echo  $this->num1+$this->num2;
    }
}

$myCar = new Car(2,3);
$myCar->AddTwoNum();

*/

class Calculate{
    public $x;
    public $y;

    public function __construct($xV,$yV){
        $this->x=$xV;
        $this->y=$yV;
    }
    public function addN($a,$b){
        //echo $this->x+$this->y;
        echo $a+$b;
    }
}
$result=new Calculate(2,2);
$result->addN(5,5);
//========================================================================

/*

class Car {
    public $num1;
    public $num2;
    public function __construct($num1,$num2) {
        $this->num1 = $num1;
        $this->num2 = $num2;
    }
    function AddTwoNum($a,$b){
        echo  $a+$b;
    }
}

$myCar = new Car(2,3);
$myCar->AddTwoNum(6,8);

*/