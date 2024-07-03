<?php
class oop{
    private $name;
    private $age;
     public function __construct($name,$age){
          $this->name = $name;
          $this->age = $age;
     }
     public function sayHello(){
         echo "Hello ". $this->name;
     }
      
     
    }
    $obj=new oop("Masud","30");
    print_r($obj);
     
    echo "<br>";
     
    $obj->sayHello();
     




?>