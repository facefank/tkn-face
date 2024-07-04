
<?php
    include_once('connection.php');
    //    session_start();
    if (isset($_POST['update'])) {

        $id = $_POST['id'];
        $id_employee = $_POST['id_employee'];
        $img_employee = $_FILES['img_employee'];
        $services = $_POST['services'];
        $title_employee = $_POST['title_employee'];
        $details_employee = $_POST['details_employee'];
        $position = $_POST['position'];

        $img2_employee = $_POST['img2_employee'];
        $upload = $_FILES['img_employee']['name'];

        if ($upload != '') {

            $allow = array('jpg', 'jpeg', 'png');    //นามสกุลไฟล์รูปภาพที่สามารถอัพโหลดได้
            $extension = explode(".", $img_employee['name']);  //แยกชื่อไฟล์ออก อ้างอิงจาก.
            $fileActExt = strtolower(end($extension)); //แปลงนามสกุลไฟล์ให้เป็นพิมพ์เล็ก
            $fileNew = rand() . "." . $fileActExt;   //ไม่ให้ชื่อไฟล์ซ้ำ
            $filePath = "upload_img_employeeoutstanding/" . $fileNew; //อัพโหลดไปที่Uploads


            if (in_array($fileActExt, $allow)) {
                if ($img_employee['size'] > 0 && $img_employee['error'] == 0) {
                    move_uploaded_file($img_employee['tmp_name'], $filePath);
                }
            }
        } else {
            $fileNew = $img2_employee;
        }

        $sql = $db->prepare("UPDATE tbl_outstandingemployee SET id = :id, id_employee = :id_employee, services = :services, img_employee = :img_employee, title_employee = :title_employee, details_employee = :details_employee, position = :position WHERE id = :id");
        $sql->bindParam(":id", $id);
        $sql->bindParam(":id_employee", $id_employee);
        $sql->bindParam(":services", $services);
        $sql->bindParam(":img_employee", $fileNew);
        $sql->bindParam(":title_employee", $title_employee);
        $sql->bindParam(":details_employee", $details_employee);
        $sql->bindParam(":position", $position);

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