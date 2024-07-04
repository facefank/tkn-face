<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>เพิ่มข้อมูลข่าว</title>
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css"
        integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />



    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css"
        integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous" />
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js"
        integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <!-- <link rel="stylesheet" href="css.login/style.css"> -->



</head>

<body class="bg-light">


    <nav class="navbar navbar-expand-lg navbar-dark bg-success">
        <div class="container">
            <a class="navbar-brand" href="#"></a>
            <img src="img-tkn/logo-tkn1.png" alt="" style="width: 140px;" class="">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
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
    </br>

    <div class="container">

        <form action="#" method="POST">
            <h1>เพิ่มข้อมูล</h1>
            <p>ป้อนข้อมูลข่าวสารที่ต้องการเพิ่มลงในฐานข้อมูล</p>
            <div class="mb-3 mt-3">
                <label for="id_news" class="form-label">ID News</label>
                <input type="text" class="form-control i" placeholder="ไอดี" name="id_news" required>
            </div>
            <div class="mb-3">
                <label for="images_news" class="form-label">รูปภาพ</label>
                <input type="text" class="form-control" placeholder="รูปภาพ" name="images_news" required>
            </div>
            <div class="mb-3">
                <label for="title_news" class="form-label">ชื่อหัวข้อข่าว</label>
                <input type="text" class="form-control" placeholder="หัวข้อข่าว" name="title_news" required>
            </div>
            <div class="mb-3">
                <label for="details_news" class="form-label">รายละเอียดข่าว</label>
                <input type="text" class="form-control " placeholder="รายละเอียด" name="details_news" required>
            </div>


            <button type="submit" class="btn btn-primary">บันทึกข้อมูล</button>
        </form>




        <?php
        include ("connection.php"); 

        $id_news = $_POST["id_news"];
        $images_news =$_POST["images_news"];
        $title_news = $_POST["title_news"];
        $details_news = $_POST["details_news"];
        

        // echo $id_news;
        // echo $images_news;
        // echo $title_news;
        // echo $details_news;
          

        $stmt = $db->prepare("INSERT INTO new (id_news,images_news,title_news,details_news) 
        VALUES (:id_news,:images_news,:title_news,:details_news)");
        $stmt->bindParam(':id_news', $id_news, PDO::PARAM_STR);
        $stmt->bindParam(':images_news', $images_news, PDO::PARAM_STR);
        $stmt->bindParam(':title_news', $title_news, PDO::PARAM_STR);
        $stmt->bindParam(':details_news', $details_news, PDO::PARAM_STR);
        $stmt->execute();




        // $sql = "INSERT INTO new (id_news,images_news,title_news,details_news) VALUES ('".$id_news."','".$images_news."', '".$title_news."', '".$details_news."')";

        if ($stmt) { 
            echo"
                <script>
                alert('บันทึกข้อมูลเรียบร้อยแล้ว');
                location.replace('admin.php');
                </script>
                ";
            }
           
        else {
                echo"
                <script>
                alert('ไม่สามารถบันทึกข้อมูลได้');
                location.replace('insert_news.php');
                </script>
                ";

            }
        ?>



    </div>

</body>

</html>