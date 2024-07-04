<?php 
// session_start();
require_once "connection.php";


if (isset($_POST['submit'])) {
    $id_employee = $_POST["id_employee"];
    $img_employee =$_FILES["img_employee"];
    $services = $_POST["services"];
    $title_employee = $_POST["title_employee"];
    $details_employee = $_POST["details_employee"];
    $position = $_POST["position"];



    $allow = array('jpg', 'jpeg', 'png');    //นามสกุลไฟล์รูปภาพที่สามารถอัพโหลดได้
    $extension = explode(".",$img_employee['name']);  //แยกชื่อไฟล์ออก อ้างอิงจาก.
    $fileActExt = strtolower(end($extension)); //แปลงนามสกุลไฟล์ให้เป็นพิมพ์เล็ก
    $fileNew = rand() . "." . $fileActExt;   //ไม่ให้ชื่อไฟล์ซ้ำ
    $filePath = "upload_img_employeeoutstanding/".$fileNew; //อัพโหลดไปที่Uploadพนักงานดีเด่น
     
    //เช็คว่านามสกุลตรงกับallowมั้ย
    if(in_array($fileActExt, $allow)){  
        if($img_employee['size'] > 0 && $img_employee['error'] == 0 ){
            if (move_uploaded_file($img_employee['tmp_name'], $filePath)){

    
            $stmt = $db->prepare("INSERT INTO tbl_outstandingemployee (id_employee,img_employee,title_employee,details_employee,position,services) 
            VALUES (:id_employee,:img_employee,:title_employee,:details_employee,:position,:services)");
            // $stmt->bindParam(':id_news', $id_news);
            $stmt->bindParam(':id_employee', $id_employee);
            $stmt->bindParam(':img_employee', $fileNew); //ตัวแปลfilenew
            $stmt->bindParam(':title_employee', $title_employee);
            $stmt->bindParam(':details_employee', $details_employee);
            $stmt->bindParam(':position', $position);
            $stmt->bindParam(':services', $services);
            $stmt->execute();   

       
                if ($stmt) {
                    // $_SESSION['success'] = "บันทึกข้อมูลเรียบร้อยแล้ว";
                    // header("location: wellcome.php");
                echo"
                <script>
                alert('เพิ่มข้อมูลเรียบร้อยแล้ว');
                location.replace('admin.php');
                </script>
                ";

                    
                } else {
                    // $_SESSION['error'] = "บันทึกข้อมูลไม่สำเร็จ";
                    // header("location: wellcome.php");
                    
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


