<?php
include("connection.php");

if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $new_password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    if ($new_password === $confirm_password) {
        // ทำการอัพเดตรหัสผ่านในฐานข้อมูล
        $password = password_hash($new_password, PASSWORD_DEFAULT);
        $sql_update = $db->prepare("UPDATE users SET password = :password WHERE user_id = :id");
        $sql_update->bindParam(':password', $password);
        $sql_update->bindParam(':id', $id);
        $result = $sql_update->execute();

        if ($result) {
            echo "<script>
            alert('ตั้งรหัสผ่านใหม่แล้ว');
            window.history.back();   
            </script>
            ";
        } else {
            echo "<script>
            alert('ตั้งรหัสผ่านไม่สำเร็จ');
            window.history.back();        
            </script>
            ";
        }
    } else {
        echo "<script>
        alert('รหัสผ่านไม่ตรงกัน');
        window.history.back();        
        </script>";
    }
}
?>
