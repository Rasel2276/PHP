<?php
require_once "FormHandler.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $id = $_POST["id"];
    $class = $_POST["class"];

    $handler = new FormHandler($name, $id, $class);
    $filename = $handler->createClassFile();

    echo "✅ ফাইল তৈরি হয়েছে: <a href='$filename'>$filename</a>";
} else {
    echo "❌ অনুগ্রহ করে ফর্মের মাধ্যমে সাবমিট করুন।";
}
?>