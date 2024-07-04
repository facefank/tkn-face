<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Tourist - Travel Agency HTML Template</title>
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

        .mb-5 {
            font-family: 'Kanit', sans-serif;
            font-family: 'Noto Sans Thai', sans-serif;

        }

        .mb-0 {
            font-family: 'Kanit', sans-serif;
            font-family: 'Noto Sans Thai', sans-serif;
        }

        h4 {
            font-family: 'Kanit', sans-serif;
            font-family: 'Noto Sans Thai', sans-serif;

        }
        #text{
            text-align: center;
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
            <div class="col-lg-9 text-center text-lg-start mb-2 mb-lg-0">
                <div class="d-inline-flex align-items-center" style="height: 45px;">
                    <small class="me-3 text-light"><i class="fa fa-map-marker-alt me-2"></i>359 888 หมู่17 ถนน มิตรภาพ
                        หน้าบ้าน ตำบลในเมือง อำเภอเมืองขอนแก่น ขอนแก่น 40000</small>
                    <small class="me-3 text-light"><i class="fa fa-phone-alt me-2"></i>พนักงานสามารถแจ้งข่าวสารได้ที่
                        612,601</small>
                    <small class="text-light"><i class="fa fa-envelope-open me-2"></i>crtkn14225@gmail.com</small>
                    <small class="text-light">พนักงานสามารถแจ้งข่าวสารได้ที่ 612,601</small>

                </div>
            </div>
            <div class="col-lg-3 text-center text-lg-end">
                <div class="d-inline-flex align-items-center" style="height: 45px;">
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i
                            class="fab fa-twitter fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i
                            class="fab fa-facebook-f fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i
                            class="fab fa-linkedin-in fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle me-2" href=""><i
                            class="fab fa-instagram fw-normal"></i></a>
                    <a class="btn btn-sm btn-outline-light btn-sm-square rounded-circle" href=""><i
                            class="fab fa-youtube fw-normal"></i></a>
                </div>
            </div>
        </div>
    </div> -->
    <!-- Topbar End -->


    <!-- Navbar & Hero Start -->
    <div class="container-fluid position-relative p-0">
        <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
            <a href="indexnews.php" class="navbar-brand p-0">
                <!-- <h1 class="text-primary m-0"><i class="fa fa-map-marker-alt me-3"></i>Tourist</h1> -->
                <img src="img-tkn/logo-tkn-newwwwww.png" alt="Logo">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto py-0">
                    <a href="indexnews.php" class="nav-item nav-link active">Home</a>
                    <!-- <a href="#" class="nav-item nav-link">Services</a> -->
                    <div class="nav-item dropdown">
                        <a href="employeehr.php" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">ส่วนงานบริการ</a>
                        <div class="dropdown-menu m-0">
                            <a href="https://tkn.co.th/repairit" target="_blank" class="dropdown-item">แจ้งซ่อม</a>
                            <a href="https://tkn.co.th/repairit" target="_blank" class="dropdown-item">จองห้องประชุม</a>
                            <a href="#" class="dropdown-item">จองรถ</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="employeehr.php" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">ส่วนงานฝ่ายบุคคล</a>
                        <div class="dropdown-menu m-0">
                            <a href="employeehr.php" class="dropdown-item">พนักงานเข้าใหม่</a>
                            <a href="employeehr.php" class="dropdown-item">พนักงานลาออก</a>
                            <a href="employeewelfare.php" class="dropdown-item">สวัสดิการพนักงาน</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="outstandingemployee.php" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">พนักงานดีเด่น</a>
                        <div class="dropdown-menu m-0">
                            <a href="outstandingemployee.php" class="dropdown-item">พนักงานดีเด่น</a>
                            <a href="outstandingemployeesale.php" class="dropdown-item">พนักงานขายยอดเยี่ยม</a>
                        </div>
                    </div>
                    <a href="register.php" class="nav-item nav-link" target="_blank">ลงทะเบียน</a>
                </div>
                <a href="login.php" class="btn btn-primary rounded-pill py-2 px-4" target="_blank">ลงชื่อเข้าใช้</a>
            </div>
        </nav>
        <div class="container-fluid bg-primary py-5 mb-5 hero-header">
            <div class="container py-5">
                <div class="row justify-content-center py-5">
                    <div class="col-lg-10 pt-lg-5 mt-lg-5 text-center">
                        <h1 class="display-3 text-white animated slideInDown">Contact Us</h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-center">
                                <li class="breadcrumb-item"><a href="indexnews.php">Home</a></li>
                                <li class="breadcrumb-item text-white active" aria-current="page">Contact</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Navbar & Hero End -->


    <!-- Contact Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">Contact Us</h6>
                <h1 class="mb-5">Contact For Any Query</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <!-- <h5>Get In Touch</h5>
                    <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos</p> -->
                    <div class="d-flex align-items-center mb-4">
                        <div class="d-flex align-items-center justify-content-center flex-shrink-0 bg-primary" style="width: 50px; height: 50px;">
                            <i class="fa fa-map-marker-alt text-white"></i>
                        </div>
                        <div class="ms-3">
                            <h5 class="text-primary">Office</h5>
                            <p class="mb-0">359 888 หมู่17 ถนน มิตรภาพ
                                หน้าบ้าน ตำบลในเมือง อำเภอเมืองขอนแก่น ขอนแก่น 40000</p>
                        </div>
                    </div>
                    <div class="d-flex align-items-center mb-4">
                        <div class="d-flex align-items-center justify-content-center flex-shrink-0 bg-primary" style="width: 50px; height: 50px;">
                            <i class="fa fa-phone-alt text-white"></i>
                        </div>
                        <div class="ms-3">
                            <h5 class="text-primary">Mobile</h5>
                            <p class="mb-0">Call: 043-333444</p>
                        </div>
                    </div>
                    <div class="d-flex align-items-center">
                        <div class="d-flex align-items-center justify-content-center flex-shrink-0 bg-primary" style="width: 50px; height: 50px;">
                            <i class="fa fa-envelope-open text-white"></i>
                        </div>
                        <div class="ms-3">
                            <h5 class="text-primary">Email</h5>
                            <p class="mb-0">crtkn14225@gmail.com</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <iframe class="position-relative rounded w-100 h-100" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3827.0408445054127!2d102.81792747491201!3d16.422751884309218!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31228a1dbd107a99%3A0x8be4d893dedd6dfa!2sToyota%20Kaennakorn!5e0!3m2!1sth!2sth!4v1705462052156!5m2!1sth!2sth" frameborder="0" style="min-height: 300px; border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                </div>
                <div class="col-lg-4 col-md-12 wow fadeInUp" data-wow-delay="0.5s">
                    <iframe class="position-relative rounded w-100 h-100" src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FToyotakaennakorn%2F%3Flocale%3Dth_TH&tabs=timeline&width=370&height=300&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" frameborder="0" style="min-height: 300px; border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                    <!-- <form>
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="name" placeholder="Your Name">
                                    <label for="name">Your Name</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="email" class="form-control" id="email" placeholder="Your Email">
                                    <label for="email">Your Email</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="subject" placeholder="Subject">
                                    <label for="subject">Subject</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea class="form-control" placeholder="Leave a message here" id="message" style="height: 100px"></textarea>
                                    <label for="message">Message</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary w-100 py-3" type="submit">Send Message</button>
                            </div>
                        </div>
                    </form> -->
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->


    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-4">
                <div class="col-lg-2 col-md-6 text-right">
                    <h5 class="text-white mb-2">ประธานกรรมการบริหาร</h5>
                    <small>คุณโชค 888</small><br>
                    <small>เลขา 887</small><br>
                    <h5 class="text-white my-2">บริการ</h5>
                    <small>ห้องครัว 800</small><br>
                    <small>ร้านกาแฟ 801</small><br>
                    <small>ห้องประชุมชั้น2ตึกเก่า 802</small><br>
                    <small>ห้องประชุมตึกใหม่ 803</small><br>
                    <small>ห้องประชุม CR 804</small><br>
                    <br>
                    
                </div>
                <div class="col-lg-2 col-md-6">
                <h5 class="text-white mb-2">ทรัพยากรมนุษย์</h5>
                    <small>ผ.อฝ่าย HR&GA (พี่มล) 666</small><br>
                    <small>หัวหน้า HR 602</small><br>
                    <small>สรรหา 600</small><br>
                    <small>Time&Attendance(จอย) 601</small><br>
                    <small>สวัสดิการ 603</small><br>

                    <h5 class="text-white my-2">ธุรการกลาง</h5>
                    <small>หัวหน้าธุรการกลาง 612</small><br>
                    <small>ธุรการกลาง 611</small><br>
                    <small>จัดซื้อ 610</small><br>
                    
                </div>
                <div class="col-lg-2 col-md-6">
                <h5 class="text-white mb-2">ธุรการขาย</h5>
                    <small>TBR คิวรถใหม่(รุ่ง) 501</small><br>
                    <small>VDQI(อ้อม) 530</small><br>
                    <small>ป้ายแดง (แอน) 531</small><br>
                    <small>ไฟแนนซ์อาวุโส (พี่ปุย) 562</small><br>
                    <h5 class="text-white my-2">ทะเบียน</h5>
                    <small>ทะเบียน (แรม,นุ่น) 510</small><br>
                    <h5 class="text-white my-2">การตลาด</h5>
                    <small>GM การตลาด 500</small><br>
                    <small>การตลาด 540</small><br>
                </div>
                <div class="col-lg-2 col-md-6">
                <h5 class="text-white mb-2">ฝ่ายขาย</h5>
                    <small>ผอ.ฝ่ายขาย (พี่นันท์) 111</small><br>
                    <small>ผอ.ฝ่ายขาย (พี่ปอนด์) 561</small><br>
                    <small>โชว์รูม 1 551</small><br>
                    <small>โชว์รูม 1 555</small><br>
                    <small>ห้องขาย 553</small><br>
                    <small>แคชเชียร์ขาย (พี่หมู) 556</small><br>
                    <h5 class="text-white mt-3">TKN Rent A Car</h5>
                    <small>Tel,Fax 043365212</small><br>
                </div>
                <div class="col-lg-2 col-md-6">
                <h5 class="text-white mb-2">บริการหลังการจำหน่าย GS</h5>
                    <small>ผจก.กอล์ฟ 123</small><br>
                    <small>ยุ้ย SA 305</small><br>
                    <small>คอนโทรล 300</small><br>
                    <small>SA ด้านบน/รับงานซ่อม 1 302</small><br>
                    <small>SA ด้านบน/รับงานซ่อม 2 304</small><br>
                    <small>QC ล้างรถ 307</small><br>
                    <small>แคชเชียร์ 308</small><br>
                    <small>ธุรการศูนย์บริการ (ฝ้าย) 309</small><br>
                    <small>TA 351</small>

                </div>
                <div class="col-lg-2 col-md-6">
                <h5 class="text-white mb-2">บริการหลังการจำหน่าย BP</h5>
                    <small>ผอ.ศูนย์ BP (คุณไพบูลย์) 333</small><br>
                    <small>ผช.ผจก/หัวหน้าแผนก 363</small><br>
                    <small>โฟร์แมน 360</small><br>
                    <small>คอนโทรล 361</small><br>
                    <small>SA BP 362</small><br>
                </div>
                <div class="col-lg-2 col-md-6">
                    <h5 class="text-white mb-2">บัญชี</h5>
                    <small>ผ.อฝ่ายบัญชี (พี่เถียร) 700</small><br>
                    <small>วางบิล,ค่าใช้จ่ายต่างๆ (หยด) 701</small><br>
                    <small>ใบกำกับภาษี.ใบเสร็จรถยนต์ 703</small><br>
                    <small>ใบกำกับภาษี.ใบเสร็จรถยนต์ 703</small><br>
                    <small>บัญชีขายและศูนย์บริการ 705</small><br>
                    <small>ห้องประชุมชั้น2ตึกเก่า 802</small><br>
                    <small>ห้องประชุมตึกใหม่ 803</small><br>
                    <small>ห้องประชุม CR 804</small><br>
                </div>
                <div class="col-lg-2 col-md-6">
                <h5 class="text-white mb-2">พัฒนาองค์กร</h5>
                    <small>OD,จปว(เกษ,ปอเปี๊ยะ) 612</small><br>
                    <small>ธุรการกลาง (เมย์) 611</small><br>
                    <small>จัดซื้อ (นุ่น) 610</small><br>
                    <h5 class="text-white mb-2">ห้องพยาบาล</h5>
                    <small>ห้องพยาบาล 808</small><br>
                    <h5 class="text-white my-2">ห้องฝึกอบรมช่างเทคนิค</h5>
                    <small>ห้องฝึกอบรม 807</small><br>
                </div>
                
                <div class="col-lg-2 col-md-6">
                <h5 class="text-white mb-2">ประกันภัย</h5>
                    <small>ประกันภัย 520</small><br>
                    <small>ประกันภัยต่ออายุ 521</small><br>
                    <h5 class="text-white my-2">ประดับยนต์ VDQI</h5>
                    <small>ประดับยนต์(VDQI) 364</small><br>
                    <small>ห้องสโตร์ VDQI 532</small><br>
                    <small>ติดฟิมล์(อุทัย) 533</small><br>
                   
                </div>
                <div class="col-lg-2 col-md-6">
                <h5 class="text-white mb-2">Cell Center</h5>
                    <small>Cellcenter 100</small><br>
                    <small>Cellcenter(ไก่) 101</small><br>
                    <small>Cellcenter(จูน) 102</small><br>
                    <small>Cellcenter(แอม) 103</small><br>
                    <small>Cellcenter(เอิร์น) 104</small><br>
                    <small>Cellcenter(เกตุ) 110</small><br>
                    <small>Cellcenter(อุ้ย) 105</small><br>
                    <small>Cellcenter(เจี๊ยบ) 106</small><br>
                </div>
                <div class="col-lg-2 col-md-6">
                    <h5 class="text-white mb-2">CR</h5>
                    <small>CR (มิ้ว) 120</small><br>
                    <small>เค้าเตอร์บาร์น้ำ 121</small><br>
                    <small>CR (แพรว) 121</small><br>
                    <small>CR (เก๋) 108</small><br>
                    <small>CR (ต่าย) 109</small><br>
                </div>
                <div class="col-lg-2 col-md-6">
                <h5 class="text-white mb-2">อะไหล่</h5>
                    <small>อะไหล่ประกันภัย 320</small><br>
                    <small>อะไหล่ GS 321</small><br>
                    <h5 class="text-white my-2">IT</h5>
                    <small>IT 620</small><br>
                </div>
                <div class="col-lg-2 col-md-6">
                    <h5 class="text-white mb-2">การเงิน</h5>
                    <small>ผ.อฝ่ายการเงิน (พี่ตื้น) 777</small><br>
                    <small>โอนเงินค่า,ใช้จ่ายต่างๆ 710</small><br>
                    <small>โอนเงินค่า,ใช้จ่ายต่างๆ 711</small><br>
                </div>
                <div class="col-lg-2 col-md-6">
                    <h5 class="text-white my-2">ธุรการ Fleet</h5>
                    <small>ธุรการ Fleet 541</small><br>
                </div>
                
                <div class="col-lg-2 col-md-6">
                    <h5 class="text-white mb-2">รปภ</h5>
                    <small>ป้อมรปภ 805</small><br>
                </div>
               
            </div>
        </div>
        <div class="container">
            <div class="copyright">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        <p>INFERNO Copyright © 2023 Toyota Kaennakorn Co., Ltd.</p>
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