<?php
    include_once('connection.php');
    //    session_start();
    if (isset($_POST['update'])) {

        $id = $_POST['id'];
        $department = $_POST['department'];

        $sql = $db->prepare("UPDATE tbl_department SET id = :id, department = :department WHERE id = :id");
        $sql->bindParam(":id", $id);
        $sql->bindParam(":department", $department);
        $sql->execute();

        if ($sql) {
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
                    </script>";
        }
    }
    ?>
