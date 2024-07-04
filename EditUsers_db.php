<?php
include_once('connection.php');
//    session_start();
if (isset($_POST['update'])) {

    $id = $_POST['id'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $username = $_POST['username'];
    $select = $_POST['select'];

    // ทำการอัปเดตข้อมูลผู้ใช้งาน
    $update_stmt = $db->prepare("UPDATE Users SET firstname = :firstname, lastname = :lastname, username = :username, role = :select WHERE user_id = :id");
    $update_stmt->bindParam(':firstname', $firstname);
    $update_stmt->bindParam(':lastname', $lastname);
    $update_stmt->bindParam(':username', $username);
    $update_stmt->bindParam(':select', $select);
    $update_stmt->bindParam(':id', $id);
    $update_stmt->execute();
    if ($update_stmt) {
        echo "
                            <script>
                            alert('อัพเดตข้อมูลเรียบร้อยแล้ว');
                            window.history.back();   
                            </script>
                            ";
    } else {
        echo   "<script>
                            alert('อัพเดตข้อมูลไม่สำเร็จ');
                            window.history.back();   
                            </script>
                            ";
    }
}
