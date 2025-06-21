<?php

$name = "<h1 style=color:red;> Variables</h1>";
echo $name ;

// $name = "Rasel Hossain";
// $number = 10;
// echo $name;
// echo "<br>";
// echo $number*5;
// echo "<br>";
// echo $number*6;
// echo "<br>";
// echo $number*7;
// echo "<br>";

//Variable যোগ করে মেসেজ তৈরি


$name = "Rasel Hossain";
$age = 25;
$email = "rasel@gmail.com";

echo "Name :" . $name . "<br>";
echo "Age :" . $age . "<br>";
echo "Email :" . $email;
 echo "<br>";
 echo "<br>";
 echo "<br>";

   $firstName = "Md.";
   $lastName = "Rasel Hossain";

   $fullName = $firstName . " " . $lastName;

   echo "My full name is " .$fullName;

 echo "<br>";
 echo "<br>";
 echo "<br>";

//Variable-এর সঙ্গে গণনা (Calculation)

 $num1 = 25;
 $num2 = 15;

 $sum = $num1 + $num2 ;

 echo $sum;

echo "<br>";
echo "<br>";
echo "<br>";

 $name = "Rasel Hossain";
 $num = 25;

 echo $num. " " .$name;

echo "<br>";
echo "<br>";
echo "<br>";

class myClass {
    public $name;
    public $age;

    function __construct($name,$age){
        $this->name =$name;
        $this->age =$age;
    }
    function getDetails(){
        return "Name: $this->name, Age: $this->age";
    }
}
    $student1 = new myClass("Rasel",25);

    echo $student1->getDetails();

echo "<br>";
echo "<br>";
echo "<br>";

//--------------Local Variable-------------//

function myFunction(){
    $localVariable = "I am local variable";
    echo $localVariable;
}
myFunction();

echo "<br>";
echo "<br>";
echo "<br>";

//--------------global Variable-------------//

$globalVariable = "I am global Variable";

function myGlobal(){
    global $globalVariable;
    echo $globalVariable;
}
myGlobal();
echo "Rasel Hossain";
echo "Rasel Hossain";
?>