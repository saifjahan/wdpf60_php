<?php
class Employee{
    public $name= "Rahim";
    public $age;
    public $address;


    public function info(){
        $full = "";
        $full .= "Name:" .$this->name;
        $full .= "Age:" .$this->age;
        $full .= "Address:" .$this->address;
        return $full;

    }
}
$obj1 = new Employee;
 $obj1->name = "Rahim";
 $obj1->age = 20;
 $obj1->address = "Mirpur";

 echo $obj1->info();


?>