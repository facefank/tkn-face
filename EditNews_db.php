<?php
    include("connection.php");

    if (isset($_POST['update'])) {
        // รับข้อมูลจากฟอร์ม
        $id_news = $_POST['id_news'];
        $title_news = $_POST['title_news'];
        $details_news = $_POST['details_news'];
        $details_newstotal = $_POST['details_newstotal'];

        try {
            // เริ่ม Transaction
            $db->beginTransaction();

            // ส่วนของการ update ข้อมูลข้อความในตาราง tbl_datatext
            $sql_text = "UPDATE tbl_datatext SET title_news = :title_news, details_news = :details_news, details_newstotal = :details_newstotal WHERE id_text = :id_news";
            $stmt_text = $db->prepare($sql_text);
            $stmt_text->bindParam(':title_news', $title_news);
            $stmt_text->bindParam(':details_news', $details_news);
            $stmt_text->bindParam(':details_newstotal', $details_newstotal);
            $stmt_text->bindParam(':id_news', $id_news);
            $stmt_text->execute();

            // ส่วนของการ update ข้อมูลภาพในตาราง tbl_data (หากมีการอัปโหลดรูปภาพใหม่)
            if (!empty($_FILES['files']['tmp_name'][0])) { // ตรวจสอบว่ามีการเลือกไฟล์ใหม่หรือไม่
                // ลบรูปภาพเก่าทั้งหมดก่อนที่จะเพิ่มรูปภาพใหม่
                $sql_delete_images = "DELETE FROM tbl_data WHERE data_id = :data_id";
                $stmt_delete_images = $db->prepare($sql_delete_images);
                $stmt_delete_images->bindParam(':data_id', $id_news);
                $stmt_delete_images->execute();

                // อัปโหลดไฟล์ภาพใหม่และเพิ่มข้อมูลลงในตาราง tbl_data
                foreach ($_FILES['files']['tmp_name'] as $key => $tmp_name) {
                    // สร้างชื่อไฟล์ที่ไม่ซ้ำกันจากวันที่ปัจจุบันและเลขสุ่ม
                    $image_name = date('d-m-Y') . '_' . uniqid() . '_' . $_FILES['files']['name'][$key];

                    // $image_name = time() . "_" . $_FILES['files']['name'][$key];
                    $image_path = "uploads_epy/" . basename($image_name);
                    move_uploaded_file($tmp_name, $image_path);

                    // insert ข้อมูลภาพไปยังตาราง tbl_data
                    $sql_image = "INSERT INTO tbl_data (images, data_id) VALUES (:images, :data_id)";
                    $stmt_image = $db->prepare($sql_image);
                    $stmt_image->bindParam(':images', $image_name);
                    $stmt_image->bindParam(':data_id', $id_news);
                    $stmt_image->execute();
                }
            }

            // Commit Transaction หลังจาก update ข้อมูลสำเร็จ
            $db->commit();

            echo "
        <script>
        alert('อัปเดตข้อมูลข่าวสารเรียบร้อยแล้ว');
        window.history.back();   
        </script>
        "; 
        } catch (PDOException $e) {
            // Rollback Transaction ในกรณีที่มีข้อผิดพลาดเกิดขึ้น
            $db->rollback();
            echo "
        <script>
        alert('อัปเดตข้อมูลไม่สำเร็จ');
        window.history.back();   
        </script>
        ";
        }
    }
    ?>



