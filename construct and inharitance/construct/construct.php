<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Construct in php</title>
</head>
<body>
    <?php
    class person{
        public $name;
        public $age;

        function __construct($name,$age){
            $this-> name = $name;
            $this-> age = $age;
        }
        function show(){
            echo "My name is : " . $this->name . "-" . $this->age;
        }
    }
    $p1 = new person("Rasel Hossain",25);
    $p1->show();
    ?>

    <br>
    <br>

    <?php
    class Student{
        public $name;
        public $age;
        public $id;
        public $result;
        function __construct($name,$age,$id,$result){
            $this->name = $name;
            $this->age = $age;
            $this->id = $id;
            $this->result = $result;
        }
        function show(){
            echo "<h1>student information <br></h1>";
            echo $this->name;
            echo "<br>";
            echo $this->age;
            echo "<br>";
            echo $this->id;
            echo "<br>";
            echo $this->result;
        }
    }
    $std = new Student("Rasel",20,1287933,"A+");
    $std->show();
    ?>

    <br>
    <br>
   <?php
    class Khalu{
        public $name;
        public $age;
        public $salary;
        public $profession;

        function __construct($n,$a,$s,$p){
            $this->name = $n;
            $this->age = $a;
            $this->salary = $s;
            $this->profession = $p;
        }
        function khalukoi(){
            echo "<h1>khalur bio <br></h1>";
            echo "Name : " . $this->name;
            echo "<br>";
            echo "Age : " . $this->age;
            echo "<br>";
            echo "Salary : " . $this->salary;
            echo "<br>";
            echo "Profession : " . $this->profession;
            echo "<br>";

        }
    }
    $khala = new Khalu("Habib",55,35000,"manager");
    $khala->khalukoi();
   ?>
</body>
</html>