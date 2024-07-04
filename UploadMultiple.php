<?php include("connection.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload Multiple</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <style>
        .container {
            max-width: 400px;
        }
    </style>
</head>
<?php include("connection.php");

if (isset($_REQUEST['img-upload'])) {
    for ($i = 0; $i < count($_FILES['multiple_imges']['name']); $i++) {
        $filename[] = basename($_FILES['multiple_imges']['name'][$i]);
        $uploadfile = $_FILES['multiple_imges']['tmp_name'][$i];
        $targetpath = "uploads_epy/" . $filename[$i];
        move_uploaded_file($uploadfile, $targetpath);
    }
    $images = implode(', ', $_FILES['multiple_imges']['name']);

    $sql = $db->prepare("INSERT INTO tbl_data SET images='$images'");
    // $stmt->bindParam(':images', $images);
    $sql->execute();

    if ($sql->rowCount() > 0) {
        //   $msg = "บันทึกแล้ว";
        echo "
                <script>
                alert('เพิ่มข้อมูลพนักงานขายเรียบร้อยแล้ว');
                location.replace('UploadMultiple.php');
                </script>
                ";
    } else {
        // $_SESSION['error'] = "บันทึกข้อมูลไม่สำเร็จ";
        // header("location: wellcome.php");

        echo "<script>
                    alert(เพิ่มข้อมูลพนักงานขายไม่สำเร็จ');
                    location.replace('UploadMultiple.php');
                    </script>
                    ";
    }
}

// ดึงข้อมูลรูปภาพจากฐานข้อมูล
$stmt = $db->prepare("SELECT images FROM tbl_data");
$stmt->execute();
$imagesData = $stmt->fetchAll(PDO::FETCH_ASSOC);



?>




<body>
    <!-- <div class="container"> -->
    <!-- <h3>Test Multiple </h3>
        <form method="POST" enctype="multipart/form-data">
            <label for="" class="form-label">อัพโหลดรูปภาพ </label>
            <input type="file" class="form-control" placeholder="รูปภาพ" id="" name="multiple_imges[]" multiple required><br>
            <input type="submit" class="btn btn-primary" name="img-upload" value="Submit"></input>
        </form> -->
    <!-- <div class="container"> -->


    <!-- <div class="row g-5">
        <?php
        $stmt = $db->query("SELECT * FROM group_department");
        $stmt->execute();
        $queryGroup = $stmt->fetchAll();

        foreach ($queryGroup as $itemGroup) {
            $groupId = $itemGroup['group_id'];
            $stmt = $db->query("SELECT * FROM tbl_department WHERE group_id = $groupId");
            $stmt->execute();
            $row = $stmt->fetchAll();
        ?>

            <div class="col-lg-2 col-md-6 col-8">
                <?php
                foreach ($row as $elementDepartment) {
                ?>
                    <h5 class="text-white mb-2"><?php echo $elementDepartment["department"]; ?></h5>
                    <div class="row">
                        <?php
                        $idDepartment = $elementDepartment["id"];
                        $stmt = $db->query("SELECT * FROM tbl_numberdepartment WHERE department='$idDepartment'");
                        $stmt->execute();
                        $rowNumberDepartment = $stmt->fetchAll();

                        foreach ($rowNumberDepartment as $element) {
                        ?>
                            <div class="col-md-10 mb-0 mb-md-0">
                                <small><?php echo $element["name"]; ?></small><br>
                            </div>
                            <div class="col-md-2 text-md-end">
                                <small><?php echo $element["number"]; ?></small><br>
                            </div>
                        <?php
                        }
                        ?>
                    </div>
                <?php
                }
                ?>
            </div>
        <?php
        }
        ?>
    </div> -->



    
    <div class="row g-4">
        <?php
        $stmt = $db->query("SELECT * FROM group_department");
        $stmt->execute();
        $queryGroup = $stmt->fetchAll();

        foreach ($queryGroup as $itemGroup) {
            $groupId = $itemGroup['group_id'];
            $stmt = $db->query("SELECT * FROM tbl_department WHERE group_id = $groupId");
            $stmt->execute();
            $row = $stmt->fetchAll();
        ?>
            <div class="col col-lg-2">
                <div class="card">
                    <div class="card-body">
                        <?php
                        foreach ($row as $elementDepartment) {
                        ?>
                            <p class='mt-3' style="font-weight: bold;font-size:18px"><?php echo $elementDepartment["department"]; ?></p>
                            <div class='row g-3'>
                                <?php
                                $idDepartment = $elementDepartment["id"];
                                $stmt = $db->query("SELECT * FROM tbl_numberdepartment WHERE department='$idDepartment'");
                                $stmt->execute();
                                $rowNumberDepartment = $stmt->fetchAll();

                                foreach ($rowNumberDepartment as $element) {
                                ?>
                                    <div class="col col-lg-9">
                                        <span><?php echo $element["name"]; ?></span>
                                    </div>
                                    <div class="col col-lg-3 text-right">
                                        <span><?php echo $element["number"]; ?></span>
                                    </div>
                                <?php
                                }
                                ?>
                            </div>
                        <?php
                        }
                        ?>
                    </div>
                </div>
            </div>
        <?php
        }
        ?>
    </div>

</body>

</html>