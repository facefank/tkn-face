<?php include("connection.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <title>แก้ไขข้อมูลสิทธิ์การใช้งาน</title>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>edit</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />


    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous" />
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@300&family=Noto+Sans+Thai&display=swap" rel="stylesheet">


    <style>
        .container {
            max-width: 500px;
        }

        .navbar {
            /* background-color: #041122; */
            background-color: #14141f;


        }

        body {
            font-family: 'Kanit', sans-serif;
            font-family: 'Noto Sans Thai', sans-serif;

        }

        #edit {
            background-color: #FFEAA5;
        }
    </style>
</head>

<body>
    <div class="container mt-5">

        <form action="edit_permission.php" method="POST">

            <?php
            include("connection.php");
            if (isset($_GET['id'])) {
                $id = $_GET['id'];


                $sql = $db->query("SELECT * FROM role  WHERE id = $id ");
                $sql->execute();
                $stmt = $sql->fetch();

                // ดึงข้อมูลจากตาราง permission
                $permission_sql = $db->query("SELECT * FROM permission WHERE role_id = $id");
                $permission_sql->execute();
                $permissions = $permission_sql->fetchAll(PDO::FETCH_ASSOC);
            }
            ?>

            <h3>แก้ไขข้อมูลสิทธิ์การใช้งาน</h3>
            <hr>
            <div class="mb-3 mt-3">
                <div class="mb-3 mt-3">
                    <label for="" class="form-label">ID ที่แก้ไข </label>
                    <input type="text" class="form-control" value="<?= $stmt["id"]; ?>" placeholder="" name="id" readonly>
                </div>
                <div class="mb-3 mt-3">
                    <label for="" class="form-label">ตำแหน่ง TH</label>
                    <input type="text" class="form-control" value="<?= $stmt["positionNameTh"]; ?>" placeholder="" name="position_th" >
                </div>
                <div class="mb-3 mt-3">
                    <label for="" class="form-label">ตำแหน่ง ENG</label>
                    <input type="text" class="form-control" value="<?= $stmt["positionNameEng"]; ?>" placeholder="" name="position_eng" >
                </div>

                <?php foreach ($permissions as $permission) : ?>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="<?= $permission['id']; ?>" name="<?= $permission['permissionTap']?>" value="true" <?= $permission['permissionStatus'] == 1 ? 'checked' : '' ?>>
                        <label class="form-check-label"><?= $permission['permissionName'] ?></label>
                    </div>
                <?php endforeach; ?>

                <!-- <div class="mb-4 mt-3">
                    <button id="edit" onclick="checkCheckbox()" class="btn btn-sm text-white">แก้ไขข้อมูล</button>
                </div> -->
            </div>
        </form>
        <a href="permission.php" class="btn btn-secondary btn-sm">กลับ</a>
        <button id="edit" onclick="checkCheckbox()" class="btn btn-sm text-white">อัพเดตข้อมูล</button>
        <hr>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <script>
        function checkCheckbox() {
            var checkbox1 = document.getElementsByName("#table-news");
            var checkbox2 = document.getElementsByName("#table-employeenews");
            var checkbox3 = document.getElementsByName("#table-employeeresign");
            var checkbox4 = document.getElementsByName("#tbl-outstandingemployee");
            var checkbox5 = document.getElementsByName("#tbl-outstandingsales");
            var checkbox6 = document.getElementsByName("#table-department");
            var checkbox7 = document.getElementsByName("#table-numberdepartment");
            var checkbox8 = document.getElementsByName("#table-users");
            var checkbox9 = document.getElementsByName("#permission.php");
            var checkbox10 = document.getElementsByName("#register.php");
            var checkbox11 = document.getElementsByName("#Tbl_Employeewelfare.php");


            var position_th = document.getElementsByName("position_th");
            var position_eng = document.getElementsByName("position_eng");
            var id = document.getElementsByName("id");

            // console.log(checkbox1[0]?.id);

          
            var data = {
                roleId: id[0]?.value,
                position_th:position_th[0]?.value,
                position_eng:position_eng[0]?.value,
                list: [{
                    id: checkbox1[0]?.id,
                    value: checkbox1[0]?.checked,
                }, {
                     id: checkbox2[0]?.id,
                    value: checkbox2[0]?.checked,
                }, {
                     id: checkbox3[0]?.id,
                    value: checkbox3[0]?.checked,
                }, {
                     id: checkbox4[0]?.id,
                    value: checkbox4[0]?.checked,
                }, {
                     id: checkbox5[0]?.id,
                    value: checkbox5[0]?.checked,
                }, {
                     id: checkbox6[0]?.id,
                    value: checkbox6[0]?.checked,
                }, {
                     id: checkbox7[0]?.id,
                    value: checkbox7[0]?.checked,
                }, {
                     id: checkbox8[0]?.id,
                    value: checkbox8[0]?.checked,
                },{
                     id: checkbox9[0]?.id,
                    value: checkbox9[0]?.checked,
                },{
                     id: checkbox10[0]?.id,
                    value: checkbox10[0]?.checked,
                },{
                     id: checkbox11[0]?.id,
                    value: checkbox11[0]?.checked,
                }]
            };

            console.log(data);

            $.ajax({
                type: "POST",
                url: "EditPermission_db.php",
                data: data,
                success: function(response) {
                    alert('แก้ไขสิทธิ์การเข้าใช้งานเรียบร้อยแล้ว');
                    window.history.back();   
                },
                error: function(error) {
                    alert('แก้ไขสิทธิ์การเข้าใช้งานสำเร็จ');
                    window.history.back();   
                }
            });
        }
    </script>

    <!-- Javascript -->
    <script src="assets/plugins/popper.min.js"></script>
    <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <!-- Page Specific JS -->
    <script src="assets/js/app.js"></script>
</body>

</html>

<!-- <?php
include("connection.php");
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // รับข้อมูลที่ต้องการอัปเดต
    $positionNameTh = $_POST['position_th'];
    $positionNameEng = $_POST['position_eng'];
    $list = ($_POST['list']);
    $permissionList = json_encode($list, true);
    $roleId = $_POST['role_id']; // รับ role_id ที่ต้องการอัปเดต

    // คำสั่ง SQL สำหรับอัปเดตข้อมูลในตาราง role
    $stmt = $db->prepare("UPDATE role SET positionNameTh = :position_th, positionNameEng = :position_eng WHERE id = :role_id");
    $stmt->bindParam(':position_th', $positionNameTh);
    $stmt->bindParam(':position_eng', $positionNameEng);
    $stmt->bindParam(':role_id', $roleId);
    $stmt->execute();

    // อัปเดตข้อมูลในตาราง permission
    $dataArray = json_decode($permissionList);
    foreach ($dataArray as $item) {
        $value = $item->value === 'true' ? true : false;
        $key = $item->key;
        $tabName = $item->tabName;

        // คำสั่ง SQL สำหรับอัปเดตข้อมูลในตาราง permission
        $stmtt = $db->prepare("UPDATE permission SET permissionStatus = :permissionStatus WHERE permissionName = :permissionName AND permissionTap = :permissionTap AND role_id = :role_id");
        $stmtt->bindParam(':permissionName', $key);
        $stmtt->bindParam(':permissionStatus', $value);
        $stmtt->bindParam(':permissionTap', $tabName);
        $stmtt->bindParam(':role_id', $roleId);
        $stmtt->execute();
    }
}
?> -->
