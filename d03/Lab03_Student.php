<?php

/*
  Tao class student, có 2 thuộc tính id, name và phươnt thức xuất dữ liệu
 */

class Student {

    public  $id, $name;

    // Hàm dựng PHP 7.x
    public function __construct() {
        $this->id = "SV01";
        $this->name = "Be Ba 97";
    }

    // Hàm xuất thông tin sinh viên
    public function display() {
        echo "<h3>Thông tin sinh viên</h3>";
        echo "id: " . $this->id . "<br>";
        echo "ho ten: " .$this->name."<br>";
    }

};

// Đoạn code test class Stuđent
$sv1 = new Student();
$sv1->display();

$sv2= new Student;
$sv2->id = "SV02";
$sv2->name ="Thien Kim";
$sv2->display();

$sv2= new Student;
$sv2->id = True;
$sv2->name =123456;
$sv2->display();
    

?>