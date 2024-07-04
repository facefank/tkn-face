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
            background-color: #FFD95A;
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
            width:100px;
            /* กำหนดขนาดความกว้างของรูปภาพ */
            height: 120px;
            /* อนุญาตให้ความสูงปรับตามอัตราส่วนของภาพ */
            margin-right: 15px;
            /* เพิ่มระยะห่างระหว่างรูปภาพ */
        }
    </style>

</head>




<body class="">

    <div class="container mt-5">

        <form action="TestMultiple.php" method="POST" enctype="multipart/form-data">
            <hr>
            <label for="id_news" class="form-label">รูปภาพ</label>
            <input id="imagesInput" type="file" class="form-control" placeholder="" name="files[]" multiple required>
            <br>
            <!-- พรีวิวรูปภาพ -->
            <div id="previewContainer" class="preview-container rounded"></div>


            <div class="mb-3 mt-3">
                <label for="title_news" class="form-label">ชื่อกิจกรรม</label>
                <input type="text" class="form-control" name="title_news">
            </div>
            <div class="mb-3 mt-3">
                <label for="details_news" class="form-label">รายละเอียดการ์ดกิจกรรม</label>
                <input type="text" class="form-control " placeholder="" name="details_news">
            </div>

            <div class="mb-3 mt-3">
                <label for="details_newstotal" class="form-label">รายละเอียดกิจกรรมทั้งหมด</label>
                <textarea type="text" class="form-control " placeholder="" name="details_newstotal"></textarea>
            </div>

            <div class="mb-3 mt-3">
                <a class="btn btn-secondary btn-sm" href="admin.php">กลับ</a>
                <button id="edit" type="submit" name='submit' class="btn btn-sm text-white">บันทึกข้อมูล</button>
            </div>
        </form>
        <hr>

    </div>

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
    </script>





    <!-- ส่วนพรีวิวรูปภาพ -->
    <!-- <script>
        let imagesInput = document.getElementById('imagesInput');
        let previewImg = document.getElementById('previewImg');

        imagesInput.onchange = evt => {
            const [file] = imagesInput.files;
            if (file) {
                previewImg.src = URL.createObjectURL(file);
            }
        }
    </script> -->

    <?php
    // เชื่อมต่อฐานข้อมูล MySQL ด้วย PDO
    include_once('connection.php');

    if (isset($_POST['submit'])) {
        // รับข้อมูลจากฟอร์ม
        $title_news = $_POST['title_news'];
        $details_news = $_POST['details_news'];
        $details_newstotal = $_POST['details_newstotal'];

        try {
            // เริ่ม Transaction
            $db->beginTransaction();

            // ส่วนของการ insert ข้อมูลข้อความไปยังตาราง tbl_dataText
            $sql_text = "INSERT INTO tbl_dataText (title_news, details_news, details_newstotal) VALUES (:title_news, :details_news, :details_newstotal)";
            $stmt_text = $db->prepare($sql_text);
            $stmt_text->bindParam(':title_news', $title_news);
            $stmt_text->bindParam(':details_news', $details_news);
            $stmt_text->bindParam(':details_newstotal', $details_newstotal);
            $stmt_text->execute();

            // หา id ที่ถูกเพิ่มล่าสุด
            $last_id = $db->lastInsertId();

            // สร้างโฟลเดอร์เซิร์ฟเวอร์สำหรับการอัปโหลดไฟล์
            $upload_directory = "uploads_epy/";
            if (!file_exists($upload_directory)) {
                mkdir($upload_directory, 0777, true);
            }

            // ส่วนของการ insert ข้อมูลภาพไปยังตาราง tbl_data และอัพโหลดไฟล์ภาพลงในโฟลเดอร์
            foreach ($_FILES['files']['tmp_name'] as $key => $tmp_name) {
                $image_name = $_FILES['files']['name'][$key];
                $image_path = $upload_directory . basename($image_name);
                move_uploaded_file($tmp_name, $image_path);

                // insert ข้อมูลภาพไปยังตาราง tbl_data
                $sql_image = "INSERT INTO tbl_data (images, data_id) VALUES (:images, :data_id)";
                $stmt_image = $db->prepare($sql_image);
                $stmt_image->bindParam(':images', $image_name);
                $stmt_image->bindParam(':data_id', $last_id);
                $stmt_image->execute();
            }

            // Commit Transaction หลังจาก insert ข้อมูลสำเร็จทั้งสองคำสั่ง
            $db->commit();

            echo "
            <script>
            alert('อัพเดตข้อมูลเรียบร้อยแล้ว');
            location.replace('TestMultiple.php');
            </script>
            ";
        } catch (PDOException $e) {
            // Rollback Transaction ในกรณีที่มีข้อผิดพลาดเกิดขึ้น
            $db->rollback();
            echo "การ insert ข้อมูลล้มเหลว: " . $e->getMessage();
        }
    }

    // ปิดการเชื่อมต่อฐานข้อมูล
    $db = null;
    ?>








</body>

</html>