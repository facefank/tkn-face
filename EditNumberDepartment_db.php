<?php
    include_once('connection.php');
    //    session_start();
    if (isset($_POST['update'])) {

        $id = $_POST['id'];
        $department = $_POST['select'];
        $name = $_POST['name'];
        $number = $_POST['number'];


        $sql = $db->prepare("UPDATE tbl_numberdepartment SET id = :id, department = :select, name = :name, number = :number  WHERE id = :id");
        $sql->bindParam(":id", $id);
        $sql->bindParam(":select", $department);
        $sql->bindParam(":name", $name);
        $sql->bindParam(":number", $number);
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
                            </script>
                            ";
        }
    }
    ?>