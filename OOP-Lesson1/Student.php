<?php
class Student {
    private $name;
    private $age;
    private $firstName;
    private $date;
    private $id;

    public function __construct($name, $age, $firstName, $date, $id) {
        $this->$name = $name;
        $this->$age = $age;
        $this->$firstName = $firstName;
        $this->$date = $date;
        $this->$id = $id;
    }

    public function getField1() {
        return $this->name;
    }

    public function getField2() {
        return $this->age;
    }

    public function getField3() {
        return $this->firstName;
    }

    public function getField4() {
        return $this->date;
    }

    public function getField5() {
        return $this->id;
    }

    public function setField1($name) {
        $this->name = $name;
    }

    public function setField2($age) {
        $this->age = $age;
    }

    public function setField3($firstName) {
        $this->$firstName = $firstName;
    }

    public function setField4($firstName) {
        $this->$firstName = $firstName;
    }

    public function setField5($id) {
        $this->$id = $id;
    }
}


$student = new Student($_POST["field1"], $_POST["field2"], $_POST["field3"], $_POST["field4"], $_POST["field5"]);
echo $student->getField1();
echo $student->getField2();
echo $student->getField3();
echo $student->getField4();
echo $student->getField5();
$student->setField1("New Value");
?>