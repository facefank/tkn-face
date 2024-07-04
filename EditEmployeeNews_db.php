<?php
    include_once('connection.php');
    //    session_start();
    if (isset($_POST['update'])) {

        $id = $_POST['id'];
        $id_employee = $_POST['id_employee'];
        $img_employeenews = $_FILES['img_employeenews'];
        $title_employeenews = $_POST['title_employeenews'];
        $details_employeenews = $_POST['details_employeenews'];
        $position_employeenews = $_POST['position_employeenews'];

        $img2_employeenews = $_POST['img2_employeenews'];
        $upload = $_FILES['img_employeenews']['name'];

        if ($upload != '') {

            $allow = array('jpg', 'jpeg', 'png');    //นามสกุลไฟล์รูปภาพที่สามารถอัพโหลดได้
            $extension = explode(".", $img_employeenews['name']);  //แยกชื่อไฟล์ออก อ้างอิงจาก.
            $fileActExt = strtolower(end($extension)); //แปลงนามสกุลไฟล์ให้เป็นพิมพ์เล็ก
            $fileNew = rand() . "." . $fileActExt;   //ไม่ให้ชื่อไฟล์ซ้ำ
            $filePath = "uploads_img_employee/" . $fileNew; //อัพโหลดไปที่Uploads


            if (in_array($fileActExt, $allow)) {
                if ($img_employeenews['size'] > 0 && $img_employeenews['error'] == 0) {
                    move_uploaded_file($img_employeenews['tmp_name'], $filePath);
                }
            }
        } else {
            $fileNew = $img2_employeenews;
        }

        $sql = $db->prepare("UPDATE tbl_employeenews SET id = :id, id_employee = :id_employee, img_employeenews = :img_employeenews, title_employeenews = :title_employeenews, details_employeenews = :details_employeenews, position_employeenews = :position_employeenews WHERE id = :id");
        $sql->bindParam(":id", $id);
        $sql->bindParam(":id_employee", $id_employee);
        $sql->bindParam(":img_employeenews", $fileNew);
        $sql->bindParam(":title_employeenews", $title_employeenews);
        $sql->bindParam(":details_employeenews", $details_employeenews);
        $sql->bindParam(":position_employeenews", $position_employeenews);

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