<?php

class UserData {
    private $name;
    private $id;
    private $number;
    private $file;

    public function __construct($name, $id, $number, $file = "data.txt") {
        $this->name = $name;
        $this->id = $id;
        $this->number = $number;
        $this->file = $file;
    }

    public function formatData() {
        return "Name: {$this->name} | ID: {$this->id} | Number: {$this->number}" . PHP_EOL;
    }

    public function saveToFile() {
        $data = $this->formatData();
        file_put_contents($this->file, $data, FILE_APPEND);
        return "Data saved successfully!";
    }
}

// Form submission check
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'] ?? '';
    $id = $_POST['id'] ?? '';
    $number = $_POST['number'] ?? '';

    if (preg_match("/^[0-9]{11}$/", $number)) {
        echo "Valid Number";
    } else {
        echo "Invalid Number";
    }

    $user = new UserData($name, $id, $number);
    echo $user->saveToFile();
} else {
    echo "Invalid request.";
}
?>