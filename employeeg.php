<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>พนักงานดีเด่น</title>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@300&family=Noto+Sans+Thai&display=swap" rel="stylesheet">


    <!-- <link rel="canonical" href="https://v5.getbootstrap.com/docs/5.0/examples/carousel/"> -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://getbootstrap.com/docs/5.2/assets/css/docs.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

    <link rel="stylesheet" href="footer.css">

    <!-- FOOTER -->
    <!--FONT AWESOME-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">





    <style>
        /* .tkn-3 {
        background-image: url("img-tkn/tkn-14.jpg");
        background-size: cover;
    } */
        .navbar {
            background-color: #041122;
        }

        #index {
            color: white;
        }

        #index:hover {
            color: #00cf85;

        }

        /* ลิสต์ dropdown */
        .dropdown-menu {
            display: none;
            position: absolute;
            background-color: #041122;
            min-width: 160px;
            /* box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2); */
            /* z-index: 1;
        transition: transform 0.5s ease-in-out;
        transform-origin: top; */

        }

        /* ลิสต์ dropdown จะแสดงเมื่อ hover ที่ปุ่ม dropdown */
        .nav-item:hover .dropdown-menu {
            display: block;
        }

        /* การขยายขนาดช้าๆ */
        .dropdown-menu a {
            padding: 12px 16px;
            text-decoration: none;
            display: block;
            transition: transform 0.5s ease-in-out;
            color: #000000;
        }

        .dropdown-menu a:hover {
            /* transform: scale(1.05); */
            background-color: #041122;
            /* border-radius: 3px; */

        }

        .dropdown-menu a:active {
            background-color: #041122;
        }

        .dropdown-menu a:not(:hover) {
            background-color: #041122;

        }

        #i:hover {
            color: #00cf85;

        }


        #footer {
            background-color: #041122;
        }

        #index {
            color: white;
        }

        #index:hover {
            color: #00cf85;

        }

        .contaner-my {
            margin: 180px;
        }



        body {
            font-family: 'Kanit', sans-serif;
            font-family: 'Noto Sans Thai', sans-serif;
            background-color: #F1FDF3;

        }



        .container my-5 {
            max-width: 500%;
        }


        /* card */
        .card-img-top {
            height: 150px;
            width: 100%;
        }

        .card {
            border-radius: 10px;
            box-shadow: 0 0 20px 8px #d0d0d0;
            transition: all 0.4s cubic-bezier(0.645, 0.045, 0.355, 1);
            overflow: hidden;

        }

        /* card */


        .bd-placeholderr-img {
            /* border-bottom: 1px solid #ccc; */
            font-size: 1.125rem;
            box-shadow: 0 0 50px 8px #D3D3D3;
            border-radius: 5px;
            position: relative;
            /* padding-top: 65px; */
            padding-top: 66px;


        }


        .bd-placeholderrr-img {
            box-shadow: 0 0 50px 8px #D3D3D3;
            border-radius: 10px;
            border: 3px solid #ccc;
        }



        .bd-placeholder-img {
            border: 3px solid #ccc;
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            opacity: 1;
            box-shadow: 0 0 50px 8px #D3D3D3;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }



        /* Since positioning the image, we need to help out the caption */
        .carousel-caption {
            bottom: 3rem;
            z-index: 10;
        }

        /* Declare heights because of positioning of img element */
        .carousel-item {
            height: 32rem;
        }

        .carousel-item>img {
            position: absolute;
            top: 0;
            left: 0;
            min-width: 100%;
            height: 32rem;
        }


        /* MARKETING CONTENT
-------------------------------------------------- */

        /* พนักงาน */
        .marketing .col-lg-4 {
            margin-bottom: 1.5rem;
            text-align: center;
            padding: 30px;
        }

        .marketing h2 {
            font-weight: 400;
        }

        .marketing p {
            font-size: 18px;

        }

        .marketing .col-lg-4 p {
            margin-right: .75rem;
            margin-left: .75rem;
        }

        /* พนักงาน */



        /* Featurettes
------------------------- */

        .featurette-divider {
            margin: 5rem 0;

            /* Space out the Bootstrap <hr> more */
        }

        /* Thin out the marketing headings */
        .featurette-heading {
            font-weight: 300;
            line-height: 1;
            letter-spacing: -.05rem;
        }


        /* RESPONSIVE CSS
-------------------------------------------------- */

        @media (min-width: 40em) {

            /* Bump up size of carousel content */
            .carousel-caption p {
                margin-bottom: 1.25rem;
                font-size: 1.25rem;
                line-height: 1.4;

            }

            .featurette-heading {
                font-size: 50px;
            }
        }

        @media (min-width: 62em) {
            .featurette-heading {
                margin-top: 7rem;
            }
        }


        .b-example-divider {
            width: 100%;
            height: 140px;
            background-color: rgba(0, 0, 0, 0.1);
            border: solid rgba(0, 0, 0, 0.15);
            border-width: 1px 0;
            box-shadow: inset 0 0.5em 1.5em rgba(0, 0, 0, 0.1),
                inset 0 0.125em 0.5em rgba(0, 0, 0, 0.15);
        }
    </style>
</head>

<body>
   <!-- Navbar  -->
   <nav class="navbar fixed-top navbar-expand-lg navbar-dark p-md-2">
        <div class="container">
            <a class="navbar-brand p-2" href="index.php">
                <img src="img-tkn/logo-tkn-new.png" alt="" style="width: 135px;" class="fixed">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <div class="mx-auto"></div>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" id="index" href="index.php">หน้าแรก</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a id="index" class="nav-link dropdown-toggle" role="button" data-bs-toggle="button">ส่วนงานบริการ</a>
                        <ul class="dropdown-menu">
                            <li><a id="index" class="dropdown-item" href="https://tkn.co.th/repairit">แจ้งซ่อม</a></li>
                            <li><a id="index" class="dropdown-item" href="">จองรถ</a></li>
                            <li><a id="index" class="dropdown-item" href="">จองห้องประชุม</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a id="index" class="nav-link dropdown-toggle" role="button" data-bs-toggle="button">ส่วนงานฝ่ายบุคคล</a>
                        <ul class="dropdown-menu">
                            <li><a id="index" class="dropdown-item" href="employee.php">พนักงานเข้าใหม่</a></li>
                            <li><a id="index" class="dropdown-item" href="employee.php">พนักงานลาออก</a></li>
                            <li><a id="index" class="dropdown-item" href="wellfare.php">สวัสดิการพนักงาน</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a id="index" class="nav-link dropdown-toggle" role="button" data-bs-toggle="button">พนักงานดีเด่น</a>
                        <ul class="dropdown-menu">
                            <li><a id="index" class="dropdown-item" href="employeeg.php">พนักงานขายดีเด่น</a></li>
                            <li><a id="index" class="dropdown-item" href="employeeg.php">พนักงานขายยอดเยี่ยม</a></li>

                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="index" href="index.php">ข่าวสารทั่วไป</a>
                    </li>
                    
    
                    
                    <li class="nav-item">
                        <a class="nav-link" id="index" href="login.php" target="_blank">ลงชื่อเข้าใช้</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" id="index" href="Register.php" target="_blank">สมัครสมาชิก</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Navbar  -->

    <!-- พนักงานดีเด่น -->
    <div class="contaner-my">
        <div class="container marketing mt-5 mb-5">
            <h3 class="text-center text-success mt-3">พนักงานดีเด่น</h3>
            <!-- <br> -->
            <!-- Three columns of text below the carousel -->
            <div class="row">
                <div class="col-lg-4 mt-5">
                        <img class="bd-placeholder-img rounded-circle mt-5" style="width: 200px; height:200px;" src="img-tkn/img-em-1.jpg" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" role="img" focusable="false"></img>
                        <h3 class="text-success mt-4">2</h3>
                        <h4 class="text-success ">ยอดขาย 7 คัน</h4>
                        <p>นาย อัคพงษ์ อัคพงษ์</p>
                        <p>ชื่อเล่น : มอส</p>
                        <p>แผนก : พนักงานขาย</p>
                    </div>
                    <div class="col-lg-4">
                        <img class="bd-placeholder-img rounded-circle mt-5" style="width: 200px; height:200px;" src="img-tkn/img-em-1.jpg" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" role="img" focusable="false"></img>
                        <h3 class="text-success mt-4">1</h3>
                        <h4 class="text-success ">ยอดขาย 10 คัน</h4>
                        <p>นาย อัคพงษ์ อัคพงษ์</p>
                        <p>ชื่อเล่น : มอส</p>
                        <p>แผนก : พนักงานขาย</p>
                    </div>
                    <div class="col-lg-4 mt-5">
                        <img class="bd-placeholder-img rounded-circle mt-5" style="width: 200px; height:200px;" src="img-tkn/img-em-1.jpg" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" role="img" focusable="false"></img>
                        <h3 class="text-success mt-4">3</h3>
                        <h4 class="text-success">ยอดขาย 5 คัน</h4>
                        <p>นาย อัคพงษ์ อัคพงษ์</p>
                        <p>ชื่อเล่น : มอส</p>
                        <p>แผนก : พนักงานขาย</p>
                    </div>
                </div>
            </div>

        <!-- พนักงานดีเด่น-->

        <!-- <div class="contaner-my"> -->
            <div class="container marketing mt-5 mb-5">
                <h3 class="text-center text-success mt-3">พนักงานขายยอดเยี่ยม</h3>
                <!-- <br> -->
                <div class="row">
                    <div class="col-lg-4">
                        <img class="bd-placeholder-img rounded-circle mt-5" style="width: 200px; height:200px;" src="img-tkn/img-em-1.jpg" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" role="img" focusable="false"></img>
                        <h3 class="text-success mt-4">1</h3>
                        <h4 class="text-success ">ยอดขาย :10คัน</h4>
                        <p>นาย อัคพงษ์ อัคพงษ์</p>
                        <p>ชื่อเล่น : มอส</p>
                        <p>แผนก : พนักงานขาย</p>
                    </div>
                    <div class="col-lg-4">
                        <img class="bd-placeholder-img rounded-circle mt-5" style="width: 200px; height:200px;" src="img-tkn/img-em-1.jpg" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" role="img" focusable="false"></img>
                        <h3 class="text-success mt-4">2</h3>
                        <h4 class="text-success ">ยอดขาย :10คัน</h4>
                        <p>นาย อัคพงษ์ อัคพงษ์</p>
                        <p>ชื่อเล่น : มอส</p>
                        <p>แผนก : พนักงานขาย</p>
                    </div>
                    <div class="col-lg-4">
                        <img class="bd-placeholder-img rounded-circle mt-5" style="width: 200px; height:200px;" src="img-tkn/img-em-1.jpg" aria-label="Placeholder: 140x140" preserveAspectRatio="xMidYMid slice" role="img" focusable="false"></img>
                        <h3 class="text-success mt-4">3</h3>
                        <h4 class="text-success ">ยอดขาย :10คัน</h4>
                        <p>นาย อัคพงษ์ อัคพงษ์</p>
                        <p>ชื่อเล่น : มอส</p>
                        <p>แผนก : พนักงานขาย</p>
                    </div>
                    
                </div>

                
            </div>
    </div>

    <footer>
                <div id="footer" class="footer">
                    <div class="row">
                        <a id="i" href="https://www.facebook.com/Toyotakaennakorn/?locale=th_TH" target="_blank"><i class="fa fa-facebook"></i></a>
                        <a id="i" href="https://page.line.me/laq5559n?openQrModal=true" target="_blank"><i class="bi bi-line"></i></i></a>
                        <a id="i" href="https://www.youtube.com/@toyotakaennakorn2114" target="_blank"><i class="fa fa-youtube"></i></a>
                        <a id="i" href="https://twitter.com/Tkaennakorn" target="_blnk"><i class="fa fa-twitter"></i></a>
                    </div>

                    <div class="row">
                        <ul>
                            <li><a href="#">พนักงานเข้าใหม่</a></li>
                            <li><a href="#">ปฏิทินกิจกรรม</a></li>
                            <li><a href="#">ข่าวสาร</a></li>
                            <li><a href="#">พนักงานดีเด่น</a></li>
                            <!-- <li><a href="#">Career</a></li> -->
                        </ul>
                    </div>

                    <div class="row">
                        <p>INFERNO Copyright © 2023 Toyota Kaennakorn Co., Ltd.</p>
                    </div>
                </div>
            </footer>



</body>

</html>