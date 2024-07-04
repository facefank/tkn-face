<?php

$db_host = "localhost"; 
$db_user = "root";     
$db_password = "";
$db_name = "testeditor_db";

try {   //ทำการเชื่อมต่อ database
    $db = new PDO("mysql:host={$db_host}; dbname={$db_name}", $db_user, $db_password);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "connectes success";
}
catch (PDOException $e) {   //หากเชื่อมต่อผิดพลาดให้แสดงข้อความเตือน
    echo "Failed to connect" . $e->getMessage();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $description = $_POST['description'];

    $uploadDirectory = 'upload/';
    $uploadedFiles = [];

    foreach ($_FILES['files']['tmp_name'] as $key => $tmp_name) {
        $fileName = $_FILES['files']['name'][$key];
        $uploadPath = $uploadDirectory . $fileName;

        if (move_uploaded_file($tmp_name, $uploadPath)) {
            $uploadedFiles[] = $fileName;

            // บันทึกข้อมูลลงในฐานข้อมูล
            $stmt = $db->prepare("INSERT INTO imags (testname,testdec) VALUES (:testname,:testdec)");
            $stmt->execute([$fileName, $description]);
        }
    }

    echo "อัพโหลดสำเร็จ! ไฟล์ที่อัพโหลด: " . implode(", ", $uploadedFiles);
}
?>
