<?php
// session_start();
include("connection.php");


if (isset($_POST['submit'])) {

    $department = $_POST["department"];

    $stmt = $db->prepare("INSERT INTO tbl_department (department) 
    VALUES (:department)");
    $stmt->bindParam(':department', $department);
    $stmt->execute();

    if ($stmt) {

        echo "
                <script>
                alert('เพิ่มข้อมูลแผนกเรียบร้อยแล้ว');
                location.replace('admin.php');
                </script>
                ";
    } else {

        echo "<script>
                    alert(เพิ่มข้อมูลแผนกไม่สำเร็จ');
                    location.replace('admin.php');
                    </script>
                    ";
    }
}
