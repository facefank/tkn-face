<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EditNews</title>
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
            max-width: 800px;
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
            width: 90px;
            /* กำหนดขนาดความกว้างของรูปภาพ */
            height: 100px;
            /* อนุญาตให้ความสูงปรับตามอัตราส่วนของภาพ */
            margin-right: 15px;
            /* เพิ่มระยะห่างระหว่างรูปภาพ */
        }
    </style>

</head>




<body>


    <div class="container mt-5">

        <form action="EditNews_db.php" method="POST" enctype="multipart/form-data">

            <?php
            include("connection.php");
            if (isset($_GET['id'])) {
                $id_news = $_GET['id'];
                // echo $id_news;

                $sql = $db->query("SELECT tbl_datatext.id_text,tbl_datatext.title_news ,tbl_datatext.details_news,tbl_datatext.details_newstotal,tbl_data.images,tbl_data.data_id FROM tbl_datatext LEFT JOIN tbl_data ON tbl_datatext.id_text = tbl_data.data_id WHERE tbl_datatext.id_text = $id_news");
                $sql->execute();
                $stmt = $sql->fetch();
                // echo $stm
            }
            ?>

            <h1>แก้ไขข้อมูลข่าวสาร</h1>
            <hr>
            <p>ป้อนข้อมูลข่าวสารที่ต้องการแก้ไขในฐานข้อมูล</p>
            <div class="mb-3 mt-3">
                <label for="id_news" class="form-label">ลำดับที่</label>
                <input type="text" class="form-control" value="<?= $stmt['id_text']; ?>" placeholder="" name="id_news" readonly>

                <input type="hidden" class="form-control" value="<?= $stmt['images']; ?>" placeholder="" name="imagesInput2">

                <div class="mb-3 mt-3">
                    <label for="files" class="form-label">อัพโหลดรูปภาพ </label>
                    <input id="imagesInput" type="file" class="form-control" placeholder="" name="files[]" multiple>


                    <div class="col-md-12 mb-3">
                        <?php
                        $idNew = $stmt["id_text"];
                        $queryImage = $db->query("SELECT * FROM tbl_data WHERE data_id='$idNew'");
                        $queryImage->execute();
                        $result = $queryImage->fetchAll();

                        ?>

                        <div id="previewContainer" class="preview-container rounded">
                            <?php foreach ($result as $image) : ?>
                                <img src="uploads_epy/<?= $image['images']; ?>" class="preview-container" id="preview-container" alt="Preview Image">
                            <?php endforeach; ?>
                        </div>
                    </div>
                    <br>
                </div>
                <div class="mb-3">
                    <label for="title_news" class="form-label">ชื่อกิจกรรม</label>
                    <input type="text" value="<?= $stmt['title_news']; ?>" class="form-control" placeholder="" name="title_news">
                </div>
                <div class="mb-3">
                    <label for="details_news" class="form-label">รายละเอียดการ์ดกิจกรรม</label>
                    <input class="form-control" value="<?= $stmt['details_news']; ?>" placeholder="" name="details_news" rows="3"></input>
                </div>

                <div class="mb-3">
                    <label for="details_newstotal" class="form-label">รายละเอียดทั้งหมด</label>
                    <input class="form-control" value="<?= $stmt['details_newstotal']; ?>" placeholder="" name="details_newstotal" rows="3"></input>
                </div>

                <div class="mb-3 mt-3">
                    <a class="btn btn-secondary btn-sm" href="admin.php">กลับ</a>
                    <button id="edit" type="submit" name='update' class="btn btn-sm text-white">อัพเดตข้อมูล</button>
                </div>
        </form>
        <hr>

    </div>

    <!-- ส่วนพรีวิวรูปภาพ -->
    <script>
        // JavaScript
        let imagesInput = document.getElementById('imagesInput');
        let previewContainer = document.getElementById('previewContainer');

        imagesInput.onchange = evt => {
            const files = imagesInput.files;
            previewContainer.innerHTML = ''; // เคลียร์คอนเทนเนอร์ก่อนที่จะเพิ่มรูปภาพใหม่

            for (let i = 0; i < files.length; i++) {
                const file = files[i];
                const img = document.createElement('img');
                img.classList.add('preview-img');

                img.file = file;
                previewContainer.appendChild(img);

                const reader = new FileReader();
                reader.onload = (function(aImg) {
                    return function(e) {
                        aImg.src = e.target.result;
                    };
                })(img);

                reader.readAsDataURL(file);
            }
        };
        // ฟังก์ชันเพิ่มเพื่อเคลียร์รูปภาพเมื่อมีการเลือกไฟล์ใหม่/
        function clearPreview() {
            previewContainer.innerHTML = ''; // เคลียร์รูปภาพที่แสดงอยู่
        }
    </script>


   











</body>

</html>