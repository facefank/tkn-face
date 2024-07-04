<?php include('connection.php'); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Toyota Kaennakhon</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css" />
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@300&family=Noto+Sans+Thai&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Kanit', sans-serif;
            font-family: 'Noto Sans Thai', sans-serif;
        }

        .display-3 {
            font-family: 'Kanit', sans-serif;
            font-family: 'Noto Sans Thai', sans-serif;

        }

        .mb-5 {
            font-family: 'Kanit', sans-serif;
            font-family: 'Noto Sans Thai', sans-serif;


        }

        .mb-0 {
            font-family: 'Kanit', sans-serif;
            font-family: 'Noto Sans Thai', sans-serif;
        }

        #footerr {
            padding-left: 40px;
            padding-right: 40px;
        }

        #hero {
            padding-top: 3rem;
            padding-bottom: 5rem;
        }

        #h5 {
            font-size: 17px;
            font-family: 'Kanit', sans-serif;
            font-family: 'Noto Sans Thai', sans-serif;
        }

        /*** Serch Bar ***/
        .input-box {
            position: relative;
            height: 76px;
            max-width: 900px;
            width: 100%;
            background: #fff;
            margin: 0 20px;
            border-radius: 8px;
            box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
            justify-content: center;
            align-items: center;
            margin-left: auto;
            margin-right: auto;
        }

        .input-box i,
        .input-box .button {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
        }

        .input-box i {
            left: 20px;
            font-size: 30px;
            color: #707070;
        }

        .input-box input {
            height: 100%;
            width: 100%;
            outline: none;
            font-size: 18px;
            font-weight: 400;
            border: none;
            padding: 0 155px 0 65px;
            background-color: transparent;
        }

        .input-box .button {
            right: 20px;
            font-size: 16px;
            font-weight: 400;
            color: #fff;
            border: none;
            padding: 12px 30px;
            border-radius: 6px;
            background-color: #4070f4;
            cursor: pointer;
        }

        .input-box .button:active {
            transform: translateY(-50%) scale(0.98);
        }

        /* Responsive */
        @media screen and (max-width: 500px) {
            .input-box {
                height: 66px;
                margin: 0 8px;
            }

            .input-box i {
                left: 12px;
                font-size: 25px;
            }

            .input-box input {
                padding: 0 112px 0 50px;
            }

            .input-box .button {
                right: 12px;
                font-size: 14px;
                padding: 8px 18px;
            }
        }

        /*** Serch Bar ***/

        .knowledge_allbutton .button {

            font-size: 16px;
            font-weight: 400;
            color: #fff;
            border: none;
            padding: 12px 30px;
            border-radius: 6px;
            background-color: #4070f4;
            cursor: pointer;
            align-items: center;
            margin-left: auto;
            margin-right: auto;
            display: block;


        }
    </style>
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->



    <!-- Navbar & Hero Start -->
    <div class="container-fluid position-relative p-0">
        <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
            <a href="home" class="navbar-brand p-0">
                <!-- <h1 class="text-primary m-0"><i class="fa fa-map-marker-alt me-3"></i>Tourist</h1> -->
                <img src="img-tkn/logo-tkn-newwwwww.png" alt="Logo">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto py-0">
                    <a href="home" class="nav-item nav-link ">หน้าแรก</a>
                    <div class="nav-item dropdown">
                        <a href="employeehr" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">ส่วนงานบริการ</a>
                        <div class="dropdown-menu m-0">
                            <a href="https://tkn.co.th/repairit" target="_blank" class="dropdown-item">แจ้งซ่อม</a>
                            <a href="https://tkn.co.th/repairit" target="_blank" class="dropdown-item">จองห้องประชุม</a>
                            <a href="http://192.168.111.62:4000/login" target="_blank" class="dropdown-item">จองรถ</a>
                            <a href="https://docs.google.com/forms/d/e/1FAIpQLSe6lcHcDiEOjBcuAASoYGU2anGP14l13Gl18YhZ7KMJ7cESrw/viewform?usp=pp_url" target="_blank" class="dropdown-item">เบิก-ยืมอุปกรณ์IT</a>

                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="employeehr" class="nav-link dropdown-toggle " data-bs-toggle="dropdown">ส่วนงานฝ่ายบุคคล</a>
                        <div class="dropdown-menu m-0">
                            <a href="employeehr" class="dropdown-item">พนักงานเข้าใหม่</a>
                            <a href="employeehr" class="dropdown-item">พนักงานลาออก</a>
                            <!-- <a href="employeewelfare" class="dropdown-item">สวัสดิการพนักงาน</a> -->
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="outstandingemployee" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">พนักงานดีเด่น</a>
                        <div class="dropdown-menu m-0">
                            <a href="outstandingemployee" class="dropdown-item">พนักงานด้านบริการยอดเยี่ยม</a>
                            <a href="outstandingemployeesale" class="dropdown-item">พนักงานด้านขายยอดเยี่ยม</a>
                        </div>
                    </div>
                    <!-- <a href="register.php" class="nav-item nav-link" target="_blank">ลงทะเบียน</a> -->

                    <div>
                        <a href="knowledge.php" class="nav-item nav-link active">คลังความรู้</a>
                    </div>

                </div>
                <a href="login" class="btn btn-primary rounded-pill py-2 px-4" target="_blank">ลงชื่อเข้าใช้</a>
            </div>
        </nav>

        <div id="hero" class="container-fluid bg-primary mb-5 hero-header">
            <div class="container py-5">
                <div class="row justify-content-center py-5">
                    <div class="col-lg-10 pt-lg-5 mt-lg-5 text-center">
                        <h1 class="display-3 text-white animated slideInDown">คลังความรู้</h1>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Navbar & Hero End -->

    <!-- Search Bar  Start-->
    <div class="input-box">
        <i class="uil uil-search"></i>
        <input type="text" placeholder="ค้นหาบทความ..." />
        <button class="button">ค้นหา</button>
    </div>
    <!-- Search Bar  End-->


    <!-- Topic Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="section-title bg-white text-center text-primary px-3">knowledge</h6>
            <?php
            // Assume $db is your database connection

            // Query to get the desired text from the database for types_knowledge = 1
            $stmt1 = $db->prepare("SELECT * FROM tbl_knowledge WHERE types_knowledge = 1");
            $stmt1->execute();
            $row1 = $stmt1->fetch(PDO::FETCH_ASSOC);

            // Query to get the desired text from the database for types_knowledge = 2
            $stmt2 = $db->prepare("SELECT * FROM tbl_knowledge WHERE types_knowledge = 2");
            $stmt2->execute();
            $row2 = $stmt2->fetch(PDO::FETCH_ASSOC);

            // Check if a row is returned for types_knowledge = 1
            if ($row1) {
                $tyname_knowledge1 = htmlspecialchars($row1['tyname_knowledge']);
            } else {
                // Default text if no data found
                $tyname_knowledge1 = "Default Knowledge Type Name";
            }

            // Check if a row is returned for types_knowledge = 2
            if ($row2) {
                $tyname_knowledge2 = htmlspecialchars($row2['tyname_knowledge']);
            } else {
                // Default text if no data found
                $tyname_knowledge2 = "Default Knowledge Type Name";
            }
            ?>

            <h1 class="mb-5"><?php echo $tyname_knowledge1; ?></h1>
        </div>
        <div class="row g-4">
            <?php
            // Fetch data for types_knowledge = 1
            $stmt1->execute();
            $rows1 = $stmt1->fetchAll();

            if (!$rows1) {
                echo "<p class='text-center mt-5'>ไม่มีข้อมูล</p>";
            } else {
                foreach ($rows1 as $rows) {
            ?>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <a href="knowledgeDetail.php?id=<?php echo $rows['id_knowledge']; ?>">
                            <div class="team-item">
                                <div class="overflow-hidden">
                                    <img class="img-fluid" style="width: 100%; height: 300px; object-fit:cover" src="upload_img_knowledge/<?php echo htmlspecialchars($rows['img_knowledge']); ?>">
                                </div>
                                <div class="text p-4">
                                    <h5><?php echo $rows["topic_knowledge"]; ?></h5>
                                    <small class="mb-0"><?php echo htmlspecialchars(substr($rows["details_knowledge"], 0, 500)); ?> .....</small> <br>
                                    <br>
                                    <div class="d-flex border-top">
                                        <small class="flex-fill text-center py-2"><i class="fa fa-calendar-alt text-primary me-2"></i><?php echo $rows["time"]; ?></small>
                                    </div>
                                    <br>
                                </div>
                            </div>
                        </a>
                    </div>
            <?php
                }
            }
            ?>
              <a href="" style="display: block; text-align: right;"><--- ดูเพิ่มเติม</a>
        </div>
        <br><br><br>
        <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="section-title bg-white text-center text-primary px-3">knowledge</h6>
            <h1 class="mb-5"><?php echo $tyname_knowledge2; ?></h1>
        </div>
            
        <div class="row g-4">
            <?php
            // Fetch data for types_knowledge = 2
            $stmt2->execute();
            $rows2 = $stmt2->fetchAll();

            if (!$rows2) {
                echo "<p class='text-center mt-5'>ไม่มีข้อมูล</p>";
            } else {
                foreach ($rows2 as $rows) {
            ?>
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <a href="knowledgeDetail.php?id=<?php echo $rows['id_knowledge']; ?>">
                            <div class="team-item">
                                <div class="overflow-hidden">
                                    <img class="img-fluid" style="width: 100%; height: 300px; object-fit:cover" src="upload_img_knowledge/<?php echo htmlspecialchars($rows['img_knowledge']); ?>">
                                </div>
                                <div class="text p-4">
                                    <h5><?php echo $rows["topic_knowledge"]; ?></h5>
                                    <small class="mb-0"><?php echo htmlspecialchars(substr($rows["details_knowledge"], 0, 500)); ?> ........</small> <br>
                                    <br>
                                    <div class="d-flex border-top">
                                        <small class="flex-fill text-center py-2"><i class="fa fa-calendar-alt text-primary me-2"></i><?php echo $rows["time"]; ?></small>
                                    </div>
                                    <br>
                                </div>
                            </div>
                        </a>
                    </div>
            <?php
                }
            }
            ?>
            
        </div>
    </div>

    <div>
        <br>
        <a href="#" style="display: block; text-align: right;"><--- ดูเพิ่มเติม</a>
    </div>
</div>
<!-- Topic End -->


   

    <div>
        <button class="btn btn-primary rounded-pill py-2 px-4" style="align-items: center;
            margin-left: auto;
            margin-right: auto;
            display: block;">ดูทั้งหมด</button>
    </div>
--




    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
        <div id="footerr" class="container-fluid py-2 pb-0">
            <div class="row g-5">
                <?php
                include("connection.php");
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
                            <h5 id="h5" class="text-white mt-2"><?php echo $elementDepartment["department"]; ?></h5>
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
            </div>
        </div>

        <div class="container">
            <div class="copyright">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-0 mb-md-0">
                        <p>Copyright © 2023 Toyota Kaennakorn Co., Ltd.</p>
                    </div>
                    <div class="col-md-6 text-center text-md-end">
                        <p>พนักงานสามารถแจ้งข่าวสารได้ที่ <i class="bi bi-telephone"></i> 612,601</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->



    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>