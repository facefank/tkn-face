<?php include("connection.php"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <title>แก้ไขข้อมูลผู้ใช้งานระบบ</title>

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
        #edit{
		background-color: #FFEAA5;
		}
    </style>
</head>

<body>
    <div class="container mt-5">

        <form action="EditUsers_db.php" method="POST">

            <?php
            include("connection.php");
            if (isset($_GET['id'])) {
                $id = $_GET['id'];


                $sql = $db->query("SELECT * FROM Users  WHERE user_id = $id ");
                $sql->execute();
                $stmt = $sql->fetch();
                // echo $stmt;
            }
            ?>

            <h3>แก้ไขข้อมูลผู้ใช้งานระบบ</h3>
            <hr>
            <div class="mb-3 mt-3">
                <div class="mb-3 mt-3">
                    <label for="" class="form-label">ID ที่แก้ไข </label>
                    <input type="text" class="form-control" value="<?= $stmt["user_id"]; ?>" placeholder="" name="id" readonly>
                </div>
                <div class="form-outline mb-2">
                <label class="form-label" for="form1Example1">ชื่อ</label>
                <input type="text" value="<?= $stmt['firstname']; ?>" name="firstname" class="form-control" />
            </div>

            <div class="form-outline mb-2">
                <label class="form-label" for="form1Example1">นามสกุล</label>
                <input type="text" value="<?= $stmt['lastname'] ?>" name="lastname" class="form-control" />
            </div>

            <div class="form-outline mb-2">
                <label class="form-label" for="form1Example1">Username</label>
                <input type="text" value="<?= $stmt['username'] ?>" name="username" class="form-control" />
            </div>

            <!-- <div class="form-outline mb-2">
                <label class="form-label" for="form1Example1">รหัสผ่านเดิม</label>
                <input type="text" value="<?= $stmt['password'] ?>"  name="password" class="form-control" readonly>
            </div> -->

            <!-- <div class="form-outline mb-2">
                <label class="form-label" for="form1Example1">คอร์นเฟิร์มรหัสผ่าน</label>
                <input type="password"  name="confirm_password" class="form-control" />
            </div> -->

            <div class="mb-1">
                <label for="select" class="form-label">แผนก</label>
                <select class="form-select mb-3" name="select">
                    <option selected>เลือกแผนก</option>
                    <?php
                    include("connection.php");
                    if (isset($_GET['id'])) {
                        $id = $_GET['id'];

                        // ดึงข้อมูลจากฐานข้อมูล
                        $sqll = $db->query("SELECT role.id, role.positionNameTh, users.user_id, users.role FROM role LEFT JOIN users ON role.id = users.role WHERE users.user_id = $id");
                        $sqll->execute();
                        $stmtt = $sqll->fetch();

                        // ตรวจสอบว่ามีข้อมูลหรือไม่
                        if ($stmtt) {
                            // ดึงค่า positionNameTh จากตาราง role
                            $positionNameTh_id = $stmtt['positionNameTh'];

                            // คำสั่ง SQL เพื่อดึงข้อมูล positionNameTh จากตาราง role
                            $department_sql = $db->query("SELECT * FROM role");
                            $department_sql->execute();

                            // วนลูปแสดงผล option
                            while ($row = $department_sql->fetch(PDO::FETCH_ASSOC)) {
                                $selected = ($row['positionNameTh'] == $positionNameTh_id) ? 'selected' : '';
                                echo "<option value='" . $row['id'] . "' $selected>" . $row['positionNameTh'] . "</option>";
                            }
                        } else {
                            echo "<option value='' selected>No Data Found</option>";

                        }
                    }
                    ?>
                </select>
            </div>
                

                <div class="mb-4 mt-3">
                    <a href="Users.php" class="btn btn-secondary btn-sm">กลับ</a>
                    <button id="edit" type="submit" name='update' class="btn btn-sm text-white">แก้ไขข้อมูล</button>
                </div>
            </div>
        </form>
        <hr>
    </div>


   

</body>

</html>