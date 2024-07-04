<?php
// session_start();
require_once "connection.php";


if (isset($_POST['submit'])) {

    $images = $_FILES["images"];
    $title = $_POST["title"];
    $details = $_POST["details"];




    $allow = array('jpg', 'jpeg', 'png');    //นามสกุลไฟล์รูปภาพที่สามารถอัพโหลดได้
    $extension = explode(".", $images['name']);  //แยกชื่อไฟล์ออก อ้างอิงจาก.
    $fileActExt = strtolower(end($extension)); //แปลงนามสกุลไฟล์ให้เป็นพิมพ์เล็ก
    $fileNew = rand() . "." . $fileActExt;   //ไม่ให้ชื่อไฟล์ซ้ำ
    $filePath = "uploads_img_employeewelfare/" . $fileNew; //อัพโหลดไปที่Uploads

    //เช็คว่านามสกุลตรงกับallowมั้ย
    if (in_array($fileActExt, $allow)) {
        if ($images['size'] > 0 && $images['error'] == 0) {
            if (move_uploaded_file($images['tmp_name'], $filePath)) {


                $stmt = $db->prepare("INSERT INTO tbl_employeewelfare (images, title, details) 
                VALUES (:images, :title, :details)");
                $stmt->bindParam(':images', $fileNew); //ตัวแปลfilenew
                $stmt->bindParam(':title', $title);
                $stmt->bindParam(':details', $details);
                $stmt->execute();


                if ($stmt) {
                echo 
                "<script>
                alert('เพิ่มข้อมูลสวัสดิการเรียบร้อยแล้ว');
                window.history.back();
                </script>";
                } else {

                echo 
                "<script>
                alert(เพิ่มข้อมูลสวัสดิการไม่สำเร็จ');
                window.history.back();
                </script>";
                }
            }
        }
    }
}
