<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            display:flex;
            justify-content:center;
            flex-direction:column;
            align-items:center;
            height:100vh;
        }
        .result-show{
            margin:80px;
            margin-top:20px;
            background-color:tomato;
            padding:20px;
            color:white;
        }
        .form{
            text-align:center;
        }
    </style>
</head>
<body>
<div class="form">
   <h1>Search Student Result</h1>
   <form method="POST">
    <fieldset>
    <P>Enter Your Roll</P>
    <input type="number" name="roll" required>
    <input type="submit" value="Search">
    </fieldset>
   </form>
</div>
   
<div class="result-show">
   <?php
   $students = array(
    array ("name"=>"Md.Rasel Hossain","roll"=>1287933,"grade"=>"A+"),
    array ("name"=>"Hares Islam","roll"=>1287983,"grade"=>"A"),
    array ("name"=>"Mst.Farhana Akter","roll"=>1287997,"grade"=>"A+"),
    array ("name"=>"Md.Aminul Islam","roll"=>1288015,"grade"=>"A"),
    array ("name"=>"Sharmin Akter","roll"=>1288188,"grade"=>"F"),
    array ("name"=>"Mahidul Kabir","roll"=>1288235,"grade"=>"A+"),
    array ("name"=>"Md Mahamudul Hasan","roll"=>1288265,"grade"=>"A"),
    array ("name"=>"Assaduzzam Shaon","roll"=>1288328,"grade"=>"A+"),
    array ("name"=>"Azmira Khatun","roll"=>1288399,"grade"=>"B+"),
    array ("name"=>"Mohammad Alamgir Rejvi","roll"=>1288420,"grade"=>"A"),
    array ("name"=>"Md.Safiul Alam Rafi","roll"=>1288480,"grade"=>"A++"),
    array ("name"=>"Ashikuzzaman Biswas","roll"=>1288603,"grade"=>"A+"),
    array ("name"=>"Rafia Akter","roll"=>1288607,"grade"=>"F"),
    array ("name"=>"Md.Osman Goni","roll"=>1288825,"grade"=>"B+"),
    array ("name"=>"Nishat Hasan","roll"=>1288841,"grade"=>"A+") 
   );

   if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $searchRoll = $_POST["roll"];
    $found = false;

    foreach($students as $student){
        if($student["roll"] == $searchRoll){
            echo "<h3>Student Found :</h3>";
            echo "Name :" . $student["name"] . "<br>";
            echo "Roll :" . $student["roll"] . "<br>";
            echo "Grade:" . $student["grade"] ."<br>";
            $found = true;
            break;
        }
    }
    if(!$found){
        echo "<p style=color:white;>Student Not Found: $searchRoll</p>";
    }
   }
   ?>
   </div>
</body>
</html>