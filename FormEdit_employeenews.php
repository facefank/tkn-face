<!DOCTYPE html>
<html lang="en">

<head>
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
    <!-- <link rel="stylesheet" href="css.login/style.css"> -->
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@300&family=Noto+Sans+Thai&display=swap" rel="stylesheet">


    <style>
        .container {
            max-width: 600px;

        }
        .navbar{
            background-color: #041122;

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




<body class="">

    <!-- <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="#"></a>
            <img src="img-tkn/logo-tkn1.png" alt="" style="width: 140px;" class="">
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
    </nav> <br> -->



    <div class="container mt-5">

        <form action="EditEmployeeNews_db.php" method="POST" enctype="multipart/form-data">

            <?php
            include("connection.php");
            //เช็คว่ามีการส่งไอดีที่จะแก้ไขมาไหม
            if (isset($_GET['id'])) {
                $id = $_GET['id'];

                $sql = $db->query("SELECT* FROM tbl_employeenews WHERE id = $id");
                $sql->execute();
                $stmt = $sql->fetch();
            } //isset
            ?>

            <h1>แก้ไขข้อมูลพนักงานเข้าใหม่</h1>
            <hr>
            <p>ป้อนข้อมูลพนักงานที่ต้องการแก้ไขในฐานข้อมูล</p>
            <div class="mb-3">
                <label for="id" class="form-label">ลำดับที่</label>
                <input type="text" class="form-control" value="<?= $stmt['id']; ?>" placeholder="ไอดีพนักงาน" name="id" readonly>
                <input type="hidden" class="form-control" value="<?= $stmt['img_employeenews']; ?>" name="img2_employeenews" require>
            </div>

            <div class="mb-3 mt-3">
                <label for="id_employee" class="form-label">รหัสพนักงาน</label>
                <input type="text" class="form-control" value="<?= $stmt['id_employee']; ?>" placeholder="" name="id_employee" >
            </div>

            <div class="mb-3 mt-3">
                <label for="img_employeenews" class="form-label">อัพโหลดรูปภาพ</label>
                <input type="file" class="form-control" placeholder="รูปภาพ" id="imgInput" name="img_employeenews"></br>
                <img src="uploads_img_employee/<?= $stmt['img_employeenews']; ?>" width="100px" id="PreviewImg" class="rounded">
            </div>

            <div class="mb-3 mt-3">
                <label for="title_employeenews" class="form-label">ชื่อ-นามสกุล</label>
                <input type="text" class="form-control" value="<?= $stmt['title_employeenews']; ?>" placeholder="" name="title_employeenews" >
            </div>

            <div class="mb-3 mt-3">
                <label for="details_employeenews" class="form-label">รายละเอียด</label>
                <input type="text" class="form-control " value="<?= $stmt['details_employeenews']; ?>" placeholder="" name="details_employeenews" ></input>
            </div>

            <div class="mb-3 mt-3">
                <label for="position_employeenews" class="form-label">ตำแหน่ง</label>
                <input type="text" class="form-control " value="<?= $stmt['position_employeenews']; ?>" placeholder="" name="position_employeenews" >
            </div>

            <div class="mb-3 mt-3">
                <a class="btn btn-secondary  btn-sm" href="admin.php">กลับ</a>
                <button id="edit" type="submit" name='update' class="btn btn-sm text-white">อัพเดตข้อมูล</button>
            </div>
        </form>
        <hr>

    </div>


    <!-- ส่วนพรีวิวรูปภาพก่อนแก้ไช -->
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
    <!-- ส่วนพรีวิวรูปภาพก่อนแก้ไช -->



   
</body>

</html>