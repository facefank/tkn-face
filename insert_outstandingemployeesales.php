<?php 
// session_start();
require_once "connection.php";


if (isset($_POST['submit'])) {
    $id_employeesales = $_POST["id_employeesales"];
    $img_employeesales =$_FILES["img_employeesales"];
    $sales = $_POST["sales"];
    $title_employeesales = $_POST["title_employeesales"];
    $details_employeesales = $_POST["details_employeesales"];



    $allow = array('jpg', 'jpeg', 'png');    //นามสกุลไฟล์รูปภาพที่สามารถอัพโหลดได้
    $extension = explode(".",$img_employeesales['name']);  //แยกชื่อไฟล์ออก อ้างอิงจาก.
    $fileActExt = strtolower(end($extension)); //แปลงนามสกุลไฟล์ให้เป็นพิมพ์เล็ก
    $fileNew = rand() . "." . $fileActExt;   //ไม่ให้ชื่อไฟล์ซ้ำ
    $filePath = "upload_img_employeesales/".$fileNew; //อัพโหลดไปที่Uploadพนักงานดีเด่น
     
    //เช็คว่านามสกุลตรงกับallowมั้ย
    if(in_array($fileActExt, $allow)){  
        if($img_employeesales['size'] > 0 && $img_employeesales['error'] == 0 ){
            if (move_uploaded_file($img_employeesales['tmp_name'], $filePath)){

    
            $stmt = $db->prepare("INSERT INTO tbl_outstandingemployeesales (id_employeesales,img_employeesales,sales,title_employeesales,details_employeesales) 
            VALUES (:id_employeesales,:img_employeesales,:sales,:title_employeesales,:details_employeesales)");
            // $stmt->bindParam(':id_news', $id_news);
            $stmt->bindParam(':id_employeesales', $id_employeesales);
            $stmt->bindParam(':img_employeesales', $fileNew); //ตัวแปลfilenew
            $stmt->bindParam(':sales', $sales);
            $stmt->bindParam(':title_employeesales', $title_employeesales);
            $stmt->bindParam(':details_employeesales', $details_employeesales);
            $stmt->execute();   

       
                if ($stmt) {
                    // $_SESSION['success'] = "บันทึกข้อมูลเรียบร้อยแล้ว";
                    // header("location: wellcome.php");
                echo"
                <script>
                alert('เพิ่มข้อมูลพนักงานขายเรียบร้อยแล้ว');
                location.replace('admin.php');
                </script>
                ";

                    
                } else {
                    // $_SESSION['error'] = "บันทึกข้อมูลไม่สำเร็จ";
                    // header("location: wellcome.php");
                    
                    echo"<script>
                    alert(เพิ่มข้อมูลพนักงานขายไม่สำเร็จ');
                    location.replace('admin.php');
                    </script>
                    ";
    
                }
 
            }

        }   

    }

}
?>


