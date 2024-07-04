<?php
// session_start();
require_once "connection.php";


if (isset($_POST['submit'])) {

    $img_employeenews = $_FILES["img_employeenews"];
    $id_employee = $_POST["id_employee"];
    $title_employeenews = $_POST["title_employeenews"];
    $details_employeenews = $_POST["details_employeenews"];
    $position_employeenews = $_POST["position_employeenews"];



    $allow = array('jpg', 'jpeg', 'png');    //นามสกุลไฟล์รูปภาพที่สามารถอัพโหลดได้
    $extension = explode(".", $img_employeenews['name']);  //แยกชื่อไฟล์ออก อ้างอิงจาก.
    $fileActExt = strtolower(end($extension)); //แปลงนามสกุลไฟล์ให้เป็นพิมพ์เล็ก
    $fileNew = rand() . "." . $fileActExt;   //ไม่ให้ชื่อไฟล์ซ้ำ
    $filePath = "uploads_img_employee/" . $fileNew; //อัพโหลดไปที่Uploads

    //เช็คว่านามสกุลตรงกับallowมั้ย
    if (in_array($fileActExt, $allow)) {
        if ($img_employeenews['size'] > 0 && $img_employeenews['error'] == 0) {
            if (move_uploaded_file($img_employeenews['tmp_name'], $filePath)) {


                $stmt = $db->prepare("INSERT INTO tbl_employeenews (img_employeenews, id_employee, title_employeenews, details_employeenews, position_employeenews) 
            VALUES (:img_employeenews, :id_employee, :title_employeenews, :details_employeenews, :position_employeenews)");
                $stmt->bindParam(':img_employeenews', $fileNew); //ตัวแปลfilenew
                $stmt->bindParam(':id_employee', $id_employee);
                $stmt->bindParam(':title_employeenews', $title_employeenews);
                $stmt->bindParam(':details_employeenews',$details_employeenews);
                $stmt->bindParam(':position_employeenews', $position_employeenews);
                $stmt->execute();


                if ($stmt) {
                    // $_SESSION['success'] = "บันทึกข้อมูลเรียบร้อยแล้ว";
                    // header("location: wellcome.php");
                    echo "
                <script>
                alert('เพิ่มข้อมูลเรียบร้อยแล้ว');
                location.replace('admin.php');
                </script>
                ";
                } else {
                    // $_SESSION['error'] = "บันทึกข้อมูลไม่สำเร็จ";
                    // header("location: wellcome.php");

                    echo "<script>
                    alert(เพิ่มข้อมูลไม่สำเร็จ');
                    location.replace('admin.php');
                    </script>
                    ";
                }
            }
        }
    }
}
