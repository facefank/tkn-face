<?php include("connection.php"); ?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Toyota Kaennakorn</title>
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

    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@300&family=Noto+Sans+Thai&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>



    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">

    <style>
        body {
            font-family: 'Kanit', sans-serif;
            font-family: 'Noto Sans Thai', sans-serif;
        }

        .display-3 {
            font-size: 40px;
            padding-bottom: 100px;

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


        .img-fluid {
            border-radius: 3px;
            /* object-fit: cover;
            width: fit-content; */
        }

        #hero {
            padding-top: 3rem;
            padding-bottom: 5rem;

            /* padding-top: 4rem;
            padding-bottom: 6rem; */
        }

        #h5 {
            font-size: 17px;
            font-family: 'Kanit', sans-serif;
            font-family: 'Noto Sans Thai', sans-serif;
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
                    <a href="home" class="nav-item nav-link active">หน้าแรก</a>
                    <div class="nav-item dropdown">
                        <a href="" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">ส่วนงานบริการ</a>
                        <div class="dropdown-menu m-0">
                            <a href="https://tkn.co.th/repairit" target="_blank" class="dropdown-item">แจ้งซ่อม</a>
                            <a href="https://booking.tkn.co.th" target="_blank" class="dropdown-item">จองห้องประชุม</a>
                            <a href="http://192.168.111.62:4000/login" target="_blank" class="dropdown-item">จองรถ</a>
                            <a href="https://docs.google.com/forms/d/e/1FAIpQLSe6lcHcDiEOjBcuAASoYGU2anGP14l13Gl18YhZ7KMJ7cESrw/viewform?usp=pp_url" target="_blank" class="dropdown-item">เบิก-ยืมอุปกรณ์IT</a>

                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="employeehr" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">ส่วนงานฝ่ายบุคคล</a>
                        <div class="dropdown-menu m-0">
                            <a href="employeehr" class="dropdown-item">พนักงานเข้าใหม่</a>
                            <a href="employeehr" class="dropdown-item">พนักงานลาออก</a>
                            <!-- <a hemployeewelfaree" class="dropdown-item">สวัสดิการพนักงาน</a> -->
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

                    
                    <a href="knowledge.php" class="nav-link " >คลังความรู้</a>
                    
                </div>
                <a href="login" class="btn btn-primary rounded-pill py-2 px-4" target="_blank">ลงชื่อเข้าใช้</a>
            </div>
        </nav>

        <div id="hero" class="container-fluid position-relative mb-5 hero-header">
            <div class="container py-5 ">
                <div class="row justify-content-center py-5">
                    <div class="col-lg-10 pt-lg-5 mt-lg-5 text-center">
                        <h1 class="display-3 text-white  animated slideInDown"></h1>
                        <!-- <p class="fs-4 text-white mb-4 animated slideInDown">Tempor erat elitr rebum at clita diam amet
                            diam et eos erat ipsum lorem sit</p> -->
                        <div class="position-relative w-75 mx-auto animated slideInDown">
                            <!-- <input class="form-control border-0 rounded-pill w-100 py-3 ps-4 pe-5" type="text"
                                placeholder="Eg: Thailand">
                            <button type="button"
                                class="btn btn-primary rounded-pill py-2 px-4 position-absolute top-0 end-0 me-2"
                                style="margin-top: 7px;">Search</button> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Navbar & Hero End -->




    <!-- Service Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">ส่วนงานบริการ</h6>
                <h1 class="mb-5">Our Services</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item rounded pt-3">
                        <a href="https://tkn.co.th/repairit" target="_blank">
                            <div class="p-4">
                                <i class="fa fa-3x 	fas fa-tools text-primary mb-4"></i>
                                <h5>แจ้งซ่อม</h5>
                                <p>ระบบแจ้งซ่อมอุปกรณ์ IT</p>
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item rounded pt-3">
                        <a href="https://booking.tkn.co.th" target="_blank">
                            <div class="p-4">
                                <i class="fa fa-3x fas fas fa-users text-primary mb-4"></i>
                                <!-- <i class="fa fa-3x fas fas fa-chalkboard-teacher text-primary mb-4"></i> -->
                                <h5>จองห้องประชุม</h5>
                                <p>ระบบจองห้องประชุม</p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item rounded pt-3">
                        <a href="http://192.168.111.62:4000/login" target="_blank">
                            <div class="p-4">
                                <i class="fa fa-3x fa-car text-primary mb-4"></i>
                                <h5>จองรถ</h5>
                                <p>ระบบจองรถสำนักงาน</p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="service-item rounded pt-3">
                        <a href="https://docs.google.com/forms/d/e/1FAIpQLSe6lcHcDiEOjBcuAASoYGU2anGP14l13Gl18YhZ7KMJ7cESrw/viewform?usp=pp_url" target="_blank">
                            <div class="p-4">
                                <i class="fa fa-3x 	fas fa-laptop text-primary mb-4"></i>
                                <h5>เบิก-ยืมอุปกรณ์ IT</h5>
                                <p>แสกน QR-code ได้เลย</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->



    <!-- พนักงานขาย -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3"> พนักงานดีเด่น</h6>
                <h1 class="mb-5">ด้านงานขาย</h1>
            </div>
            <div class="row g-4">
                <?php
                $stmt = $db->query("SELECT * FROM tbl_outstandingemployeesales ORDER BY sales DESC");
                $stmt->execute();
                $row = $stmt->fetchAll();

                if (!$row) {
                    echo "<p class='text-center mt-5'>ไม่มีข้อมูล</p>";
                } else {
                    foreach ($row as $rows) {
                ?>

                        <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">

                            <div class="team-item">
                                <div class="overflow-hidden">
                                    <img class="img-fluid" style="width: 100%; height: 300px; object-fit:cover" src="upload_img_employeesales/<?php echo $rows["img_employeesales"] ?>">
                                </div>
                                <div class="text-center p-4">
                                    <h5> ยอดขาย <?php echo $rows["sales"]; ?> คัน</h5>
                                    <small class="mb-0"><?php echo $rows["title_employeesales"]; ?></small><br>
                                    <small><?php echo $rows["details_employeesales"]; ?></small><br>
                                </div>
                            </div>
                        </div>
                <?php
                    }
                }
                ?>
            </div>
        </div>
    </div>
    <!-- พนักงานขาย -->



    <!-- พนักงานดีเด่นด้านบริการ -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">พนักงานดีเด่น</h6>
                <h1 class="mb-5">ด้านงานบริการ</h1>
            </div>
            <div class="row g-4">
                <?php
                $stmt = $db->query("SELECT * FROM tbl_outstandingemployee");
                $stmt->execute();
                $row = $stmt->fetchAll();

                if (!$row) {
                    echo "<p class='text-center mt-5'>ไม่มีข้อมูล</p>";
                } else {
                    foreach ($row as $rows) {
                ?>

                        <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">

                            <div class="team-item">
                                <div class="overflow-hidden">
                                    <img class="img-fluid" style="width: 100%; height: 300px; object-fit:cover" src="upload_img_employeeoutstanding/<?php echo $rows["img_employee"] ?>">
                                </div>
                                <div class="text-center p-4">
                                    <h5><?php echo $rows["services"]; ?></h5>
                                    <!-- <small class="mb-0"><?php echo $rows["title_employee"]; ?></small> <br> -->
                                    <!-- <small>รหัสพนักงาน : <?php echo $rows["id_employee"]; ?></small><br> -->
                                    <small><?php echo $rows["details_employee"]; ?></small><br>
                                    <small><?php echo $rows["position"]; ?></small>
                                    <br>
                                </div>
                            </div>
                        </div>
                <?php
                    }
                }
                ?>
            </div>
        </div>
    </div>
    <!-- พนักงานดีเด่นด้านบริการ -->


    <!-- ข่าวสารทั่วไป -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">รอบรั้วTKN</h6>
                <h1 class="mb-5">กิจกรรม</h1>
            </div>
            <div class="row g-4 justify-content-center">
                <?php
                $stmt = $db->query("SELECT tbl_datatext.id_text,tbl_datatext.title_news ,tbl_datatext.details_news,tbl_datatext.details_newstotal,tbl_data.images,tbl_data.data_id,tbl_datatext.time FROM tbl_datatext LEFT JOIN tbl_data ON tbl_datatext.id_text = tbl_data.data_id group BY tbl_data.data_id ORDER BY tbl_datatext.id_text DESC");
                $stmt->execute();
                $row = $stmt->fetchAll();

                if (!$row) {
                    echo "<p class='text-center mt-5'>ไม่มีข้อมูล</p>";
                } else {
                    foreach ($row as $rows) {
                ?>

                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="package-item">
                                <a href="news.php?id=<?php echo $rows["id_text"]; ?>">
                                    <div class="overflow-hidden">
                                        <img class="img-fluid" style="width:100%; height: 270px; object-fit:cover" src="uploads_epy/<?php echo $rows["images"]; ?>" alt="">
                                    </div>
                                </a>
                                <div class="text-left p-4">
                                    <h5 class="mb-0"><?php echo $rows["title_news"]; ?></h5>
                                    <p><?php echo $rows["details_news"]; ?></p>
                                </div>
                                <div class="d-flex border-top">
                                    <small class="flex-fill text-center py-2"><i class="fa fa-calendar-alt text-primary me-2"></i><?php echo $rows["time"]; ?></small>
                                </div>
                            </div>
                        </div>
                <?php
                    }
                }
                ?>
            </div>

        </div>
    </div>
    <!-- ข่าวสารทั่วไป


    
    <!-- วิสัยทัศน์ / พันธกิจ / ค่านิยม -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center pb-4 wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">ศูนย์บริการโตโยต้าแก่นนคร</h6>
                <h1 class="mb-5">วิสัยทัศน์ / พันธกิจ / ค่านิยม</h1>
            </div>
            <div class="row gy-5 gx-4 justify-content-center">
                <div class="col-lg-4 col-sm-6 text-center pt-4 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="position-relative border border-primary pt-5 pb-4 px-4">
                        <div class="d-inline-flex align-items-center justify-content-center bg-primary rounded-circle position-absolute top-0 start-50 translate-middle shadow" style="width: 100px; height: 100px;">
                            <i class="fas fa-globe fa-3x text-white"></i>
                        </div>
                        <h5 class="mt-4">วิสัยทัศน์</h5>
                        <hr class="w-25 mx-auto bg-primary mb-1">
                        <hr class="w-50 mx-auto bg-primary mt-0">
                        <p class="mb-0">เป็นตัวแทนจำหน่ายรถยนต์โตโยต้าที่ดีที่สุดในประเทศไทย โดยเป็นบริษัท
                            ที่น่ามาทำงาน<br>
                            น่ามาใช้บริการ น่ามาร่วมลงทุน</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 text-center pt-4 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="position-relative border border-primary pt-5 pb-4 px-4">
                        <div class="d-inline-flex align-items-center justify-content-center bg-primary rounded-circle position-absolute top-0 start-50 translate-middle shadow" style="width: 100px; height: 100px;">
                            <i class="fa fa-3x fas fa-hand-holding-heart fa-3x text-white"></i>
                        </div>
                        <h5 class="mt-4">พันธกิจ </h5>
                        <hr class="w-25 mx-auto bg-primary mb-1">
                        <hr class="w-50 mx-auto bg-primary mt-0">
                        <p class="mb-0">1.มุ่งมั่นให้บริการลูกค้า ด้วยความซื่อสัตย์<br>
                            มีคุณภาพเพื่อความประทับใจสูงสุด<br>
                            2.ใส่ใจรับผิดชอบต่อสังคมและสิ่งแวดล้อม อย่างยั่งยืน<br>
                            3.เป็นองค์กรแห่งการเรียนรู้ <br>และการทำงานอย่างมีความสุข<br>
                            4.เป็นองค์กรที่เติบโตอย่างต่อเนื่องและยั่งยืน</p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 text-center pt-4 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="position-relative border border-primary pt-5 pb-4 px-4">
                        <div class="d-inline-flex align-items-center justify-content-center bg-primary rounded-circle position-absolute top-0 start-50 translate-middle shadow" style="width: 100px; height: 100px;">
                            <i class="fa fas far fa-handshake fa-3x text-white"></i>
                        </div>
                        <h5 class="mt-4">ค่านิยม</h5>
                        <hr class="w-25 mx-auto bg-primary mb-1">
                        <hr class="w-50 mx-auto bg-primary mt-0">
                        <p class="mb-0">เรียนรู้พัฒนา<br> นำพาคุณธรรม<br> กิจกรรมร่วมใจ<br> มีวินัยรับผิดชอบงาน</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- วิสัยทัศน์ / พันธกิจ / ค่านิยม -->
    



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