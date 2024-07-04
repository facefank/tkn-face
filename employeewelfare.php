<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>สวัสดิการพนักงาน</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

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

</head>

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
        padding-left: 80px;
        padding-right: 80px;

    }

    #hero {
        padding-top: 3rem;
        padding-bottom: 5rem;
    }

    .modal-dialog {
        max-width: 1000px;
        /* ปรับขนาดเท่าที่ต้องการ */
        width: 100%;
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


    <!-- Topbar Start -->
    <!-- <div class="container-fluid bg-dark px-5 d-none d-lg-block">
        <div class="row gx-0">
            <div class="col-lg-8 text-center text-lg-start mb-2 mb-lg-0">
                <div class="d-inline-flex align-items-center" style="height: 45px;">
                    <small class="me-3 text-light"><i class="fa fa-map-marker-alt me-2"></i>123 Street, New York, USA</small>
                    <small class="me-3 text-light"><i class="fa fa-phone-alt me-2"></i>+012 345 6789</small>
                    <small class="text-light"><i class="fa fa-envelope-open me-2"></i>info@example.com</small>
                </div>
            </div>
            <div class="col-lg-4 text-center text-lg-end">
                <div class="d-inline-flex align-items-center" style="height: 45px;">
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i class="fab fa-twitter fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i class="fab fa-facebook-f fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i class="fab fa-linkedin-in fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i class="fab fa-instagram fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle" href=""><i class="fab fa-youtube fw-normal"></i></a>
                </div>
            </div>
        </div>
    </div> -->
    <!-- Topbar End -->


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
                    <a href="home" class="nav-item nav-link">Home</a>
                    <!-- <a href="#" class="nav-item nav-link">Services</a> -->
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
                </div>
                <a href="login" class="btn btn-primary rounded-pill py-2 px-4" target="_blank">ลงชื่อเข้าใช้</a>
            </div>
        </nav>

        <div id="hero" class="container-fluid bg-primary  mb-5 hero-header">
            <div class="container py-5">
                <div class="row justify-content-center py-5">
                    <div class="col-lg-10 pt-lg-5 mt-lg-5 text-center">
                        <h1 class="display-3 text-white animated slideInDown">สวัสดิการพนักงาน</h1>
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


    <!-- Testimonial Start -->
    <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="text-center">
                <h6 class="section-title bg-white text-center text-primary px-3">ส่วนงานฝ่ายบุคคล</h6>
                <h1 class="mb-5">สวัสดิการพนักงาน</h1>
            </div>
            <div class="owl-carousel testimonial-carousel position-relative">
                <!-- <div class="testimonial-item bg-white text-center border p-4">
                    <img class="bg-white rounded-circle shadow p-1 mx-auto mb-3" src="https://www.hrm.chula.ac.th/newhrm/wp-content/uploads/2022/10/470x493-images-stories-logo-1-10-SPS.jpg" style="width: 80px; height: 80px;">
                    <h5 class="mb-1">ประกันสังคม</h5>
                    <br>
                    <a class="py-2 px-5 mt-2" href="" data-bs-toggle="modal" data-bs-target="#myModal1">อ่านเพิ่มเติมที่นี่</a>
                </div> -->

                <div class="testimonial-item bg-white text-center border p-4">
                    <i class="fa fa-3x fas fa-dungeon text-primary mb-4"></i>
                    <!-- <img class="bg-white rounded-circle shadow p-1 mx-auto mb-3" src="https://s2.thousandreason.com/thimgs/202208/17/2/16606740478775.jpg" style="width: 80px; height: 80px;"> -->
                    <h5 class="mb-1">สวัสดิการสมรส</h5>
                    <br>
                    <a class="py-2 px-5 mt-2" href="" data-bs-toggle="modal" data-bs-target="#myModal2">อ่านเพิ่มเติมที่นี่</a>
                </div>

                <div class="testimonial-item bg-white text-center border p-4">
                    <i class="fa fa-3x  fas fa-baby text-primary mb-4"></i>
                    <!-- <img class="bg-white rounded-circle shadow p-1 mx-auto mb-3" src="https://img.pptvhd36.com/thumbor/2023/08/04/24abaf1.jpg" style="width: 80px; height: 80px;"> -->
                    <h5 class="mb-1">สวัสดิการคลอดบุตร</h5>
                    <br>
                    <a class="py-2 px-5 mt-2" href="" data-bs-toggle="modal" data-bs-target="#myModal3">อ่านเพิ่มเติมที่นี่</a>
                </div>

                <div class="testimonial-item bg-white text-center border p-4">
                    <i class="fa fa-3x fas fas fa-gifts text-primary mb-4"></i>
                    <h5 class="mb-1">สวัสดิการเยี่ยมไข้</h5>
                    <br>
                    <a class="py-2 px-5 mt-2" href="" data-bs-toggle="modal" data-bs-target="#myModal4">อ่านเพิ่มเติมที่นี่</a>
                </div>

                <div class="testimonial-item bg-white text-center border p-4">
                    <i class="fa fa-3x 	fas fa-hand-holding-usd text-primary mb-4"></i>
                    <h5 class="mb-1">สวัสดิการเงินช่วยเหลือกรณีเสียชีวิต</h5>
                    <br>
                    <a class="py-2 px-5 mt-2" href="" data-bs-toggle="modal" data-bs-target="#myModal5">อ่านเพิ่มเติมที่นี่</a>
                </div>

                <div class="testimonial-item bg-white text-center border p-4">
                    <i class="fa fa-3x fas fas fa-oil-can text-primary mb-4"></i>
                    <h5 class="mb-1">สวัสดิการเกี่ยวกับการ ซ่อมบำรุงซื้ออะไหล่และอุปกรณ์ของบริษัทฯ</h5>
                    <br>
                    <a class="py-2 px-5 mt-2" href="" data-bs-toggle="modal" data-bs-target="#myModal6">อ่านเพิ่มเติมที่นี่</a>
                </div>

                <div class="testimonial-item bg-white text-center border p-4">
                    <i class="fa fa-3x fas fa-car-crash text-primary mb-4"></i>
                    <h5 class="mb-0">ประกันอุบัติเหตุ</h5>
                    <br>
                    <a class="py-2 px-5 mt-2" href="" data-bs-toggle="modal" data-bs-target="#myModal7">อ่านเพิ่มเติมที่นี่</a>
                </div>

                <div class="testimonial-item bg-white text-center border p-4">
                    <i class="fa fa-3x fas fa-user-md text-primary mb-4"></i>
                    <h5 class="mb-0">ตรวจสุขภาพประจำปี</h5>
                    <br>
                    <a class="py-2 px-5 mt-2" href="" data-bs-toggle="modal" data-bs-target="#myModal8">อ่านเพิ่มเติมที่นี่</a>
                </div>

                <div class="testimonial-item bg-white text-center border p-4">
                    <i class="fa fa-3x fas fa-donate text-primary mb-4"></i>
                    <h5 class="mb-0">กองทุนสำรองเลี้ยงชีพ</h5>
                    <br>
                    <a class="py-2 px-5 mt-2" href="" data-bs-toggle="modal" data-bs-target="#myModal9">อ่านเพิ่มเติมที่นี่</a>
                </div>

                <!-- <div class="testimonial-item bg-white text-center border p-4">
                    <i class="fa fa-3x  fas fa-gift text-primary mb-4"></i>
                    <h5 class="mb-0">มีเงินช่วยเหลือการสูญเสียคนในครอบครัว</h5>
                    <p>New York, USA</p>
                    <p class="mb-0">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam et eos. Clita erat ipsum et lorem et sit.</p>
                </div>
                <div class="testimonial-item bg-white text-center border p-4">
                    <i class="fa fa-3x fas fas fa-hand-holding-usd text-primary mb-4"></i>
                    <h5 class="mb-0">โบนัสประจำปี ตามผลประกอบการ</h5>
                    <p>New York, USA</p>
                    <p class="mb-0">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam et eos. Clita erat ipsum et lorem et sit.</p>
                </div>
                <div class="testimonial-item bg-white text-center border p-4">
                    <i class="fa fa-3x fas fas fa-ambulance text-primary mb-4"></i>
                    <h5 class="mb-0">ประกันอุบัติเหตุ</h5>
                    <p>New York, USA</p>
                    <p class="mt-2 mb-0">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam et eos. Clita erat ipsum et lorem et sit.</p>
                </div>
                <div class="testimonial-item bg-white text-center border p-4">
                    <i class="fa fa-3x fas fas fa-piggy-bank text-primary mb-4"></i>
                    <h5 class="mb-0">กองทุนสำรองเลี้ยงชีพ สำหรับสะสมเงินไว้ในยามเกษียณ</h5>
                    <p class="mt-2 mb-0">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam et eos. Clita erat ipsum et lorem et sit.</p>
                </div>
                <div class="testimonial-item bg-white text-center border p-4">
                    <i class="fa fa-3x fas fas fa-gifts text-primary mb-4"></i>
                    <h5 class="mb-0">สวัสดิการเยี่ยมไข้ สวัสดิการเช็คของขวัญแต่งงาน สวัสดิการคลอดบุตร</h5>
                    <p class="mt-2 mb-0">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam et eos. Clita erat ipsum et lorem et sit.</p>
                </div>

                <div class="testimonial-item bg-white text-center border p-4">
                    <i class="fa fa-3x fas 	fas fa-plane-departure text-primary mb-4"></i>
                    <h5 class="mb-0">ค่าเบี้ยเลี้ยง กรณีไปทำงานจังหวัด</h5>
                    <p>New York, USA</p>
                    <p class="mt-2 mb-0">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam et eos. Clita erat ipsum et lorem et sit.</p>
                </div> -->
                <!-- <div class="testimonial-item bg-white text-center border p-4">
                    <i class="fa fa-3x fas fas fa-oil-can text-primary mb-4"></i>
                    <h5 class="mb-0"> สำหรับพนักงานที่รักรถ </h5>
                    <p class="mt-2 mb-0">สำหรับพนักงานที่รักรถ เรามีสวัสดิการส่วนรถต่างๆให้ ไม่ว่าจะเป็น ซ่อม/ซื้อ/ บำรุงรักษาอะไหล่รถยนต์ ในราคาพนักงาน</p>
                </div> -->
                <!-- <div class="testimonial-item bg-white text-center border p-4">
                    <i class="fa fa-3x fas fas fa-wrench text-primary mb-4"></i>
                    <h5 class="mb-0">ส่วนลดต่างๆ เช่น ซ่อมรถในศูนย์บริการ ตัวถังและสี ประดับยนต์...</h5>
                    <p class="mt-2 mb-0">สำหรับพนักงานที่รักรถ เรามีสวัสดิการส่วนรถต่างๆให้ ไม่ว่าจะเป็น ซ่อม/ซื้อ/ บำรุงรักษาอะไหล่รถยนต์ ในราคาพนักงาน</p>
                </div> -->
            </div>
        </div>
    </div>
    <!-- Testimonial End -->

    <!-- โมดอลข้อมูลสวัสดิการ 1-->
    <div class="modal" id="myModal1">
        <div class="modal-dialog">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <label for="img_employeeresign" class="modal-title">รายละเอียดสวัสดิการ</label>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <!-- Modal body -->
                <div style="text-align: center;" class="modal-body">
                    <img width="170px" alt="" src="https://www.hrm.chula.ac.th/newhrm/wp-content/uploads/2022/10/470x493-images-stories-logo-1-10-SPS.jpg" class="rounded mt-2 mb-4">
                    <h5 class="mb-3">ประกันสังคม</h5>
                    <div style="text-align: center;">
                        <p>1 Lorem ipsum dolor sit amet consectetur adipisicin1 Lorem ipsum dolor sit amet consectetur adipisicin1 Lorem ipsum dolor sit amet consectetur adipisicin</p>
                        <p>1 Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                        <p>1 Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- โมดอลข้อมูลสวัสดิการ1 -->

    <!-- โมดอลข้อมูลสวัสดิการ 2-->
    <div class="modal" id="myModal2">
        <div class="modal-dialog">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <label for="img_employeeresign" class="modal-title">รายละเอียดสวัสดิการ</label>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <!-- Modal body -->
                <div style="text-align: center;" class="modal-body">
                    <img width="170px" alt="" src="https://s2.thousandreason.com/thimgs/202208/17/2/16606740478775.jpg" class="rounded mt-2 mb-4">
                    <h5 class="mb-3">สวัสดิการสมรส</h5>
                    <div style="text-align: left;">
                        <p>1 Lorem ipsum dolor sit amet consectetur adipisicin1 Lorem ipsum dolor sit amet consectetur adipisicin1 Lorem ipsum dolor sit amet consectetur adipisicin</p>
                        <p>1 Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                        <p>1 Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- โมดอลข้อมูลสวัสดิการ2 -->

    <!-- โมดอลข้อมูลสวัสดิการ 3-->
    <div class="modal" id="myModal3">
        <div class="modal-dialog">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <label for="img_employeeresign" class="modal-title">รายละเอียดสวัสดิการ</label>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <!-- Modal body -->
                <div style="text-align: center;" class="modal-body">
                    <img width="170px" alt="" src="https://img.pptvhd36.com/thumbor/2023/08/04/24abaf1.jpg" class="rounded mt-2 mb-4">
                    <h5 class="mb-3">สวัสดิการคลอดบุตร</h5>
                    <div style="text-align: left;">
                        <p>1 Lorem ipsum dolor sit amet consectetur adipisicin1 Lorem ipsum dolor sit amet consectetur adipisicin1 Lorem ipsum dolor sit amet consectetur adipisicin</p>
                        <p>1 Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                        <p>1 Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- โมดอลข้อมูลสวัสดิการ3 -->

    <!-- โมดอลข้อมูลสวัสดิการ 4-->
    <div class="modal" id="myModal4">
        <div class="modal-dialog">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <label for="img_employeeresign" class="modal-title">รายละเอียดสวัสดิการ</label>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <!-- Modal body -->
                <div style="text-align: center;" class="modal-body">
                    <img width="170px" alt="" src="https://png.pngtree.com/png-vector/20221025/ourmid/pngtree-doctor-visiting-patient-during-recovery-semi-flat-color-vector-characters-png-image_6378237.png" class="rounded mt-2 mb-4">
                    <h5 class="mb-3">สวัสดิการเยี่ยมไข้</h5>
                    <div style="text-align: left;">
                        <p>1 Lorem ipsum dolor sit amet consectetur adipisicin1 Lorem ipsum dolor sit amet consectetur adipisicin1 Lorem ipsum dolor sit amet consectetur adipisicin</p>
                        <p>1 Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                        <p>1 Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- โมดอลข้อมูลสวัสดิการ4 -->

    <!-- โมดอลข้อมูลสวัสดิการ 5-->
    <div class="modal" id="myModal5">
        <div class="modal-dialog">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <label for="img_employeeresign" class="modal-title">รายละเอียดสวัสดิการ</label>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <!-- Modal body -->
                <div style="text-align: center;" class="modal-body">
                    <img width="170px" alt="" src="https://cpd.upbean.co.th/uploads/contents/2021062893405.png" class="rounded mt-2 mb-4">
                    <h5 class="mb-3">สวัสดิการเงินช่วยเหลือกรณีเสียชีวิต</h5>
                    <div style="text-align: left;">
                        <p>1 Lorem ipsum dolor sit amet consectetur adipisicin1 Lorem ipsum dolor sit amet consectetur adipisicin1 Lorem ipsum dolor sit amet consectetur adipisicin</p>
                        <p>1 Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                        <p>1 Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- โมดอลข้อมูลสวัสดิการ5 -->

    <!-- โมดอลข้อมูลสวัสดิการ 6-->
    <div class="modal" id="myModal6">
        <div class="modal-dialog">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <label for="img_employeeresign" class="modal-title">รายละเอียดสวัสดิการ</label>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <!-- Modal body -->
                <div style="text-align: center;" class="modal-body">
                    <img width="170px" alt="" src="https://chairatchakarn.co.th/toyota/wp-content/uploads/2020/05/HeadAFPic02.jpg" class="rounded mt-2 mb-4">
                    <h5 class="mb-3">สวัสดิการเกี่ยวกับการ ซ่อมบารุงซื้ออะไหล่และอุปกรณ์ของบริษัทฯ</h5>
                    <div style="text-align: left;">
                        <p>1 Lorem ipsum dolor sit amet consectetur adipisicin1 Lorem ipsum dolor sit amet consectetur adipisicin1 Lorem ipsum dolor sit amet consectetur adipisicin</p>
                        <p>1 Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                        <p>1 Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- โมดอลข้อมูลสวัสดิการ6 -->

    <!-- โมดอลข้อมูลสวัสดิการ 7-->
    <div class="modal" id="myModal7">
        <div class="modal-dialog">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <label for="img_employeeresign" class="modal-title">รายละเอียดสวัสดิการ</label>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <!-- Modal body -->
                <div style="text-align: center;" class="modal-body">
                    <img width="170px" alt="" src="https://krungthai.com/ImgUpload/product/ProductThumb_554PA__Presonal-356x215px.jpg" class="rounded mt-2 mb-4">
                    <h5 class="mb-3">ประกันอุบัติเหตุ</h5>
                    <div style="text-align: left;">
                        <p>1 Lorem ipsum dolor sit amet consectetur adipisicin1 Lorem ipsum dolor sit amet consectetur adipisicin1 Lorem ipsum dolor sit amet consectetur adipisicin</p>
                        <p>1 Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                        <p>1 Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- โมดอลข้อมูลสวัสดิการ7 -->

    <!-- โมดอลข้อมูลสวัสดิการ 8-->
    <div class="modal" id="myModal8">
        <div class="modal-dialog">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <label for="img_employeeresign" class="modal-title">รายละเอียดสวัสดิการ</label>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <!-- Modal body -->
                <div style="text-align: center;" class="modal-body">
                    <img width="170px" alt="" src="https://promotions.co.th/wp-content/uploads/2020/07/young-male-psysician-with-patient-measuring-blood-pressure_1303-17877-265x198.jpg" class="rounded mt-2 mb-4">
                    <h5 class="mb-3">ตรวจสุขภาพประจำปี</h5>
                    <div style="text-align: left;">
                        <p>1 Lorem ipsum dolor sit amet consectetur adipisicin1 Lorem ipsum dolor sit amet consectetur adipisicin1 Lorem ipsum dolor sit amet consectetur adipisicin</p>
                        <p>1 Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                        <p>1 Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- โมดอลข้อมูลสวัสดิการ8 -->

    <!-- โมดอลข้อมูลสวัสดิการ 9-->
    <div class="modal" id="myModal9">
        <div class="modal-dialog">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <label for="img_employeeresign" class="modal-title">รายละเอียดสวัสดิการ</label>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <!-- Modal body -->
                <div style="text-align: center;" class="modal-body">
                    <img width="170px" alt="" src="https://www.scb.co.th/content/scb/th/personal-banking/stories/salary-man/unclaimed-money-looked-over-topic-from-provident-fund-members/jcr%3Acontent/par/wrappercomp/wrapper/rowcomp/col-1/storyinfocomp/par/image.img.jpg/1645439063277.jpg" class="mt-2 mb-4" style="object-fit:cover">
                    <h5 class="mb-3">กองทุนสำรองเลี้ยงชีพ</h5>
                    <div style="text-align: left;">
                        <p>1 Loremipsumdolorsitameonsecteturadipisicin1Lorem ipsum dolor sit amet consectetur adipisicin1 Lorem ipsum dolor sit amet consectetur adipisicin</p>
                        <p>1 Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                        <p>1 Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    </div>
                </div>
                <!-- <div class="modal-footer">
                </div> -->

            </div>
        </div>
    </div>
    <!-- โมดอลข้อมูลสวัสดิการ9 -->













    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
        <div id="footerr" class="container-fluid py-3 pb-2">
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
                            <h5 class="text-white mt-2"><?php echo $elementDepartment["department"]; ?></h5>
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
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
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