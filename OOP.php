<?php
// Assignment 1: Write a simple PHP class which displays the following string. 'MyClass class has been initialized!'
class MyClass {
    public $str;

    function set_var(){
        $this->string = $str;
    }  
    function get_var(){
        return $this->string;
    }   
}
$object = new MyClass();
$object->string = "MyClass has been initialized";

echo $object->get_var();

echo "<br>";
echo "<br>";
// Assignment 2: Write a simple PHP class which displays an introductory message like "Hello All, I am Scott", where "Scott" is an argument value of the method within the class.
class greeting {
    public $name;

    function __construct($name){
        $this->name = $name;
    }

    function getInfo(){
        return "Hello all, I am $this->name";
    }
}

$person = new greeting("Scott");
echo $person->getInfo();
echo "<br>";
echo "<br>";
// Assignment 3: Write a PHP calculator class which will accept two values as arguments, then add them, subtract them, multiply them together, or divide them on request.
class MyCalculator{
    function __construct($a, $b){
        $this->a = $a;
        $this->b = $b;
    }
    function plus(){
        return $this->a + $this->b;
    }
    function minus(){
        return $this->a - $this->b;
    }
    function multiply(){
        return $this->a * $this->b;
    }
    function divide(){
        return $this->a / $this->b;
    }
    
}
$mycalc = new MyCalculator(5,5);
echo $mycalc->plus() . "<br>";
echo $mycalc->minus() . "<br>";
echo $mycalc->multiply() . "<br>";
echo $mycalc->divide() . "<br>";

?>