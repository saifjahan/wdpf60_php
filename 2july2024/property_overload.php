<?php
class Employee{
    public $name;

    public function __set($propName, $propValue){
        $this->$propName = $propValue;

    }
}

$emp1 = new Employee;
echo $emp1->name = "Imran Hasan";
echo "<br>";
echo $emp1->phone = "12345678970"
?>