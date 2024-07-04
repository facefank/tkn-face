<?php include("ckeditor_db.php"); 


// if (isset($_POST['submit'])) {

     // รับข้อมูลจาก POST request
     $editorData = $_POST['editorData'];

     // ทำการ insert ข้อมูลลงในฐานข้อมูล
     $sql = "INSERT INTO employee (name) VALUES (:editorData)";
     $stmt = $db->prepare($sql);
     $stmt->bindParam(':editorData', $editorData);
     $stmt->execute();
 
     echo "บันทึกข้อมูลลงฐานข้อมูลแล้ว";

// }


?>
