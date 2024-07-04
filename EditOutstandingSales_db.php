<?php
    include_once('connection.php');
    //    session_start();
    if (isset($_POST['update'])) {

        $id = $_POST['id'];
        $id_employeesales = $_POST['id_employeesales'];
        $img_employeesales = $_FILES['img_employeesales'];
        $sales = $_POST['sales'];
        $title_employeesales = $_POST['title_employeesales'];
        $details_employeesales = $_POST['details_employeesales'];

        $img2_employeesales = $_POST['img2_employeesales'];
        $upload = $_FILES['img_employeesales']['name'];

        if ($upload != '') {

            $allow = array('jpg', 'jpeg', 'png');    //นามสกุลไฟล์รูปภาพที่สามารถอัพโหลดได้
            $extension = explode(".", $img_employeesales['name']);  //แยกชื่อไฟล์ออก อ้างอิงจาก.
            $fileActExt = strtolower(end($extension)); //แปลงนามสกุลไฟล์ให้เป็นพิมพ์เล็ก
            $fileNew = rand() . "." . $fileActExt;   //ไม่ให้ชื่อไฟล์ซ้ำ
            $filePath = "upload_img_employeesales/" . $fileNew; //อัพโหลดไปที่Uploads


            if (in_array($fileActExt, $allow)) {
                if ($img_employeesales['size'] > 0 && $img_employeesales['error'] == 0) {
                    move_uploaded_file($img_employeesales['tmp_name'], $filePath);
                }
            }
        } else {
            $fileNew = $img2_employeesales;
        }

        $sql = $db->prepare("UPDATE tbl_outstandingemployeesales SET id = :id, id_employeesales = :id_employeesales, sales = :sales, img_employeesales = :img_employeesales, title_employeesales = :title_employeesales, details_employeesales = :details_employeesales WHERE id = :id");
        $sql->bindParam(":id", $id);
        $sql->bindParam(":id_employeesales", $id_employeesales);
        $sql->bindParam(":img_employeesales", $fileNew);
        $sql->bindParam(":sales", $sales);
        $sql->bindParam(":title_employeesales", $title_employeesales);
        $sql->bindParam(":details_employeesales", $details_employeesales);
        $sql->execute();

        if ($sql) {
            echo "
                            <script>
                            alert('อัพเดตข้อมูลพนักงานขายเรียบร้อยแล้ว');
                            window.history.back();   
                            </script>
                            ";
        } else {
            echo   "<script>
                            alert('อัพเดตข้อมูลพนักงานขายไม่สำเร็จ');
                            window.history.back();   
                            </script>
                            ";
        }
    }
    ?>