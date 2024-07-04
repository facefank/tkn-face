<?php
// เชื่อมต่อฐานข้อมูล MySQL ด้วย PDO
include_once('connection.php');

if (isset($_POST['submit'])) {
    // รับข้อมูลจากฟอร์ม
    $title_news = $_POST['title_news'];
    $details_news = $_POST['details_news'];
    $details_newstotal = $_POST['details_newstotal'];

    try {
        // เริ่ม Transaction
        $db->beginTransaction();

        // ส่วนของการ insert ข้อมูลข้อความไปยังตาราง tbl_dataText
        $sql_text = "INSERT INTO tbl_dataText (title_news, details_news, details_newstotal) VALUES (:title_news, :details_news, :details_newstotal)";
        $stmt_text = $db->prepare($sql_text);
        $stmt_text->bindParam(':title_news', $title_news);
        $stmt_text->bindParam(':details_news', $details_news);
        $stmt_text->bindParam(':details_newstotal', $details_newstotal);
        $stmt_text->execute();

        // หา id ที่ถูกเพิ่มล่าสุด
        $last_id = $db->lastInsertId();

        // สร้างโฟลเดอร์เซิร์ฟเวอร์สำหรับการอัปโหลดไฟล์
        $upload_directory = "uploads_epy/";
        if (!file_exists($upload_directory)) {
            mkdir($upload_directory, 0777, true);
        }

        // ส่วนของการ insert ข้อมูลภาพไปยังตาราง tbl_data และอัพโหลดไฟล์ภาพลงในโฟลเดอร์
        foreach ($_FILES['files']['tmp_name'] as $key => $tmp_name) {
            // $image_name = time() . "_" . $_FILES['files']['name'][$key];
            // สร้างชื่อไฟล์ที่ไม่ซ้ำกันจากวันที่ปัจจุบันและเลขสุ่ม
            $image_name = date('d-m-Y') . '_' . uniqid() . '_' . $_FILES['files']['name'][$key];


            $image_path = $upload_directory . basename($image_name);
            move_uploaded_file($tmp_name, $image_path);

            // insert ข้อมูลภาพไปยังตาราง tbl_data
            $sql_image = "INSERT INTO tbl_data (images, data_id) VALUES (:images, :data_id)";
            $stmt_image = $db->prepare($sql_image);
            $stmt_image->bindParam(':images', $image_name);
            $stmt_image->bindParam(':data_id', $last_id);
            $stmt_image->execute();
        }

        // Commit Transaction หลังจาก insert ข้อมูลสำเร็จทั้งสองคำสั่ง
        $db->commit();

        echo "
            <script>
            alert('บันทึกข้อมูลข่าวสารเรียบร้อยแล้ว');
            location.replace('admin.php');
            </script>
            ";
    } catch (PDOException $e) {
        // Rollback Transaction ในกรณีที่มีข้อผิดพลาดเกิดขึ้น
        $db->rollback();
        echo "
            <script>
            alert('บันทึกข้อมูลไม่สำเร็จ');
            location.replace('admin.php');
            </script>
            ";
    }
}

// ปิดการเชื่อมต่อฐานข้อมูล
$db = null;
