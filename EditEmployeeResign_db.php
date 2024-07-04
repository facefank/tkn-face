<?php
    include_once('connection.php');
    //    session_start();
    if (isset($_POST['update'])) {

        $id = $_POST['id'];
        $id_employeeresign = $_POST['id_employeeresign'];
        $img_employeeresign = $_FILES['img_employeeresign'];
        $title_employeeresign = $_POST['title_employeeresign'];
        $details_employeeresign = $_POST['details_employeeresign'];
        $position_employeeresign = $_POST['position_employeeresign'];


        $img2_employeeresign = $_POST['img2_employeeresign'];
        $upload = $_FILES['img_employeeresign']['name'];

        if ($upload != '') {

            $allow = array('jpg', 'jpeg', 'png');    //นามสกุลไฟล์รูปภาพที่สามารถอัพโหลดได้
            $extension = explode(".", $img_employeeresign['name']);  //แยกชื่อไฟล์ออก อ้างอิงจาก.
            $fileActExt = strtolower(end($extension)); //แปลงนามสกุลไฟล์ให้เป็นพิมพ์เล็ก
            $fileNew = rand() . "." . $fileActExt;   //ไม่ให้ชื่อไฟล์ซ้ำ
            $filePath = "uploads_img_employeeresign/" . $fileNew; //อัพโหลดไปที่Uploads


            if (in_array($fileActExt, $allow)) {
                if ($img_employeeresign['size'] > 0 && $img_employeeresign['error'] == 0) {
                    move_uploaded_file($img_employeeresign['tmp_name'], $filePath);
                }
            }
        } else {
            $fileNew = $img2_employeeresign;
        }

        $sql = $db->prepare("UPDATE tbl_employeeresign SET id = :id, id_employeeresign = :id_employeeresign, img_employeeresign = :img_employeeresign, title_employeeresign = :title_employeeresign, details_employeeresign = :details_employeeresign, id_employeeresign = :id_employeeresign, img_employeeresign = :img_employeeresign, title_employeeresign = :title_employeeresign, position_employeeresign = :position_employeeresign WHERE id = :id");
        $sql->bindParam(":id", $id);
        $sql->bindParam(":id_employeeresign", $id_employeeresign);
        $sql->bindParam(":img_employeeresign", $fileNew);
        $sql->bindParam(":title_employeeresign", $title_employeeresign);
        $sql->bindParam(":details_employeeresign", $details_employeeresign);
        $sql->bindParam(":position_employeeresign", $position_employeeresign);

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