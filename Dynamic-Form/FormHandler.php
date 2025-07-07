<?php
class FormHandler {
    private $name;
    private $id;
    private $class;

    public function __construct($name, $id, $class) {
        $this->name = htmlspecialchars($name);
        $this->id = htmlspecialchars($id);
        $this->class = preg_replace('/[^a-zA-Z0-9_]/', '', $class);
    }

    public function createClassFile() {
        $filename = $this->class . ".php";
        $data = "<h2>Student Info</h2>";
        $data .= "Name: {$this->name} <br>";
        $data .= "ID: {$this->id} <br>";
        $data .= "Class: {$this->class} <br>";

        file_put_contents($filename, $data);
        return $filename;
    }
}
?>