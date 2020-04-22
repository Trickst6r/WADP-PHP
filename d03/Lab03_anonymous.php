<?php

/*
  Tạo 1 class ẩn danh, mo ta nhan vien: co ma so, ten, luowng co ban va ham xuat thong tin
 */

$nv = new class {

    public $id, $name, $salary;

    public function display() {

        echo '<h2>Thong tin nhan vien</h2><hr>';
        echo "<p>id: " . $this->id . "</p>";
        echo "<p>ho ten: " . $this->name . "</p>";
        echo "<p>luong co ban: " . $this->salary . "</p>";
    }
};

//su dung bien nv, chỉ được sử dụng duy nhất 1 biến nv
$nv->id="NV01";
$nv->name="TRuc Quynh";
$nv->salary="444";
$nv->display();

$nv->id="NV02";
$nv->name="Be Ba";
$nv->salary="333";
$nv->display(); 
?>
