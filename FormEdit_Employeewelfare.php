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
            max-width: 700px;

        }

        .navbar {
            background-color: #041122;

        }

        body {
            font-family: 'Kanit', sans-serif;
            font-family: 'Noto Sans Thai', sans-serif;

        }

        #edit {
            background-color: #FFEAA5;
        }

        /* CSS */
        .preview-container {
            display: flex;
            /* เรียงลำดับรูปภาพในแนวนอน */
            flex-wrap: nowrap;
            /* ป้องกันการขึ้นบรรทัดใหม่ */
            overflow-x: auto;
            /* เพิ่มการเลื่อนแนวนอนในกรณีที่มีรูปภาพมากเกินไป */
        }

        .preview-container img {
            object-fit: cover;
            width: 100px;
            /* กำหนดขนาดความกว้างของรูปภาพ */
            height: 120px;
            /* อนุญาตให้ความสูงปรับตามอัตราส่วนของภาพ */
            margin-right: 15px;
            /* เพิ่มระยะห่างระหว่างรูปภาพ */
        }
    </style>

</head>

<body>


    <div class="container mt-5">

        <form action="EditEmployeeWelfare_db.php" method="POST" enctype="multipart/form-data">

            <?php
            include("connection.php");
            //เช็คว่ามีการส่งไอดีที่จะแก้ไขมาไหม
            if (isset($_GET['id'])) {
                $id = $_GET['id'];

                $sql = $db->query("SELECT* FROM tbl_employeewelfare WHERE id = $id");
                $sql->execute();
                $stmt = $sql->fetch();
                
            } //isset
            ?>

            <h1>แก้ไขข้อมูลสวัสดิการ</h1>
            <hr>
            <p>ป้อนข้อมูลสวัสดิการที่ต้องการแก้ไขในฐานข้อมูล</p>
            <div class="mb-3">
                <label for="id" class="form-label">id ที่แก้ไข</label>
                <input type="text" class="form-control" value="<?= $stmt['id']; ?>" placeholder="" name="id" readonly>
                <input type="hidden" class="form-control" value="<?= $stmt['images']; ?>" name="img2_employeewelfare" require>
            </div>


            <div class="mb-3 mt-3">
                <label for="img_employeeresign" class="form-label">อัพโหลดรูปภาพ</label>
                <input type="file" class="form-control" placeholder="อัพโหลดรูปภาพ" id="imgInputwelfare" name="images"></br>
                <img src="uploads_img_employeewelfare/<?= $stmt['images']; ?>" width="100px" id="PreviewImgwelfare" class="rounded">
            </div>

            <div class="mb-3">
                <label for="title" class="form-label">หัวข้อสวัสดิการ</label>
                <input class="form-control" placeholder="" name="title" value="<?= $stmt['title']; ?>" ></input>
            </div>

            <div class="mb-4">
                <label for="details_newstotal" class="form-label">รายละเอียดสวัสดิการ</label>
                <input class="form-control" placeholder="" name="details" value="<?= $stmt['details']; ?>" ></input>
            </div>

            <div class="mb-3 mt-3">
                <a class="btn btn-secondary btn-sm" href="Tbl_Employeewelfare.php">กลับ</a>
                <button id="edit" type="submit" name='update' class="btn btn-sm text-white">อัพเดตข้อมูล</button>
            </div>
        </form>
        <hr>

    </div>


    <!-- ส่วนพรีวิวรูปภาพก่อนแก้ไช -->
    <script>
        let imgInputwelfare = document.getElementById('imgInputwelfare');
        let PreviewImgwelfare = document.getElementById('PreviewImgwelfare');

        imgInputwelfare.onchange = evt => {
            const [file] = imgInputwelfare.files;
            if (file) {
                PreviewImgwelfare.src = URL.createObjectURL(file);
            }
        }
    </script>
    <!-- ส่วนพรีวิวรูปภาพก่อนแก้ไช -->

</body>

</html>