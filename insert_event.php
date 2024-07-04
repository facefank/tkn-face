<?php
// session_start();
include ("connection.php");


if (isset($_POST['submit'])) {

    $date_calender = $_POST["date_calender"];
    $event_calender = $_POST["event_calender"];

    $stmt = $db->prepare("INSERT INTO tbl_event_calender (date_calender, event_calender) 
            VALUES (:date_calender, :event_calender)");
    $stmt->bindParam(':date_calender', $date_calender);
    $stmt->bindParam(':event_calender', $event_calender);
    $stmt->execute();

    if ($stmt) {

        echo "
                <script>
                alert('เพิ่มข้อมูลเรียบร้อยแล้ว');
                location.replace('admin.php');
                </script>
                ";
    } else {

        echo "<script>
                    alert(เพิ่มข้อมูลไม่สำเร็จ');
                    location.replace('admin.php');
                    </script>
                    ";
    }
}

?>
