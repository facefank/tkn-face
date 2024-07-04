<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>สมัครสมาชิก</title>
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="css.login/style.css"> -->
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@300&family=Noto+Sans+Thai&display=swap" rel="stylesheet">



    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous" />
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>

    <style>
        body {
            font-family: 'Kanit', sans-serif;
            font-family: 'Noto Sans Thai', sans-serif;
            /* background-color: #041122; */
            background-color: #14141f;

        }

        #btn {
            /* background-color: #00cf85; */
            background-color: #86b817;
        }


        .flex-login-form {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 10px;
            max-width: 100%;

        }

        .login-card-custom {
            width: 30%;
            margin: 15px;

        }

        .alert-custom {
            width: 30%;
            text-align: center;
            margin-top: 20px;
        }

        #title {
            color: #F1FDF3;
        }
    </style>



</head>

<body>

    <div class="flex-login-form">
        <h1 id="title" class=" mt-2 text-center">สมัครสมาชิก</h1>

        <?php if (isset($_SESSION['err_fill'])) : ?>
            <div class="alert alert-danger alert-custom" role="alert">
                <?php echo $_SESSION['err_fill']; ?>
            </div>
        <?php endif; ?>
        <?php if (isset($_SESSION['err_pw'])) : ?>
            <div class="alert alert-danger alert-custom" role="alert">
                <?php echo $_SESSION['err_pw']; ?>
            </div>
        <?php endif; ?>
        

        <?php if (isset($_SESSION['err_pw_length'])) : ?>
            <div class="alert alert-danger alert-custom" role="alert">
                <?php echo $_SESSION['err_pw_length']; ?>
            </div>
        <?php endif; ?>



        <?php if (isset($_SESSION['exist_uname'])) : ?>
            <div class="alert alert-danger alert-custom" role="alert">
                <?php echo $_SESSION['exist_uname']; ?>
            </div>
        <?php endif; ?>
        <?php if (isset($_SESSION['err_insert'])) : ?>
            <div class="alert alert-danger alert-custom" role="alert">
                <?php echo $_SESSION['err_insert']; ?>
            </div>
        <?php endif; ?>

        <form class="p-5 card login-card-custom" action="register_db.php" method="post">

            <div class="form-outline mb-2">
                <label class="form-label" for="form1Example1">ชื่อ</label>
                <input type="text" name="firstname" class="form-control" />
            </div>

            <div class="form-outline mb-2">
                <label class="form-label" for="form1Example1">นามสกุล</label>
                <input type="text" name="lastname" class="form-control" />
            </div>

            <div class="form-outline mb-2">
                <label class="form-label" for="form1Example1">Username</label>
                <input type="text" name="username" class="form-control" />
            </div>

            <div class="form-outline mb-2">
                <label class="form-label" for="form1Example1">รหัสผ่าน</label>
                <input type="password" name="password" class="form-control" />
            </div>

            <div class="form-outline mb-2">
                <label class="form-label" for="form1Example1">ยืนยันรหัสผ่าน</label>
                <input type="password" name="confirm_password" class="form-control" />
            </div>

            <div class="mb-1">
                <label for="select" class="form-label">แผนก</label>
                <select class="form-select" name="select">
                    <option selected>เลือกแผนก</option>
                    
                    <?php include("connection.php");
                    $sql = "SELECT * FROM role";
                    $stmt = $db->prepare($sql);
                    $stmt->execute();

                    // วนลูปแสดงผลลัพธ์ในรูปแบบของ option
                    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                        echo "<option value='" . $row['id'] . "'>" . $row['positionNameTh'] . "</option>";
                    }

                    ?>
                </select>

                <p class="text-center mt-3">เป็นสมาชิกแล้วใช่ไหม ? <a class="text-danger" href="login.php">ลงชื่อเข้าใช้</a> <a class="text-danger" href="admin.php">กลับ</a></p>
                <button id="btn" type="submit" class="btn btn-success btn-block text-white" name="submit">สมัครสมาชิก</button>
            </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>


</body>

</html>

<?php
if (isset($_SESSION['err_fill']) || isset($_SESSION['err_pw']) || isset($_SESSION['err_pw_length']) || isset($_SESSION['exist_uname']) || isset($_SESSION['err_insert'])) {
    unset($_SESSION['err_fill']);
    unset($_SESSION['err_pw']);
    unset($_SESSION['err_pw_length']);
    unset($_SESSION['exist_uname']);
    unset($_SESSION['err_insert']);
}
?>