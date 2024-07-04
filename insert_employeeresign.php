<?php 
// session_start();
 include ("connection.php");


if (isset($_POST["submit"])) {
    
    $img_employeeresign =$_FILES["img_employeeresign"];
    $id_employeeresign = $_POST["id_employeeresign"];
    $title_employeeresign = $_POST["title_employeeresign"];
    $details_employeeresign = $_POST["details_employeeresign"];
    $position_employeeresign = $_POST["position_employeeresign"];


    $allow = array('jpg', 'jpeg', 'png');    //นามสกุลไฟล์รูปภาพที่สามารถอัพโหลดได้
    $extension = explode(".",$img_employeeresign['name']);  //แยกชื่อไฟล์ออก อ้างอิงจาก.
    $fileActExt = strtolower(end($extension)); //แปลงนามสกุลไฟล์ให้เป็นพิมพ์เล็ก
    $fileNew = rand() . "." . $fileActExt;   //ไม่ให้ชื่อไฟล์ซ้ำ
    $filePath = "uploads_img_employeeresign/".$fileNew; //อัพโหลดไปที่Uploads
     
    //เช็คว่านามสกุลตรงกับallowมั้ย
    if(in_array($fileActExt, $allow)){  
        if($img_employeeresign['size'] > 0 && $img_employeeresign['error'] == 0 ){
            if (move_uploaded_file($img_employeeresign['tmp_name'], $filePath)){

    
            $stmt = $db->prepare("INSERT INTO tbl_employeeresign (img_employeeresign,id_employeeresign,title_employeeresign,details_employeeresign, position_employeeresign) 
            VALUES (:img_employeeresign,:id_employeeresign,:title_employeeresign,:details_employeeresign,:position_employeeresign)");
            $stmt->bindParam(':img_employeeresign', $fileNew); //ตัวแปลfilenew
            $stmt->bindParam(':id_employeeresign', $id_employeeresign);
            $stmt->bindParam(':title_employeeresign', $title_employeeresign);
            $stmt->bindParam(':details_employeeresign', $details_employeeresign);
            $stmt->bindParam(':position_employeeresign', $position_employeeresign);
            $stmt->execute();

       
                if ($stmt) {
                echo"
                <script>
                alert('เพิ่มข้อมูลเรียบร้อยแล้ว');
                location.replace('admin.php');
                </script>
                ";

                    
                } else { 
                    echo"<script>
                    alert(เพิ่มข้อมูลไม่สำเร็จ');
                    location.replace('admin.php');
                    </script>
                    ";
    
                }
 
            }

        }   

    }

}
?>


