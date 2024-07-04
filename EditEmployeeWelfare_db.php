<?php
    include_once('connection.php');
    //    session_start();
    if (isset($_POST['update'])) {

        $id = $_POST['id'];
        $images = $_FILES['images'];
        $title = $_POST['title'];
        $details = $_POST['details'];


        $img2_employeewelfare = $_POST['img2_employeewelfare'];
        $upload = $_FILES['images']['name'];

        if ($upload != '') {

            $allow = array('jpg', 'jpeg', 'png');    //นามสกุลไฟล์รูปภาพที่สามารถอัพโหลดได้
            $extension = explode(".", $images['name']);  //แยกชื่อไฟล์ออก อ้างอิงจาก.
            $fileActExt = strtolower(end($extension)); //แปลงนามสกุลไฟล์ให้เป็นพิมพ์เล็ก
            $fileNew = rand() . "." . $fileActExt;   //ไม่ให้ชื่อไฟล์ซ้ำ
            $filePath = "uploads_img_employeewelfare/" . $fileNew; //อัพโหลดไปที่Uploads


            if (in_array($fileActExt, $allow)) {
                if ($images['size'] > 0 && $images['error'] == 0) {
                    move_uploaded_file($images['tmp_name'], $filePath);
                }
            }
        } else {
            $fileNew = $img2_employeewelfare;
        }

        $sql = $db->prepare("UPDATE tbl_employeewelfare SET id = :id, images = :images, title = :title, details = :details WHERE id = :id");
        $sql->bindParam(":id", $id);
        $sql->bindParam(":images", $fileNew);
        $sql->bindParam(":title", $title);
        $sql->bindParam(":details", $details);

        $sql->execute();

        if ($sql) {
            echo "
                            <script>
                            alert('อัพเดตข้อมูลสวัสดิการเรียบร้อยแล้ว');
                            // location.replace('FormEdit_Employeewelfare.php');
                            window.history.back();   
                            </script>
                            ";
        } else {
            echo   "<script>
                            alert('อัพเดตข้อมูลสวัสดิการไม่สำเร็จ');
                            window.history.back();   
                            </script>
                            ";
        }
    }
    ?>