<?php
$student = array(
    array ("Rasel Hossain",101,"A+"),
    array ("Sohan",102,"A"),
    array ("Aminul Islam",103,"B+"),
    array ("Saiful Islam",104,"-A"),
);
echo $student[0][0];
echo "<br>";
echo $student[1][0];
echo "<br>";
echo $student[2][0];
?>


<br>
<br>
<br>

<?php
 $person = array (
    "name" => "Rasel Hossain",
    "id" => 1287933,
    "grade" => "A+",
    "email" => "rasel@example.com"
 );
 echo $person["name"];
 echo "<br>";
 echo $person["id"];
 echo "<br>";
 echo $person ["email"];
?>

<br>
<br>


<?php
$students = array (
    array(
        "name" => "Rasel Hossain",
        "marks" => array (80,70,90)
    ),
    array (
        "name" => "Saiful Islam",
        "marks" => array (80,90,85) 
    )

    );
foreach ($students as $student) {
    echo "<h3>Student: " . $student["name"] . "</h3>";
    echo "Marks: ";

    foreach ($student["marks"] as $mark) {
        echo $mark . " ";
    }

    echo "<br><br>";
}
?>