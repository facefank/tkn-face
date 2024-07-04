<!-- ลบข้อมูลในตารางปฏิทินกิจกรรม -->

<?php

include("connection.php");

if (isset($_GET['deletecalender'])) {
    $delete_id = $_GET['deletecalender'];
    $deletestmt = $db->query("DELETE FROM tbl_event_calender WHERE id_calender = $delete_id");
    $deletestmt->execute();

    if ($deletestmt) {
        echo "
   <script>
   alert('ลบข้อมูลเรียบร้อยแล้ว');
   location.replace('wellcome.php');
   </script>
   ";
    } else {
        echo "
    <script>
    alert('ลบข้อมูลไม่สำเร็จ');
    location.replace('wellcome.php');
    </script>
    ";
    }
}
?>
<!-- ลบข้อมูลในตารางปฏิทินกิจกรรม -->


<!-- ลบข้อมูลในตารางข่าว -->

<?php

include("connection.php");

if (isset($_GET['delete'])) {
    $delete_id = $_GET['delete'];
    $deletestmt = $db->query("DELETE FROM new WHERE id_news = $delete_id");
    $deletestmt->execute();

    if ($deletestmt) {
        echo "
   <script>
   alert('ลบข้อมูลเรียบร้อยแล้ว');
   location.replace('wellcome.php');
   </script>
   ";
    } else {
        echo "
    <script>
    alert('ลบข้อมูลไม่สำเร็จ');
    location.replace('wellcome.php');
    </script>
    ";
    }
}
?>
<!-- ลบข้อมูลในตารางข่าว -->




<!-- ลบข้อมูลในตารางพนักงานใหม่ -->
<?php

include("connection.php");

if (isset($_GET['deleteemployee'])) {
    $delete_id = $_GET['deleteemployee'];
    $deletestmt = $db->query("DELETE FROM tbl_employeenews WHERE id = $delete_id");
    $deletestmt->execute();

    if ($deletestmt) {
        echo "
   <script>
   alert('ลบข้อมูลเรียบร้อยแล้ว');
    location.replace('wellcome.php');
   </script>
   ";
    } else {
        echo "
    <script>
    alert('ลบข้อมูลไม่สำเร็จ');
    location.replace('wellcome.php');
    </script>
    ";
    }
}
?>
<!-- ลบข้อมูลในตารางพนักงานใหม่ -->


<!-- ลบข้อมูลในตารางพนักงานลาออก -->
<?php

include("connection.php");

if (isset($_GET['deleteemployeeresign'])) {
    $delete_id = $_GET['deleteemployeeresign'];
    $deletestmt = $db->query("DELETE FROM tbl_employeeresign WHERE id = $delete_id");
    $deletestmt->execute();

    if ($deletestmt) {
        echo "
   <script>
   alert('ลบข้อมูลเรียบร้อยแล้ว');
    location.replace('wellcome.php');
   </script>
   ";
    } else {
        echo "
    <script>
    alert('ลบข้อมูลไม่สำเร็จ');
    location.replace('wellcome.php');
    </script>
    ";
    }
}
?>
<!-- ลบข้อมูลในตารางพนักงานลาออก -->




<?php
session_start();
// เขียนทุกครั้งที่มีการใช้ตัวแปร session

// ถ้าไม่มี $_SESSION['is_logged_in'] (เก็บสถานะ login โดยจะเก็บตอนที่สมัครสมาชิกหรือ login แล้วเท่านั้น) ให้กลับไปยังหน้า login.php เพื่อทำการ login ก่อน


if (!isset($_SESSION['is_logged_in'])) {
    header('location: login.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>จัดการข่าว</title>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@300&family=Noto+Sans+Thai&display=swap" rel="stylesheet">


    <!-- ลิงค์ของnavbar -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- ลิงค์ของnavbar -->

    <!-- <link rel="stylesheet" href="wellcome.css">
    <link rel="stylesheet" href="css/style.css"> -->
    <!-- ลิงค์icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">


    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous" />
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>

    <style>
        .navbar {
            background-color: #041122;
        }

        body {
            font-family: 'Kanit', sans-serif;
            font-family: 'Noto Sans Thai', sans-serif;
            /* background-color: #F1FDF3; */
        }

        #btn {
            background-color: #00cf85;
            color: #fff;
        }
    </style>





</head>

<body class="bg-light">

    <?php include("connection.php"); ?>

    <nav class="navbar navbar-expand-lg navbar-dark p-md-2">
        <div class="container">
            <a class="navbar-brand p-2" href="#">
                <img src="img-tkn/logo-tkn-new.png" alt="" style="width: 130px;" class="fixed">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse " id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="wellcome.php"><i class="fas fa-home"></i>
                            Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="profile.php"><i class="fas fa-user-circle"></i> Profile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="logout.php"><i class="fas fa-sign-out-alt"></i> Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>




    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="mt-5">Home Page <i class="bi bi-pencil-square"></i></h1>
                <div class="card mt-5 text-center">
                    <div class="card-body">
                        <h1>ยินดีต้อนรับ</h1>
                        <h3><?php echo $_SESSION['username']; ?></h3>
                    </div>
                </div>
            </div>
        </div>
    </div><br>



    <!-- โมเดลเพิ่มข้อมูลข่าว -->
    <div class="modal fade" id="newsModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Add News</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="insert.php" method="POST" enctype="multipart/form-data">
                        <div class="mb-3">
                            <label for="images_news" class="form-label">Uploads Img :</label>
                            <input type="file" class="form-control" placeholder="รูปภาพ" id="imagesInput" name="images_news" required><br>
                            <img width="150px" id="previewImg" alt="">
                        </div>
                        <div class="mb-3">
                            <label for="title_news" class="form-label">Title :</label>
                            <input type="text" class="form-control" placeholder="ป้อนชื่อหัวข้อ" name="title_news" required>
                        </div>
                        <div class="mb-3">
                            <label for="details_news" class="form-label">Details Card:</label>
                            <textarea class="form-control" placeholder="ป้อนรายละเอียด" name="details_news" col="4" required></textarea>
                            <!-- <input type="text" class="form-control " placeholder="ป้อนรายละเอียด" name="details_news" required> -->
                        </div>

                        <div class="mb-3">
                            <label for="details_newstotal" class="form-label">Details Total:</label>
                            <textarea class="form-control" placeholder="ป้อนรายละเอียดข่าวทั้งหมด" name="details_newstotal" col="4" required></textarea>
                            <!-- <input type="text" class="form-control " placeholder="ป้อนรายละเอียด" name="details_news" required> -->
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" name="submit" class="btn btn-success">Submit</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
    <!-- โมเดลเพิ่มข้อมูลข่าว -->

     
    <div class="container my-5">

        <h2>ตารางข่าวสาร</h2>
        <?php if (isset($_SESSION['success'])) { ?>
            <div class="alert alert-success">
                <?php
                echo $_SESSION['success'];
                unset($_SESSION['success']);
                ?>
            </div>
        <?php } ?>
        <?php if (isset($_SESSION['success'])) { ?>
            <div class="alert alert-danger">
                <?php
                echo $_SESSION['error'];
                unset($_SESSION['error']);
                ?>
            </div>
        <?php } ?>


        <hr class="container">
        <table class="table table-bordered">
            <thead class="table-success text-dark">
                <tr>
                    <th>id</th>
                    <th>รูปภาพ</th>
                    <th>ชื่อ</th>
                    <th>รายละเอียดการ์ด</th>
                    <th>รายละเอียดทั้งหมด</th>
                    <th>แก้ไข</th>
                    <th>ลบ</th>
                </tr>
            </thead>
            <tbody class="bg-white">
                <?php
                $stmt = $db->query("SELECT * FROM new");
                $stmt->execute();
                $row = $stmt->fetchAll();

                if (!$row) {
                    echo "<tr><td colspan='6' class='text-center'>ไม่มีข้อมูล</td></tr>";
                } else {
                    foreach ($row as $rows) {
                ?>

                        <tr>
                            <td><?= $rows['id_news']; ?></td>
                            <td><img width="150px" src="uploads/<?= $rows['images_news']; ?>" class="rounded"></td>
                            <td><?= $rows['title_news'] ?></td>
                            <td><?= $rows['details_news'] ?></td>
                            <td><?= $rows['details_newstotal'] ?></td>
                            <td><a href="edit_news.php?id=<?= $rows['id_news']; ?>" class="btn btn-warning btn-sm">แก้ไข</a></td>
                            <td><a href="?delete=<?= $rows['id_news']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('ต้องการลบหรือไม่');">ลบ</a></td>
                        </tr>      
                <?php
                    }
                }
                ?>
            </tbody>
        </table>
        <div class="container text-center">
            <a id="btn" class="btn  btn-sm " data-bs-toggle="modal" data-bs-target="#newsModal">เพิ่มข้อมูล</a>
        </div>
        <hr>
    </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>


    <!-- พรีวิวรูปภาพตอนเพิ่มข้อมูลข่าว -->
    <script>
        let imagesInput = document.getElementById('imagesInput');
        let previewImg = document.getElementById('previewImg');

        imagesInput.onchange = evt => {
            const [file] = imagesInput.files;
            if (file) {
                previewImg.src = URL.createObjectURL(file);
            }
        }
    </script>



    <!-- ตารางพนักงาน -->

    <div class="container my-5">
        <h2>ตารางพนักงานเข้าใหม่</h2>
        <hr>
        <table class="table table-bordered">
            <thead class="table-success">
                <tr>
                    <th>id</th>
                    <th width="200px">เลขประจำตัวพนักงาน</th>
                    <th>รูปภาพ</th>
                    <th>ชื่อ-นามสกุล</th>
                    <th>รายละเอียด</th>
                    <th>ตำแหน่ง</th>
                    <th>แก้ไข</th>
                    <th>ลบ</th>
                </tr>
            <tbody class="bg-white">
                <?php
                $stmt = $db->query("SELECT * FROM tbl_employeenews");
                $stmt->execute();
                $row = $stmt->fetchAll();

                if (!$row) {
                    echo "<tr><td colspan='6' class='text-center'>ไม่มีข้อมูล</td></tr>";
                } else {
                    foreach ($row as $rows) {
                ?>
                        <tr>
                            <td><?= $rows['id']; ?></td>
                            <td><?= $rows['id_employee'] ?></td>
                            <td width="100px"><img width="150px" src="uploads_img_employee/<?= $rows['img_employeenews']; ?>" class="rounded"></td>
                            <td><?= $rows['title_employeenews']; ?></td>
                            <td><?= $rows['details_employeenews'] ?></td>
                            <td><?= $rows['position_employeenews']; ?></td>
                            <td><a href="edit_employeenews.php?id=<?= $rows['id']; ?>" class="btn btn-warning btn-sm">แก้ไข</a></td>
                            <td><a href="?deleteemployee=<?= $rows['id']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('ต้องการลบหรือไม่');">ลบ</a></td>
                        </tr>
                <?php
                    }
                }
                ?>

            </tbody>
            </thead>
        </table>
        <div class="container text-center">
            <button id="btn" type="button" class="btn btn-sm " data-bs-toggle="modal" data-bs-target="#employeeModal">เพิ่มข้อมูล</button>
        </div>
        <hr>
    </div>




    <!-- โมเดลเพิ่มข้อมูลพนักงงานใหม่ -->

    <div class="modal fade" id="employeeModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Add Employee</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body">
                    <form action="insert_employee.php" method="POST" enctype="multipart/form-data">
                        <div class="mb-3">
                            <label for="img_employeenews" class="form-label">อัพโหลดรูปภาพ :</label>
                            <input type="file" class="form-control" placeholder="รูปภาพ" id="imgInput" name="img_employeenews" required><br>
                            <img width="150px" id="PreviewImg" alt="" class="rounded">
                        </div>

                        <div class="mb-3">
                            <label for="id_employee" class="form-label">รหัสพนักงาน :</label>
                            <input type="text" class="form-control" placeholder="ป้อนรหัสพนักงาน" name="id_employee" required>
                        </div>

                        <div class="mb-3">
                            <label for="title_employeenews" class="form-label">ชื่อ-นามสกุล :</label>
                            <input type="text" class="form-control " placeholder="ป้อนชื่อนามสกุล" name="title_employeenews" required>
                        </div>

                        <div class="mb-3">
                            <label for="details_employeenews" class="form-label">รายละเอียด :</label>
                            <input type="text" class="form-control " placeholder="ป้อนรายละเอียด" name="details_employeenews" required>
                        </div>

                        <div class="mb-3">
                            <label for="position_employeenews" class="form-label">ตำแหน่ง :</label>
                            <input type="text" class="form-control " placeholder="ป้อนตำแหน่ง" name="position_employeenews" required>
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" name="submit" class="btn btn-success">Submit</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
    <!-- โมเดลเพิ่มข้อมูลพนักงงานใหม่ -->



    <!-- พรีวิวรูปภาพก่อนเพิ่มข้อมูลพนักงานใหม่-->
    <script>
        let imgInput = document.getElementById('imgInput');
        let PreviewImg = document.getElementById('PreviewImg');

        imgInput.onchange = evt => {
            const [file] = imgInput.files;
            if (file) {
                PreviewImg.src = URL.createObjectURL(file);
            }
        }
    </script>
    <!-- พรีวิวรูปภาพก่อนเพิ่มข้อมูลพนักงานใหม่-->







    <!-- ตารางพนักงานลาออก -->

    <div class="container my-5">
        <h2>ตารางพนักงานลาออก</h2>
        <hr>
        <table class="table table-bordered">
            <thead class="table-success">
                <tr>
                    <th>id</th>
                    <th width="200px">เลขประจำตัวพนักงาน</th>
                    <th>รูปภาพ</th>
                    <th>ชื่อ-นามสกุล</th>
                    <th>รายละเอียด</th>
                    <th>ตำแหน่ง</th>
                    <th>แก้ไข</th>
                    <th>ลบ</th>
                </tr>
            <tbody class="bg-white">
                <?php
                $stmt = $db->query("SELECT * FROM tbl_employeeresign");
                $stmt->execute();
                $row = $stmt->fetchAll();

                if (!$row) {
                    echo "<tr><td colspan='6' class='text-center'>ไม่มีข้อมูล</td></tr>";
                } else {
                    foreach ($row as $rows) {
                ?>
                        <tr>
                            <td><?php echo $rows['id']; ?></td>
                            <td><?php echo $rows['id_employeeresign']; ?></td>
                            <td width="100px"><img width="150px" src="uploads_img_employeeresign/<?= $rows['img_employeeresign']; ?>" class="rounded"></td>
                            <td><?php echo $rows['title_employeeresign']; ?></td>
                            <td><?php echo $rows['details_employeeresign']; ?></td>
                            <td><?php echo $rows['position_employeeresign']; ?></td>
                            <td><a href="edit_employeeresign.php?id=<?= $rows['id']; ?>" class="btn btn-warning btn-sm">แก้ไข</a></td>
                            <td><a href="?deleteemployeeresign=<?= $rows['id']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('ต้องการลบหรือไม่');">ลบ</a></td>

                        </tr>
                <?php
                    }
                }
                ?>
            </tbody>
            </thead>
        </table>
        <div class="container text-center">
            <a id="btn" class="btn btn-sm" data-bs-toggle="modal" data-bs-target="#employeeresignModal">เพิ่มข้อมูล</a>
        </div>
        <hr>
    </div>




    <!-- โมเดลเพิ่มข้อมูลพนักงงานลาออก-->

    <div class="modal fade" id="employeeresignModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Add EmployeeResign</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body">
                    <form action="insert_employeeresign.php" method="POST" enctype="multipart/form-data">
                        <div class="mb-3">
                            <label for="img_employeeresign" class="form-label">อัพโหลดรูปภาพ :</label>
                            <input type="file" class="form-control" placeholder="รูปภาพ" id="imgInputresign" name="img_employeeresign" required><br>
                            <img width="150px" id="PreviewImgresign" alt="" class="rounded">
                        </div>

                        <div class="mb-3">
                            <label for="id_employeeresign" class="form-label">รหัสพนักงาน :</label>
                            <input type="text" class="form-control" placeholder="ป้อนรหัสพนักงาน" name="id_employeeresign" required>
                        </div>

                        <div class="mb-3">
                            <label for="title_employeeresign" class="form-label">ชื่อ-นามสกุล :</label>
                            <input type="text" class="form-control " placeholder="ป้อนชื่อนามสกุล" name="title_employeeresign" required>
                        </div>

                        <div class="mb-3">
                            <label for="details_employeeresign" class="form-label">รายละเอียด :</label>
                            <input type="text" class="form-control " placeholder="ป้อนรายละเอียด" name="details_employeeresign" required>
                        </div>

                        <div class="mb-3">
                            <label for="position_employeeresign" class="form-label">ตำแหน่ง :</label>
                            <input type="text" class="form-control " placeholder="ป้อนตำแหน่ง" name="position_employeeresign" required>
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" name="submit" class="btn btn-success">Submit</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
    <!-- โมเดลเพิ่มข้อมูลพนักงงานลาออก -->



    <!-- พรีวิวรูปภาพก่อนเพิ่มข้อมูลพนักงานลาออก-->
    <script>
        let imgInputresign = document.getElementById('imgInputresign');
        let PreviewImgresign = document.getElementById('PreviewImgresign');

        imgInputresign.onchange = evt => {
            const [file] = imgInputresign.files;
            if (file) {
                PreviewImgresign.src = URL.createObjectURL(file);
            }
        }
    </script>
    <!-- พรีวิวรูปภาพก่อนเพิ่มข้อมูลพนักงานลาออก -->





    <!-- tablevent -->
    <div class="container">
        <h2>ตารางปฏิทินกิจกรรม</h2>
        <hr>
        <table class="table table-bordered">
            <thead class="table-success">
                <tr>
                    <th>id</th>
                    <th>วัน/เดือน/ปี</th>
                    <th>ชื่อกิจกรรม</th>
                    <th>แก้ไข</th>
                    <th>ลบ</th>
                </tr>
            <tbody class="bg-white">
                <?php
                $stmt = $db->query("SELECT * FROM tbl_event_calender");
                $stmt->execute();
                $row = $stmt->fetchAll();

                if (!$row) {
                    echo "<tr><td colspan='6' class='text-center'>ไม่มีข้อมูล</td></tr>";
                } else {
                    foreach ($row as $rows) {
                ?>
                        <tr>
                            <td><?php echo $rows['id_calender']; ?></td>
                            <td><?php echo $rows['date_calender']; ?></td>
                            <td><?php echo $rows['event_calender']; ?></td>
                            <td><a href="edit_eventcalender.php?id_calender=<?= $rows['id_calender']; ?>" class="btn btn-warning btn-sm">แก้ไข</a></td>
                            <td><a href="?deletecalender=<?= $rows['id_calender']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('ต้องการลบหรือไม่');">ลบ</a></td>

                        </tr>
                <?php
                    }
                }
                ?>
            </tbody>
        </table>
        <div class="container text-center">
            <a id="btn" class="btn btn-sm" data-bs-toggle="modal" data-bs-target="#eventModal">เพิ่มข้อมูล</a>
        </div>
        <hr>
    </div>





    <!-- โมเดลรับข้อมูลกิจกรรม -->

    <div class="modal fade" id="eventModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">เพิ่มข้อมูลปฏิทินกิจกรรม</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <div class="modal-body">
                    <form action="insert_event.php" method="POST" enctype="multipart/form-data">



                        <div class="mb-3">
                            <label for="date_calender" class="form-label">วัน/เดือน/ปี :</label>
                            <input type="date" class="form-control " placeholder="ป้อนวันเดือนปี" name="date_calender" required>
                        </div>

                        <div class="mb-3">
                            <label for="event_calender" class="form-label">ชื่อกิจกรรม :</label>
                            <input type="text" class="form-control " placeholder="ป้อนรายละเอียดกิจกรรม" name="event_calender" required>
                        </div>

                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" name="submit" class="btn btn-success">Submit</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>







    <!-- โมเดลรับข้อมูลกิจกรรม -->





    <!-- tableevent -->










</body>

</html>