<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>signup info</title>
        <link href="../css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div class="container">
            <?php
            // kiem tra Lab02_register.html chay chua?
            if (isset($_POST["btnOK"]) == FALSE) {
                header("location:Lab02_Register.html");
                exit();
            }

            //lay cac gia tri nhap ben form dang nhap cua trang Lab02_register.html
            $name = $_POST["txtName"];
            $mail = $_POST["txtMail"];
            $city = $_POST["cbCity"];
            $gender = $_POST["rdGender"];
            $dob = $_POST["txtBD"];
            $hobbies = $_POST["ckHob"];
            $note = $_POST["txtNote"];

            //in cac thong tin dang ky ra man hinh
            echo "<h3>Thong tin ca nhan </h3>";
            echo "<p>Ho ten: $name </p>";
            echo "<p>email: $mail </p>";
            echo "<p>Thanh pho: $city </p>";
            echo "<p>Gioi tinh: $gender </p>";

            $namsinh = gmdate("Y", strtotime($dob));
            $namHienTai = gmdate("Y");
            $tuoi = $namHienTai - $namsinh;
            echo "<p>Ngay sinh: $dob - Tuoi: $tuoi </p>";

            echo "<p>So thich: ";
            foreach ($hobbies as $st) {
                echo "$st &nbsp;";
            }
            
            echo "</p>";
            echo "<p>Ghi chu: $note</p>";
            ?>

        </div>
    </body>
</html>paint
