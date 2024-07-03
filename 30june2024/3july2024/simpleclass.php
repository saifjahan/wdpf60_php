<?php
class simpleClass{
    public $var = 'a default value';
public const a = "America";

public function displayVar(){
    echo $this->var;
}
public static function displayConst(){
    echo self::a;
}
}
$obj1 = new simpleClass;
echo $obj1->var;
echo $obj1::a;
$obj1->displayVar();
simpleClass::a;
?>