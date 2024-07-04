<?php include('connection.php'); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>ส่วนงานฝ่ายบุคคล</title>
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
                    <a href="home" class="nav-item nav-link ">Home</a>
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
                        <a href="employeehr" class="nav-link dropdown-toggle active" data-bs-toggle="dropdown">ส่วนงานฝ่ายบุคคล</a>
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
                    <a href="knowledge.php" class="nav-link " >คลังความรู้</a>
                </div>
                <a href="login" class="btn btn-primary rounded-pill py-2 px-4" target="_blank">ลงชื่อเข้าใช้</a>
            </div>
        </nav>

        <div id="hero" class="container-fluid bg-primary mb-5 hero-header">
            <div class="container py-5">
                <div class="row justify-content-center py-5">
                    <div class="col-lg-10 pt-lg-5 mt-lg-5 text-center">
                        <h1 class="display-3 text-white animated slideInDown">ส่วนงานฝ่ายบุคคล</h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item"><a href="home">Home</a></li>
                                <li class="breadcrumb-item text-white active" aria-current="page">ส่วนงานฝ่ายบุคคล</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Navbar & Hero End -->


    <!-- About Start -->
    <!-- <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <img class="img-fluid position-absolute w-100 h-100" src="img/about.jpg" alt="" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                    <h6 class="section-title bg-white text-start text-primary pe-3">About Us</h6>
                    <h1 class="mb-4">Welcome to <span class="text-primary">Tourist</span></h1>
                    <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit.</p>
                    <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet</p>
                    <div class="row gy-2 gx-4 mb-4">
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>First Class Flights</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Handpicked Hotels</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>5 Star Accommodations</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Latest Model Vehicles</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>150 Premium City Tours</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>24/7 Service</p>
                        </div>
                    </div>
                    <a class="btn btn-primary py-3 px-5 mt-2" href="">Read More</a>
                </div>
            </div>
        </div>
    </div> -->
    <!-- About End -->


    <!-- Team Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">ส่วนงานฝ่ายบุคคล</h6>
                <h1 class="mb-5">พนักงานเข้าใหม่</h1>
            </div>
            <div class="row g-4">
                <?php
                $stmt = $db->query("SELECT * FROM tbl_employeenews   WHERE MONTH(CURRENT_DATE()) = MONTH(time) AND YEAR(CURRENT_DATE()) = YEAR(time) ORDER BY id");
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
                                    <img class="img-fluid" style="width: 100%; height: 300px; object-fit:cover" src="uploads_img_employee/<?php echo $rows["img_employeenews"] ?>">
                                </div>
                                <div class="text-center p-4">
                                    <h5 class="mb-0"><?php echo $rows["title_employeenews"]; ?></h5>
                                    <!-- <small>รหัสพนักงาน : <?php echo $rows["id_employee"]; ?></small><br> -->
                                    <small><?php echo $rows["details_employeenews"]; ?></small><br>
                                    <small><?php echo $rows["position_employeenews"]; ?></small>
                                    <!-- <h5 class="mb-0">น.ส.วรรณภา แก้งคำ</h5>
                            <small>แผนก : บัญชี</small>
                            <br>
                            <small>ชื่อเล่น ฝน</small> -->
                                </div>
                            </div>
                        </div>
                        <!-- <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="team-item">
                        <div class="overflow-hidden">
                            <img class="img-fluid" style="width:100%; height: 300px; object-fit:cover" src="http://localhost/project-tkn-2/uploads_img_employeeresign/1995885565.jpg">
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mb-0">น.ส.วรรณภา แก้งคำ</h5>
                            <small>แผนก : บัญชี</small>
                            <br>
                            <small>ชื่อเล่น ฝน</small>
                        </div>
                    </div>
                </div> -->
                        <!-- <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="team-item">
                        <div class="overflow-hidden">
                            <img class="img-fluid" style="width:100%; height: 300px; object-fit:cover" src="http://localhost/project-tkn-2/uploads_img_employee/538080303.jpg">
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mb-0">น.ส.วรรณภา แก้งคำ</h5>
                            <small>แผนก : บัญชี</small>
                            <br>
                            <small>ชื่อเล่น ฝน</small>

                        </div>
                    </div>
                </div> -->
                        <!-- <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="team-item">
                        <div class="overflow-hidden">
                            <img class="img-fluid" style="width:100%; height: 300px; object-fit:cover" src="img-tkn/tkn.jpg">
                        </div>
                        <div class="position-relative d-flex justify-content-center" style="margin-top: -19px;">
                        <a class="btn btn-square mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-square mx-1" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-square mx-1" href=""><i class="fab fa-instagram"></i></a>
                    </div>
                        <div class="text-center p-4">
                            <h5 class="mb-0">น.ส.วรรณภา แก้งคำ</h5>
                            <small>แผนก : บัญชี</small>
                            <br>
                            <small>ชื่อเล่น ฝน</small>
                        </div>
                    </div>
                </div> -->
                <?php
                    }
                }
                ?>
            </div>
        </div>
    </div>
    <!-- Team End -->



    <!-- Team Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">ส่วนงานฝ่ายบุคคล</h6>
                <h1 class="mb-5">พนักงานลาออก</h1>
            </div>
            <div class="row g-4">
                <?php
                $stmt = $db->query("SELECT * FROM tbl_employeeresign WHERE MONTH(CURRENT_DATE()) = MONTH(time) AND YEAR(CURRENT_DATE()) = YEAR(time) ORDER BY id ");
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
                                    <img class="img-fluid" style="width: 100%; height: 300px; object-fit:cover" src="uploads_img_employeeresign/<?php echo $rows["img_employeeresign"] ?>">
                                </div>
                                <div class="text-center p-4">
                                    <h5 class="mb-0"><?php echo $rows["title_employeeresign"]; ?></h5>
                                    <!-- <small>รหัสพนักงาน : <?php echo $rows["id_employee"]; ?></small><br> -->
                                    <small><?php echo $rows["position_employeeresign"]; ?></small><br>
                                    <small><?php echo $rows["details_employeeresign"]; ?></small><br>
                                    <!-- <h5 class="mb-0">น.ส.วรรณภา แก้งคำ</h5>
                            <small>แผนก : บัญชี</small
                            <br>
                            <small>ชื่อเล่น ฝน</small> -->
                                </div>
                            </div>
                        </div>
                        <!-- <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="team-item">
                        <div class="overflow-hidden">
                            <img class="img-fluid" style="width:100%; height: 300px; object-fit:cover" src="http://localhost/project-tkn-2/uploads_img_employeeresign/1995885565.jpg">
                        </div>
                        <div class="position-relative d-flex justify-content-center" style="margin-top: -19px;">
                        <a class="btn btn-square mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-square mx-1" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-square mx-1" href=""><i class="fab fa-instagram"></i></a>
                    </div>
                        <div class="text-center p-4">
                            <h5 class="mb-0">น.ส.วรรณภา แก้งคำ</h5>
                            <small>แผนก : บัญชี</small>
                            <br>
                            <small>ชื่อเล่น ฝน</small>
                        </div>
                    </div>
                </div> -->
                        <!-- <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="team-item">
                        <div class="overflow-hidden">
                            <img class="img-fluid" style="width:100%; height: 300px; object-fit:cover" src="http://localhost/project-tkn-2/uploads_img_employee/538080303.jpg">
                        </div>
                        <div class="position-relative d-flex justify-content-center" style="margin-top: -19px;">
                        <a class="btn btn-square mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-square mx-1" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-square mx-1" href=""><i class="fab fa-instagram"></i></a>
                    </div>
                        <div class="text-center p-4">
                            <h5 class="mb-0">น.ส.วรรณภา แก้งคำ</h5>
                            <small>แผนก : บัญชี</small>
                            <br>
                            <small>ชื่อเล่น ฝน</small>

                        </div>
                    </div>
                </div> -->
                        <!-- <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="team-item">
                        <div class="overflow-hidden">
                            <img class="img-fluid" style="width:100%; height: 300px; object-fit:cover" src="img-tkn/tkn.jpg">
                        </div>
                        <div class="position-relative d-flex justify-content-center" style="margin-top: -19px;">
                        <a class="btn btn-square mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-square mx-1" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-square mx-1" href=""><i class="fab fa-instagram"></i></a>
                    </div>
                        <div class="text-center p-4">
                            <h5 class="mb-0">น.ส.วรรณภา แก้งคำ</h5>
                            <small>แผนก : บัญชี</small>
                            <br>
                            <small>ชื่อเล่น ฝน</small>
                        </div>
                    </div>
                </div> -->
                <?php
                    }
                }
                ?>
            </div>
        </div>
    </div>
    <!-- Team End -->


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
                        <!-- <div class="footer-menu">
                            <a href="">Home</a>
                            <a href="">Cookies</a>
                            <a href="">Help</a>
                            <a href="">FQAs</a>
                        </div> -->
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