<?php 
include ("connection.php"); 


if (isset($_POST['submit'])) {
     
    $department = $_POST['select'];
    $name = $_POST['name'];
    $number = $_POST['number'];

    // echo $department;
    // echo $name;
    // echo $number;



    $stmt =$db->prepare("INSERT INTO tbl_numberdepartment (department, name, number) 
    VALUES (:select, :name , :number)");
    $stmt->bindParam(':select',$department);
    $stmt->bindParam(':name',$name);
    $stmt->bindParam(':number',$number);
    $stmt->execute(); 

    if ($stmt) {

        echo "
                <script>
                alert('เพิ่มข้อมูลแผนกเรียบร้อยแล้ว');
                location.replace('admin.php');
                </script>
                ";
    } else {

        echo "<script>
                    alert(เพิ่มข้อมูลแผนกไม่สำเร็จ');
                    location.replace('admin.php');
                    </script>
                    ";
    }
}

?>