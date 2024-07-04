<?php session_start();

if (!isset($_SESSION['is_logged_in'])) {
	header('location: login.php');
}
?>
<!-- ถ้าไม่มี $_SESSION['is_logged_in'] (เก็บสถานะ login โดยจะเก็บตอนที่สมัครสมาชิกหรือ login แล้วเท่านั้น) ให้กลับไปยังหน้า login.php เพื่อทำการ login ก่อน -->


<!-- ลบข้อมูลuser-->
<?php

include("connection.php");

if (isset($_GET['deleteUsers'])) {
	$delete_id = $_GET['deleteUsers'];
	$deletestmt = $db->query("DELETE FROM users WHERE user_id = $delete_id");
	$deletestmt->execute();

	if ($deletestmt) {
		echo "
			<script>
			alert('ลบผู้ใช้เรียบร้อยแล้ว');
				location.replace('admin.php');
			</script>
			";
	} else {
		echo "
			<script>
			alert('ลบข้อมูลตารางชื่อแผนกไม่สำเร็จ');
			location.replace('admin.php');
			</script>
			";
	}
}
?>
<!-- ลบข้อมูลuser -->


<!-- ลบข้อมูลในตารางชื่อแผนก-->
<?php

include("connection.php");

if (isset($_GET['deletedepartment'])) {
	$delete_id = $_GET['deletedepartment'];
	$deletestmt = $db->query("DELETE FROM tbl_department WHERE id = $delete_id");
	$deletestmt->execute();

	if ($deletestmt) {
		echo "
			<script>
			alert('ลบข้อมูลตารางชื่อแผนกเรียบร้อยแล้ว');
				location.replace('admin.php');
			</script>
			";
	} else {
		echo "
			<script>
			alert('ลบข้อมูลตารางชื่อแผนกไม่สำเร็จ');
			location.replace('admin.php');
			</script>
			";
	}
}
?>
<!-- ลบข้อมูลในตารางชื่อแผนก -->


<!-- ลบข้อมูลในตารางเบอร์โทรโต๊ะ -->
<?php

include("connection.php");

if (isset($_GET['deletenumberdepartment'])) {
	$delete_id = $_GET['deletenumberdepartment'];
	$deletestmt = $db->query("DELETE FROM tbl_numberdepartment WHERE id = $delete_id");
	$deletestmt->execute();

	if ($deletestmt) {
		echo "
			<script>
			alert('ลบข้อมูลตารางเบอร์โทรโต๊ะเรียบร้อยแล้ว');
				location.replace('admin.php');
			</script>
			";
	} else {
		echo "
			<script>
			alert('ลบข้อมูลตารางเบอร์โทรโต๊ะไม่สำเร็จ');
			location.replace('admin.php');
			</script>
			";
	}
}
?>
<!-- ลบข้อมูลในตารางเบอร์โทรโต๊ะ -->

<!-- ลบข้อมูลในตารางพนักงานขายยอดเยี่ยม -->
<?php

include("connection.php");

if (isset($_GET['deleteoutstandingemployeesales'])) {
	$delete_id = $_GET['deleteoutstandingemployeesales'];
	$deletestmt = $db->query("DELETE FROM tbl_outstandingemployeesales WHERE id = $delete_id");
	$deletestmt->execute();

	if ($deletestmt) {
		echo "
			<script>
			alert('ลบข้อมูลพนักงานขายเรียบร้อยแล้ว');
				location.replace('admin.php');
			</script>
			";
	} else {
		echo "
			<script>
			alert('ลบข้อมูลพนักงานขายไม่สำเร็จ');
			location.replace('admin.php');
			</script>
			";
	}
}
?>
<!-- ลบข้อมูลในตารางพนักงานขายยยอดเยี่ยม -->


<!-- ลบข้อมูลในตารางพนักงานดีเด่น -->
<?php

include("connection.php");

if (isset($_GET['deleteoutstandingemployee'])) {
	$delete_id = $_GET['deleteoutstandingemployee'];
	$deletestmt = $db->query("DELETE FROM tbl_outstandingemployee WHERE id = $delete_id");
	$deletestmt->execute();

	if ($deletestmt) {
		echo "
			<script>
			alert('ลบข้อมูลเรียบร้อยแล้ว');
				location.replace('admin.php');
			</script>
			";
	} else {
		echo "
			<script>
			alert('ลบข้อมูลไม่สำเร็จ');
			location.replace('admin.php');
			</script>
			";
	}
}
?>
<!-- ลบข้อมูลในตารางพนักงานดีเด่น -->


<!-- ลบข้อมูลในตารางข่าว -->

<?php

include("connection.php");

if (isset($_GET['deletenews'])) {
	$delete_id = $_GET['deletenews'];
	$deletestmt = $db->query("DELETE FROM tbl_datatext WHERE id_text = $delete_id");
	$deletestmt->execute();

	if ($deletestmt) {
		echo "
   <script>
   alert('ลบข้อมูลเรียบร้อยแล้ว');
   location.replace('admin.php');
   </script>
   ";
	} else {
		echo "
    <script>
    alert('ลบข้อมูลไม่สำเร็จ');
    location.replace('admin.php');
    </script>
    ";
	}
}
?>
<!-- ลบข้อมูลในตารางข่าว -->


<!-- ลบข้อมูลในตารางปฏิทินกิจกรรม -->

<?php

include("connection.php");

if (isset($_GET['deletecalender'])) {
	$delete_id = $_GET['deletecalender'];
	$deletestmt = $db->query("DELETE FROM tbl_event_calender WHERE id_calender = $delete_id");
	$deletestmt->execute();

	if ($deletestmt) {
		echo "
   <script>
   alert('ลบข้อมูลเรียบร้อยแล้ว');
   location.replace('admin.php');
   </script>
   ";
	} else {
		echo "
    <script>
    alert('ลบข้อมูลไม่สำเร็จ');
    location.replace('admin.php');
    </script>
    ";
	}
}
?>
<!-- ลบข้อมูลในตารางปฏิทินกิจกรรม -->


<!-- ลบข้อมูลในตารางพนักงานใหม่ -->
<?php

include("connection.php");

if (isset($_GET['deleteemployee'])) {
	$delete_id = $_GET['deleteemployee'];
	$deletestmt = $db->query("DELETE FROM tbl_employeenews WHERE id = $delete_id");
	$deletestmt->execute();

	if ($deletestmt) {
		echo "
			<script>
			alert('ลบข้อมูลเรียบร้อยแล้ว');
				location.replace('admin.php');
			</script>
			";
	} else {
		echo "
			<script>
			alert('ลบข้อมูลไม่สำเร็จ');
			location.replace('admin.php');
			</script>
			";
	}
}
?>
<!-- ลบข้อมูลในตารางพนักงานใหม่ -->


<!-- ลบข้อมูลในตารางพนักงานลาออก -->
<?php

include("connection.php");

if (isset($_GET['deleteemployeeresign'])) {
	$delete_id = $_GET['deleteemployeeresign'];
	$deletestmt = $db->query("DELETE FROM tbl_employeeresign WHERE id = $delete_id");
	$deletestmt->execute();

	if ($deletestmt) {
		echo "
			<script>
			alert('ลบข้อมูลเรียบร้อยแล้ว');
				location.replace('admin.php');
			</script>
			";
	} else {
		echo "
			<script>
			alert('ลบข้อมูลไม่สำเร็จ');
			location.replace('admin.php');
			</script>
			";
	}
}
?>
<!-- ลบข้อมูลในตารางพนักงานลาออก -->


<?php include("connection.php"); ?>

<!DOCTYPE html>
<html lang="en">

<head>
	<title>จัดการข่าว</title>

	<!-- Meta -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<meta name="description" content="Portal - Bootstrap 5 Admin Dashboard Template For Developers">
	<meta name="author" content="Xiaoying Riley at 3rd Wave Media">
	<link rel="shortcut icon" href="favicon.ico">

	<!-- FontAwesome JS-->
	<script defer src="assets/plugins/fontawesome/js/all.min.js"></script>

	<!-- App CSS -->
	<link id="theme-style" rel="stylesheet" href="assets/css/portal.css">

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">

	<link href="https://fonts.googleapis.com/css2?family=Kanit:wght@300&family=Noto+Sans+Thai&display=swap" rel="stylesheet">


	<!-- Javascript -->
	<script src="assets/plugins/popper.min.js"></script>
	<script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>


	<!-- Page Specific JS -->
	<script src="assets/js/app.js"></script>

	<script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>



	<style>
		/* .sidepanel-inner {
			background-color: #041122;
		} */
		body {
			font-family: 'Kanit', sans-serif;
			font-family: 'Noto Sans Thai', sans-serif;

		}

		.app {
			background-color: #F5F5F5;
		}

		#btn {
			background-color: #A4D0A4;
			/* background-color: #96CEB4; */
			/* background-color: #FFD95A; */
			/* background-color: #FF6969; */
			/* background-color: #FF8080; */
			/* background-color: #A8D1D1; */
			/* background-color: #FF8C8C; */
		}

		#edit {
			/* background-color: #FFD95A; */
			background-color: #FFEAA5;

		}

		#delete {
			background-color: #FF6969;


		}

		#reset {
			background-color: #A8D1D1;
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

		 /* ขนาดModal */
		 .modal-dialog {
            max-width: 600px;
            width: 100%;
        }
	</style>

</head>

<body class="app">

	<header class="app-header fixed-top">
		<div class="app-header-inner">

		</div>

		<!-- navbarleft -->
		<div id="app-sidepanel" class="app-sidepanel">
			<div id="sidepanel-drop" class="sidepanel-drop"></div>
			<div class="sidepanel-inner d-flex flex-column">
				<a href="#" id="sidepanel-close" class="sidepanel-close d-xl-none">&times;</a>
				<div class="app-branding mb-4" style="text-align: lafe;">
					<img src="img-tkn/logo-tkn-new.png" style="width: 150px;" class="fixed">
				</div>

				<nav id="app-nav-main" class="app-nav app-nav-main flex-grow-1">
					<ul class="app-menu list-unstyled accordion" id="menu-accordion">


						<li class="nav-item">
							<?php
							$permissionList = json_decode($_SESSION['permission']);
							$filterPermission = array_filter($permissionList, function ($item) {
								return $item->permissionTap == "#permission.php" && $item->permissionStatus == 1;
							});

							if (count($filterPermission) !== 0) {
							?>

								<a class="nav-link" href="permission.php">
									<span class="nav-icon">
										<svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" class="bi bi-person-check-fill" viewBox="0 0 16 16">
											<path fill-rule="evenodd" d="M15.854 5.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 0 1 .708-.708L12.5 7.793l2.646-2.647a.5.5 0 0 1 .708 0" />
											<path fill-rule="evenodd" d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6" />
										</svg>
									</span>
									<span class="nav-link-text">สิทธิ์การเข้าใช้งาน</span>
								</a>
							<?php } ?>
						</li>



						<li class="nav-item">
							<?php
							$permissionList = json_decode($_SESSION['permission']);
							$filterUsers = array_filter($permissionList, function ($item) {
								return $item->permissionTap == "#table-users" && $item->permissionStatus == 1;
							});

							if (count($filterUsers) !== 0) {
							?>
								<a class="nav-link" href="Users.php">
									<span class="nav-icon">
										<svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" class="bi bi-person-add" viewBox="0 0 16 16">
											<path fill-rule="evenodd" d="M12 1H4a1 1 0 0 0-1 1v10.755S4 11 8 11s5 1.755 5 1.755V2a1 1 0 0 0-1-1zM4 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H4z" />
											<path fill-rule="evenodd" d="M8 10a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />

										</svg>
									</span>
									<span class="nav-link-text">ผู้ใช้งานระบบ</span>
								</a>
							<?php } ?>
						</li>


						<li class="nav-item">
							<?php
							$permissionList = json_decode($_SESSION['permission']);
							$filterRegister = array_filter($permissionList, function ($item) {
								return $item->permissionTap == "#register.php" && $item->permissionStatus == 1;
							});

							if (count($filterRegister) !== 0) {
							?>
								<a class="nav-link" href="register.php">
									<span class="nav-icon">
										<svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" class="bi bi-person-plus" viewBox="0 0 16 16">
											<path fill-rule="evenodd" d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6m2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0m4 8c0 1-1 1-1 1H1s-1 0-1-1 1-4 6-4 6 3 6 4m-1-.004c-.001-.246-.154-.986-.832-1.664C9.516 10.68 8.289 10 6 10s-3.516.68-4.168 1.332c-.678.678-.83 1.418-.832 1.664z" />
											<path fill-rule="evenodd" d="M13.5 5a.5.5 0 0 1 .5.5V7h1.5a.5.5 0 0 1 0 1H14v1.5a.5.5 0 0 1-1 0V8h-1.5a.5.5 0 0 1 0-1H13V5.5a.5.5 0 0 1 .5-.5" />
										</svg>
									</span>
									<span class="nav-link-text">สมัครสมาชิก</span>
								</a>
						</li>
					<?php } ?>

					<li class="nav-item">
						<?php
						$permissionList = json_decode($_SESSION['permission']);
						$filterEmployeewelfare = array_filter($permissionList, function ($item) {
							return $item->permissionTap == "#Tbl_Employeewelfare.php" && $item->permissionStatus == 1;
						});

						if (count($filterEmployeewelfare) !== 0) {
						?>
							<a class="nav-link" href="Tbl_Employeewelfare.php">
								<span class="nav-icon">
									<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-journal-text" viewBox="0 0 16 16">
										<path d="M5 10.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5m0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5m0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5m0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5" />
										<path d="M3 0h10a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-1h1v1a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1v1H1V2a2 2 0 0 1 2-2" />
										<path d="M1 5v-.5a.5.5 0 0 1 1 0V5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1zm0 3v-.5a.5.5 0 0 1 1 0V8h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1zm0 3v-.5a.5.5 0 0 1 1 0v.5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1z" />
									</svg>
								</span>
								<span class="nav-link-text">สวัสดิการพนักงาน</span>
							</a>
					</li>
				<?php } ?>



				<li class="nav-item">
					<a class="nav-link" href="admin.php">
						<span class="nav-icon">
							<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-layout-text-sidebar-reverse" viewBox="0 0 16 16">
								<path d="M12.5 3a.5.5 0 0 1 0 1h-5a.5.5 0 0 1 0-1zm0 3a.5.5 0 0 1 0 1h-5a.5.5 0 0 1 0-1zm.5 3.5a.5.5 0 0 0-.5-.5h-5a.5.5 0 0 0 0 1h5a.5.5 0 0 0 .5-.5m-.5 2.5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1 0-1z" />
								<path d="M16 2a2 2 0 0 0-2-2H2a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2zM4 1v14H2a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1zm1 0h9a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H5z" />
							</svg>
						</span>
						<span class="nav-link-text">ตารางทั้งหมด</span>
					</a>
				</li>

				<!-- <li class="nav-item has-submenu">
							<a class="nav-link submenu-toggle" href="#" data-bs-toggle="collapse" data-bs-target="#submenu-2" aria-expanded="false" aria-controls="submenu-2">
								<span class="nav-icon">
									<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-columns-gap" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
										<path fill-rule="evenodd" d="M6 1H1v3h5V1zM1 0a1 1 0 0 0-1 1v3a1 1 0 0 0 1 1h5a1 1 0 0 0 1-1V1a1 1 0 0 0-1-1H1zm14 12h-5v3h5v-3zm-5-1a1 1 0 0 0-1 1v3a1 1 0 0 0 1 1h5a1 1 0 0 0 1-1v-3a1 1 0 0 0-1-1h-5zM6 8H1v7h5V8zM1 7a1 1 0 0 0-1 1v7a1 1 0 0 0 1 1h5a1 1 0 0 0 1-1V8a1 1 0 0 0-1-1H1zm14-6h-5v7h5V1zm-5-1a1 1 0 0 0-1 1v7a1 1 0 0 0 1 1h5a1 1 0 0 0 1-1V1a1 1 0 0 0-1-1h-5z" />
									</svg>
								</span>
								<span class="nav-link-text">External</span>
								<span class="submenu-arrow">
									<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-chevron-down" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
										<path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708z" />
									</svg>
								</span>
							</a>
							<div id="submenu-2" class="collapse submenu submenu-2" data-bs-parent="#menu-accordion">
								<ul class="submenu-list list-unstyled">
									<li class="submenu-item"><a class="submenu-link" href="#">Login</a></li>
									<li class="submenu-item"><a class="submenu-link" href="signup.html">Signup</a></li>
									<li class="submenu-item"><a class="submenu-link" href="reset-password.html">Reset password</a></li>
									<li class="submenu-item"><a class="submenu-link" href="404.html">404 page</a></li>
								</ul>
							</div>
						</li> -->


				</nav>
				<div class="app-sidepanel-footer">
					<nav class="app-nav app-nav-footer">
						<ul class="app-menu footer-menu list-unstyled">
							<li class="nav-item">
								<a class="nav-link" href="logout.php">
									<span class="nav-link-text"><i class="fas fa-sign-out-alt"></i> ออกจากระบบ</span>
								</a>
							</li>
						</ul>
					</nav>
				</div>
			</div>
		</div>
	</header>


	<!-- ส่วนของตาราง -->
	<div class="app-wrapper">
		<div class="app-content pt-3 p-md-3 p-lg-4">
			<div class="container-xl">

				<div class="row g-3 mb-4 align-items-center justify-content-between">
					<div class="col-auto">

					</div><br>
					<h1 class="app-page-title mb-0">Table</h1>
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<div class="card mt-5 text-center">
									<div class="card-body">
										<h4>Users : <?php echo $_SESSION['username']; ?></h4>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div> <!--//row-->




				<!-- หัวข้อตาราง -->
				<nav id="orders-table-tab" class="orders-table-tab app-nav-tabs nav shadow-sm flex-column flex-sm-row mb-4">
					<?php

					$permissionList = json_decode($_SESSION['permission']);
					$filterTableNew = array_filter($permissionList, function ($item) {
						return $item->permissionTap == "#table-news" && $item->permissionStatus == 1;
					});

					$filterEmployeeNews = array_filter($permissionList, function ($item) {
						return $item->permissionTap == "#table-employeenews" && $item->permissionStatus == 1;
					});

					$filterEmployeeResign = array_filter($permissionList, function ($item) {
						return $item->permissionTap == "#table-employeeresign" && $item->permissionStatus == 1;
					});

					$filterOutstandingEmployee = array_filter($permissionList, function ($item) {
						return $item->permissionTap == "#tbl-outstandingemployee" && $item->permissionStatus == 1;
					});

					$filterOutstandingEmployeeSales = array_filter($permissionList, function ($item) {
						return $item->permissionTap == "#tbl-outstandingsales" && $item->permissionStatus == 1;
					});

					$filterDepartment = array_filter($permissionList, function ($item) {
						return $item->permissionTap == "#table-department" && $item->permissionStatus == 1;
					});

					$filterNumberDepartment = array_filter($permissionList, function ($item) {
						return $item->permissionTap == "#table-numberdepartment" && $item->permissionStatus == 1;
					});

					$filterUsers = array_filter($permissionList, function ($item) {
						return $item->permissionTap == "#table-users" && $item->permissionStatus == 1;
					});

					// $findByTab = var_dump($results);

					if (count($filterTableNew) !== 0) {
						echo '<a class="flex-sm-fill text-sm-center nav-link active" id="orders-all-tab" data-bs-toggle="tab" href="#table-news" role="tab" aria-controls="orders-all" aria-selected="true">ข่าวสาร</a>';
					}

					if (count($filterEmployeeNews) !== 0) {
						echo '<a class="flex-sm-fill text-sm-center nav-link " id="orders-paid-tab" data-bs-toggle="tab" href="#table-employeenews" role="tab" aria-controls="orders-paid" aria-selected="false">พนักงานเข้าใหม่</a>';
					}

					if (count($filterEmployeeResign) !== 0) {
						echo '<a class="flex-sm-fill text-sm-center nav-link " id="orders-paid-tab" data-bs-toggle="tab" href="#table-employeeresign" role="tab" aria-controls="orders-paid" aria-selected="false">พนักงานลาออก</a>';
					}

					if (count($filterOutstandingEmployee) !== 0) {
						echo '<a class="flex-sm-fill text-sm-center nav-link " id="orders-paid-tab" data-bs-toggle="tab" href="#tbl-outstandingemployee" role="tab" aria-controls="orders-paid" aria-selected="false">ตารางพนักงานดีเด่น</a>';
					}

					if (count($filterOutstandingEmployeeSales) !== 0) {
						echo '<a class="flex-sm-fill text-sm-center nav-link " id="orders-paid-tab" data-bs-toggle="tab" href="#tbl-outstandingsales" role="tab" aria-controls="orders-paid" aria-selected="false">ตารางพนักงานขายยอดเยี่ยม</a>';
					}

					if (count($filterDepartment) !== 0) {
						echo '<a class="flex-sm-fill text-sm-center nav-link " id="orders-paid-tab" data-bs-toggle="tab" href="#table-department" role="tab" aria-controls="orders-paid" aria-selected="false">ตารางแผนก</a>';
					}

					if (count($filterNumberDepartment) !== 0) {
						echo '<a class="flex-sm-fill text-sm-center nav-link " id="orders-paid-tab" data-bs-toggle="tab" href="#table-numberdepartment" role="tab" aria-controls="orders-paid" aria-selected="false">ตารางเบอร์โทรแผนก</a>';
					}

					// if (count($filterUsers) !== 0) {
					// 	echo '<a class="flex-sm-fill text-sm-center nav-link " id="orders-paid-tab" data-bs-toggle="tab" href="#table-users" role="tab" aria-controls="orders-paid" aria-selected="false">ตาราง Uers</a>';
					// }

					?>
				</nav>
				<!-- หัวข้อตาราง -->


				<!-- ตารางข่าว -->
				<div class="tab-content" id="orders-table-tab-content">
					<div class="tab-pane fade show active" id="table-news" role="tabpanel" aria-labelledby="orders-all-tab">
						<?php
						$permissionList = json_decode($_SESSION['permission']);
						$filterEmployeeNews = array_filter($permissionList, function ($item) {
							return $item->permissionTap == "#table-news" && $item->permissionStatus == 1;
						});

						if (count($filterTableNew) !== 0) {
						?>
							<!-- ปุ่มเพิ่มข้อมูล -->
							<div class="pagination justify-content-end my-4">
								<a id="btn" class="btn btn-sm text-white" data-bs-toggle="modal" data-bs-target="#newsModal">+ เพิ่มข้อมูลข่าวสาร</a>
							</div>
							<div class="app-card app-card-orders-table shadow-sm mb-5 px-3">
								<div class="app-card-body">
									<div class="table-responsive">
										<table class="table app-table-hover mb-0 text-left">
											<thead>
												<tr>
													<th width="60px" class="cell">ลำดับที่</th>
													<th class="cell">รูปภาพ</th>
													<th width="150px" class="cell">ชื่อกิจกรรม</th>
													<th width="190px" class="cell">รายละเอียดการ์ดกิจกรรม</th>
													<th class="cell">รายละเอียดกิจกรรมทั้งหมด</th>
													<!-- <th class="cell">วัน/เดือน/ปี</th> -->
													<th class="cell">แก้ไข</th>
													<th class="cell">ลบ</th>
												</tr>
											</thead>
											<tbody>
												<?php
												$stmt = $db->query("SELECT tbl_datatext.id_text,tbl_datatext.title_news ,tbl_datatext.details_news,tbl_datatext.details_newstotal,tbl_data.images,tbl_data.data_id FROM tbl_datatext LEFT JOIN tbl_data ON tbl_datatext.id_text = tbl_data.data_id group BY tbl_data.data_id");
												$stmt->execute();
												$row = $stmt->fetchAll();

												if (!$row) {
													echo "<tr><td colspan='6' class='text-center'>ไม่มีข้อมูลในฐานข้อมูล</td></tr>";
												} else {
													foreach ($row as $rows) {
												?>
														<tr>
															<td class="cell"><?= $rows['id_text']; ?></td>
															<td class="cell"><img width="80px" src="uploads_epy/<?= $rows['images']; ?>" class="rounded"></td>
															<td class="cell"><?= $rows['title_news']; ?></td>
															<td class="cell"><?= $rows['details_news']; ?></td>
															<td class="cell"><?= $rows['details_newstotal']; ?></td>
															<td class="cell"><a id="edit" href="FormEdit_News.php?id=<?= $rows['id_text']; ?>" class="btn btn-sm text-white"><i class="fas fa-edit fa-lg"></i></a></td>
															<td class="cell"><a id="delete" href="?deletenews=<?= $rows['id_text']; ?>" class="btn btn-sm text-white" onclick="return confirm('ต้องการลบหรือไม่');"><i class="fas fa-trash-alt fa-lg"></i></a></td>
													<?php
													}
												}
													?>

											</tbody>
										</table>
									</div><!--//table-responsive-->
								</div><!--//app-card-body-->

							</div><!--//app-card-->
						<?php
						} ?>
					</div>
					<!-- ตารางข่าว -->



					<!-- โมเดลเพิ่มข้อมูลข่าว -->
					<div class="modal fade" id="newsModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-header">
									<h1 class="modal-title fs-5" id="exampleModalLabel">เพิ่มข้อมูลข่าวสาร</h1>
									<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
								</div>
								<div class="modal-body">
									<form action="insert.php" method="POST" enctype="multipart/form-data">
										<div class="mb-3">
											<label for="images_news" class="form-label">อัพโหลดรูปภาพ </label>
											<input id="imagesInput" type="file" class="form-control" placeholder="" name="files[]" multiple required>
											<br>
											<!-- พรีวิวรูปภาพ -->
											<div id="previewContainer" class="preview-container rounded"></div>

										</div>
										<div class="mb-3">
											<label for="title_news" class="form-label">ชื่อกิจกรรม</label>
											<input type="text" class="form-control" placeholder="" name="title_news">
										</div>
										<div class="mb-3">
											<label for="details_news" class="form-label">รายละเอียดการ์ดกิจกรรม</label>
											<textarea class="form-control" placeholder="" name="details_news" rows="3"></textarea>
										</div>

										<div class="mb-4">
											<label for="details_newstotal" class="form-label">รายละเอียดทั้งหมด</label>
											<textarea class="form-control" placeholder="" name="details_newstotal" rows="3"></textarea>
										</div>



										<div class="modal-footer">
											<button type="button" class="btn btn-sm btn-secondary" data-bs-dismiss="modal">กลับ</button>
											<button id="btn" type="submit" name='submit' class="btn btn-sm text-white">บันทึก</button>
										</div>
									</form>
								</div>

							</div>
						</div>
					</div>
					<!-- โมเดลเพิ่มข้อมูลข่าว -->

					<!-- พรีวิวรูปภาพตอนเพิ่มข้อมูลข่าว -->
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



					<!-- ตารางพนักงานใหม่ -->

					<div class="tab-pane fade" id="table-employeenews" role="tabpanel" aria-labelledby="orders-paid-tab">
						<?php
						$permissionList = json_decode($_SESSION['permission']);
						$filterEmployeeNews = array_filter($permissionList, function ($item) {
							return $item->permissionTap == "#table-employeenews" && $item->permissionStatus == 1;
						});

						if (count($filterEmployeeNews) !== 0) {
						?>
							<!-- ปุ่มเพิ่มข้อมูล -->
							<div class=" pagination justify-content-end my-4">
								<button id="btn" type="button" class="btn btn-sm text-white" data-bs-toggle="modal" data-bs-target="#employeeModal">+ เพิ่มข้อมูล</button>
							</div>
							<div class="app-card app-card-orders-table mb-5 px-3">
								<div class="app-card-body">
									<div class="table-responsive">
										<table class="table mb-0 text-left">
											<thead>
												<tr>
													<th class="cell">ลำดับที่</th>
													<th class="cell">รหัสพนักงาน</th>
													<th class="cell">รูปภาพ</th>
													<th class="cell">ชื่อ-นามสกุล</th>
													<th class="cell">รายละเอียด</th>
													<th class="cell">ตำแหน่ง / แผนก</th>
													<th class="cell">วัน/เดือน/ปี</th>
													<th class="cell">แก้ไข</th>
													<th class="cell">ลบ</th>
												</tr>
											</thead>
											<tbody>
												<?php
												$stmt = $db->query("SELECT * FROM tbl_employeenews");
												$stmt->execute();
												$row = $stmt->fetchAll();

												if (!$row) {
													echo "<tr><td colspan='6' class='text-center'>ไม่มีข้อมูลในฐานข้อมูล</td></tr>";
												} else {
													foreach ($row as $rows) {
												?>
														<tr>
															<td class="cell"><?= $rows['id']; ?></td>
															<td class="cell"><?= $rows['id_employee'] ?></td>
															<td class="cell"><img width="80px" src="uploads_img_employee/<?= $rows['img_employeenews']; ?>" class="rounded"></td>
															<td class="cell"><?= $rows['title_employeenews']; ?></td>
															<td class="cell"><?= $rows['details_employeenews'] ?></td>
															<td class="cell"><?= $rows['position_employeenews']; ?></td>
															<td class="cell"><?= $rows['time']; ?></td>
															<td class="cell"><a id="edit" href="FormEdit_employeenews.php?id=<?= $rows['id']; ?>" class="btn btn-sm text-white"><i class="fas fa-edit fa-lg"></i></a></td>
															<td class="cell"><a id="delete" href="?deleteemployee=<?= $rows['id']; ?>" class="btn btn-sm text-white" onclick="return confirm('ต้องการลบหรือไม่');"><i class="fas fa-trash-alt fa-lg"></i></a></td>
														</tr>
												<?php
													}
												}
												?>
											</tbody>
										</table>
									</div><!--//table-responsive-->
								</div><!--//app-card-body-->
							</div><!--//app-card-->
						<?php
						} ?>
					</div>

					<!-- ตารางพนักงานใหม่ -->


					<!-- โมเดลเพิ่มข้อมูลพนักงงานใหม่ -->
					<div class="modal fade" id="employeeModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-header">
									<h1 class="modal-title fs-5" id="exampleModalLabel">เพิ่มข้อมูลพนักงานใหม่</h1>
									<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
								</div>

								<div class="modal-body">
									<form action="insert_employee.php" method="POST" enctype="multipart/form-data">
										<div class="mb-3">
											<label for="img_employeenews" class="form-label">อัพโหลดรูปภาพ </label>
											<input type="file" class="form-control" placeholder="รูปภาพ" id="imgInput" name="img_employeenews" required><br>
											<img width="100px" id="PreviewImg" alt="" class="rounded">
										</div>

										<div class="mb-3">
											<label for="id_employee" class="form-label">รหัสพนักงาน </label>
											<input type="text" class="form-control" placeholder="" name="id_employee">
										</div>

										<div class="mb-3">
											<label for="title_employeenews" class="form-label">ชื่อ-นามสกุล </label>
											<input type="text" class="form-control " placeholder="" name="title_employeenews">
										</div>

										<div class="mb-3">
											<label for="details_employeenews" class="form-label">รายละเอียด </label>
											<input type="text" class="form-control " placeholder="" name="details_employeenews">
										</div>

										<div class="mb-4">
											<label for="position_employeenews" class="form-label">ตำแหน่ง / แผนก </label>
											<input type="text" class="form-control " placeholder="" name="position_employeenews">
										</div>

										<div class="modal-footer">
											<button type="button" class="btn btn-sm btn-secondary" data-bs-dismiss="modal">กลับ</button>
											<button id="btn" type="submit" name='submit' class="btn btn-sm text-white">บันทึก</button>
										</div>
									</form>
								</div>

							</div>
						</div>
					</div>
					<!-- โมเดลเพิ่มข้อมูลพนักงงานใหม่ -->

					<!-- พรีวิวรูปภาพก่อนเพิ่มข้อมูลพนักงานใหม่-->
					<script>
						let imgInput = document.getElementById('imgInput');
						let PreviewImg = document.getElementById('PreviewImg');

						imgInput.onchange = evt => {
							const [file] = imgInput.files;
							if (file) {
								PreviewImg.src = URL.createObjectURL(file);
							}
						}
					</script>
					<!-- พรีวิวรูปภาพก่อนเพิ่มข้อมูลพนักงานใหม่-->



					<!-- ตารางพนักงานลาออก -->
					<div class="tab-pane fade" id="table-employeeresign" role="tabpanel" aria-labelledby="orders-pending-tab">
						<?php
						$permissionList = json_decode($_SESSION['permission']);
						$filterEmployeeResign = array_filter($permissionList, function ($item) {
							return $item->permissionTap == "#table-employeeresign" && $item->permissionStatus == 1;
						});

						if (count($filterEmployeeResign) !== 0) {
						?>
							<div class="pagination justify-content-end my-4">
								<a id="btn" class="btn btn-sm text-white" data-bs-toggle="modal" data-bs-target="#employeeresignModal">+ เพิ่มข้อมูล</a>
							</div>
							<div class="app-card app-card-orders-table mb-5 px-3">
								<div class="app-card-body">
									<div class="table-responsive">
										<table class="table mb-0 text-left">
											<thead>
												<tr>
													<th class="cell">ลำดับที่</th>
													<th class="cell">รหัสพนักงาน</th>
													<th class="cell">รูปภาพ</th>
													<th class="cell">ชื่อ-นามสกุล</th>
													<th class="cell">รายละเอียด</th>
													<th class="cell">ตำแหน่ง</th>
													<th class="cell">วัน/เดือน/ปี</th>
													<th class="cell">แก้ไข</th>
													<th class="cell">ลบ</th>
												</tr>
											</thead>
											<tbody>
												<?php
												$stmt = $db->query("SELECT * FROM tbl_employeeresign");
												$stmt->execute();
												$row = $stmt->fetchAll();

												if (!$row) {
													echo "<tr><td colspan='6' class='text-center'>ไม่มีข้อมูลในฐานข้อมูล</td></tr>";
												} else {
													foreach ($row as $rows) {
												?>
														<tr>
															<td class="cell"><?php echo $rows['id']; ?></td>
															<td class="cell"><?php echo $rows['id_employeeresign']; ?></td>
															<td class="cell"><img width="80px" src="uploads_img_employeeresign/<?= $rows['img_employeeresign']; ?>" class="rounded"></td>
															<td class="cell"><?php echo $rows['title_employeeresign']; ?></td>
															<td class="cell"><?php echo $rows['details_employeeresign']; ?></td>
															<td class="cell"><?php echo $rows['position_employeeresign']; ?></td>
															<td class="cell"><?php echo $rows['time']; ?></td>
															<td class="cell"><a id="edit" href="FormEdit_employeeresign.php?id=<?= $rows['id']; ?>" class="btn btn-sm text-white"><i class="fas fa-edit fa-lg"></i></a></td>
															<td class="cell"><a id="delete" href="?deleteemployeeresign=<?= $rows['id']; ?>" class="btn btn-sm text-white" onclick="return confirm('ต้องการลบหรือไม่');"><i class="fas fa-trash-alt fa-lg"></i></a></td>
														</tr>
												<?php
													}
												}
												?>
											</tbody>
										</table>
									</div><!--//table-responsive-->
								</div><!--//app-card-body-->
							</div><!--//app-card-->
						<?php
						} ?>
					</div><!--//tab-pane-->



					<!-- โมเดลเพิ่มข้อมูลพนักงงานลาออก-->

					<div class="modal fade" id="employeeresignModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-header">
									<h1 class="modal-title fs-5" id="exampleModalLabel">เพิ่มข้อมูลพนักงานลาออก</h1>
									<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
								</div>

								<div class="modal-body">
									<form action="insert_employeeresign.php" method="POST" enctype="multipart/form-data">
										<div class="mb-3">
											<label for="img_employeeresign" class="form-label">อัพโหลดรูปภาพ</label>
											<input type="file" class="form-control" placeholder="" id="imgInputresign" name="img_employeeresign"><br>
											<img width="100px" id="PreviewImgresign" alt="" class="rounded">
										</div>

										<div class="mb-3">
											<label for="id_employeeresign" class="form-label">รหัสพนักงาน</label>
											<input type="text" class="form-control" placeholder="" name="id_employeeresign">
										</div>

										<div class="mb-3">
											<label for="title_employeeresign" class="form-label">ชื่อ-นามสกุล</label>
											<input type="text" class="form-control " placeholder="" name="title_employeeresign">
										</div>

										<div class="mb-3">
											<label for="details_employeeresign" class="form-label">รายละเอียด</label>
											<input type="text" class="form-control " placeholder="" name="details_employeeresign">
										</div>

										<div class="mb-4">
											<label for="position_employeeresign" class="form-label">ตำแหน่ง</label>
											<input type="text" class="form-control " placeholder="" name="position_employeeresign">
										</div>

										<div class="modal-footer">
											<button type="button" class="btn btn-sm btn-secondary" data-bs-dismiss="modal">กลับ</button>
											<button id="btn" type="submit" name='submit' class="btn btn-sm text-white">บันทึก</button>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>

					<!-- โมเดลเพิ่มข้อมูลพนักงงานลาออก -->

					<!-- พรีวิวรูปภาพก่อนเพิ่มข้อมูลพนักงานลาออก-->
					<script>
						let imgInputresign = document.getElementById('imgInputresign');
						let PreviewImgresign = document.getElementById('PreviewImgresign');

						imgInputresign.onchange = evt => {
							const [file] = imgInputresign.files;
							if (file) {
								PreviewImgresign.src = URL.createObjectURL(file);
							}
						}
					</script>
					<!-- พรีวิวรูปภาพก่อนเพิ่มข้อมูลพนักงานลาออก -->




					<!-- ตารางพนักงานดีเด่น -->

					<div class="tab-pane fade" id="tbl-outstandingemployee" role="tabpanel" aria-labelledby="orders-outstanding-tab">
						<?php
						$permissionList = json_decode($_SESSION['permission']);
						$filterOutstandingEmployee = array_filter($permissionList, function ($item) {
							return $item->permissionTap == "#tbl-outstandingemployee" && $item->permissionStatus == 1;
						});

						if (count($filterOutstandingEmployee) !== 0) {
						?>
							<!-- ปุ่มเพิ่มข้อมูล -->
							<div class="pagination justify-content-end my-4">
								<a id="btn" class="btn btn-sm text-white " data-bs-toggle="modal" data-bs-target="#outstandingemployeeModal">+ เพิ่มข้อมูล</a>
							</div>
							<div class="app-card app-card-orders-table shadow-sm mb-5 px-3">
								<div class="app-card-body">
									<div class="table-responsive">
										<table class="table app-table-hover mb-0 text-left">
											<thead>
												<tr>
													<th class="cell">ลำดับที่</th>
													<th class="cell">รูปภาพ</th>
													<th class="cell">งานบริการ</th>
													<th width="150px" class="cell">ชื่อ-นาสกุล</th>
													<th width="190px" class="cell">รายละเอียด</th>
													<th class="cell">ตำแหน่ง</th>
													<th class="cell">วัน/เดือน/ปี</th>
													<th class="cell">แก้ไข</th>
													<th class="cell">ลบ</th>
												</tr>
											</thead>
											<tbody>
												<?php
												$stmt = $db->query("SELECT * FROM tbl_outstandingemployee");
												$stmt->execute();
												$row = $stmt->fetchAll();

												if (!$row) {
													echo "<tr><td colspan='6' class='text-center'>ไม่มีข้อมูลในฐานข้อมูล</td></tr>";
												} else {
													foreach ($row as $rows) {
												?>
														<tr>
															<td class="cell"><?= $rows['id']; ?></td>
															<td class="cell"><img width="80px" src="upload_img_employeeoutstanding/<?= $rows['img_employee']; ?>" class="rounded"></td>
															<td class="cell"><?= $rows['services']; ?></td>
															<td class="cell"><?= $rows['title_employee'] ?></td>
															<td class="cell"><?= $rows['details_employee'] ?></td>
															<td class="cell"><?= $rows['position'] ?></td>
															<td class="cell"><?= $rows['time'] ?></td>
															<td class="cell"><a id="edit" href="FormEdit_outstandingemployee.php?id=<?= $rows['id']; ?>" class="btn btn-sm text-white"><i class="fas fa-edit fa-lg"></i></a></td>
															<td class="cell"><a id="delete" href="?deleteoutstandingemployee=<?= $rows['id']; ?>" class="btn btn-sm text-white" onclick="return confirm('ต้องการลบหรือไม่');"><i class="fas fa-trash-alt fa-lg"></i></a></td>
														</tr>
												<?php
													}
												}
												?>
											</tbody>
										</table>
									</div><!--//table-responsive-->
								</div><!--//app-card-body-->
							</div><!--//app-card-->
						<?php
						} ?>
					</div>

					<!-- ตารางพนักงานดีเด่น -->


					<!-- โมเดลเพิ่มข้อมูลพนักงานดีเด่น-->

					<div class="modal fade" id="outstandingemployeeModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-header">
									<h1 class="modal-title fs-5" id="exampleModalLabel">เพิ่มข้อมูลพนักงานดีเด่น</h1>
									<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
								</div>

								<div class="modal-body">
									<form action="insert_outstandingemployee.php" method="POST" enctype="multipart/form-data">
										<div class="mb-3">
											<label for="img_employee" class="form-label">อัพโหลดรูปภาพ </label>
											<input type="file" class="form-control" placeholder="รูปภาพ" id="imgInputoutstandingemployee" name="img_employee" required><br>
											<img width="100px" id="PreviewImgoutstandingemployee" alt="" class="rounded">
										</div>

										<div class="mb-3">
											<label for="id_employee" class="form-label">รหัสพนักงาน</label>
											<input type="text" class="form-control" placeholder="" name="id_employee">
										</div>

										<div class="mb-3">
											<label for="services" class="form-label">บริการ</label>
											<input type="text" class="form-control " placeholder="" name="services">
										</div>

										<div class="mb-3">
											<label for="title_employee" class="form-label">ชื่อ-นามสกุล</label>
											<input type="text" class="form-control " placeholder="" name="title_employee">
										</div>

										<div class="mb-3">
											<label for="details_employee" class="form-label">รายละเอียด</label>
											<input type="text" class="form-control " placeholder="" name="details_employee" required>
										</div>

										<div class="mb-4">
											<label for="position" class="form-label">ตำแหน่ง / แผนก</label>
											<input type="text" class="form-control " placeholder="" name="position">
										</div>

										<div class="modal-footer">
											<button type="button" class="btn btn-sm btn-secondary" data-bs-dismiss="modal">กลับ</button>
											<button id="btn" type="submit" name='submit' class="btn btn-sm text-white">บันทึก</button>
										</div>
									</form>
								</div>

							</div>
						</div>
					</div>
					<!-- โมเดลเพิ่มข้อมูลพนักงานดีเด่น -->

					<!-- พรีวิวรูปภาพก่อนเพิ่มข้อมูลพนักงานดีเด่น-->
					<script>
						let imgInputoutstandingemployee = document.getElementById('imgInputoutstandingemployee');
						let PreviewImgoutstandingemployee = document.getElementById('PreviewImgoutstandingemployee');

						imgInputoutstandingemployee.onchange = evt => {
							const [file] = imgInputoutstandingemployee.files;
							if (file) {
								PreviewImgoutstandingemployee.src = URL.createObjectURL(file);
							}
						}
					</script>
					<!-- พรีวิวรูปภาพก่อนเพิ่มข้อมูลพนักงานดีเด่น -->


					<!-- ตารางพนักงานขาย -->

					<div class="tab-pane fade" id="tbl-outstandingsales" role="tabpanel" aria-labelledby="orders-outstanding-tab">
						<?php
						$permissionList = json_decode($_SESSION['permission']);
						$filterOutstandingEmployeeSales = array_filter($permissionList, function ($item) {
							return $item->permissionTap == "#tbl-outstandingsales" && $item->permissionStatus == 1;
						});

						if (count($filterOutstandingEmployeeSales) !== 0) {
						?>
							<!-- ปุ่มเพิ่มข้อมูล -->
							<div class="pagination justify-content-end my-4">
								<a id="btn" class="btn btn-sm text-white" data-bs-toggle="modal" data-bs-target="#outstandingemployeesalesModal">+ เพิ่มข้อมูล</a>
							</div>
							<div class="app-card app-card-orders-table shadow-sm mb-5 px-3">
								<div class="app-card-body">
									<div class="table-responsive">
										<table class="table app-table-hover mb-0 text-left">
											<thead>
												<tr>
													<th class="cell">ลำดับที่</th>
													<th class="cell">รหัสพนักงาน</th>
													<th class="cell">รูปภาพ</th>
													<th class="cell">ยอดขาย</th>
													<th width="150px" class="cell">ชื่อ-นาสกุล</th>
													<th width="190px" class="cell">รายละเอียด</th>
													<th class="cell">วัน/เดือน/ปี</th>
													<th class="cell">แก้ไข</th>
													<th class="cell">ลบ</th>
												</tr>
											</thead>
											<tbody>
												<?php
												$stmt = $db->query("SELECT * FROM tbl_outstandingemployeesales");
												$stmt->execute();
												$row = $stmt->fetchAll();

												if (!$row) {
													echo "<tr><td colspan='6' class='text-center'>ไม่มีข้อมูลในฐานข้อมูล</td></tr>";
												} else {
													foreach ($row as $rows) {
												?>

														<tr>
															<td class="cell"><?= $rows['id']; ?></td>
															<td class="cell"><?= $rows['id_employeesales']; ?></td>
															<td class="cell"><img width="80px" src="upload_img_employeesales/<?= $rows['img_employeesales']; ?>" class="rounded"></td>
															<td class="cell"><?= $rows['sales']; ?></td>
															<td class="cell"><?= $rows['title_employeesales'] ?></td>
															<td class="cell"><?= $rows['details_employeesales'] ?></td>
															<td class="cell"><?= $rows['time'] ?></td>
															<td class="cell"><a id="edit" href="FormEdit_outstandingEmployeeSales.php?id=<?= $rows['id']; ?>" class="btn btn-sm text-white"><i class="fas fa-edit fa-lg"></i></a></td>
															<td class="cell"><a id="delete" href="?deleteoutstandingemployeesales=<?= $rows['id']; ?>" class="btn btn-sm text-white" onclick="return confirm('ต้องการลบหรือไม่');"><i class="fas fa-trash-alt fa-lg"></i></a></td>
														</tr>
												<?php
													}
												}
												?>
											</tbody>
										</table>
									</div><!--//table-responsive-->
								</div><!--//app-card-body-->
							</div><!--//app-card-->
						<?php
						} ?>
					</div>

					<!-- ตารางพนักงานขาย -->

					<!-- โมเดลเพิ่มข้อมูลพนักงานขาย-->

					<div class="modal fade" id="outstandingemployeesalesModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-header">
									<h1 class="modal-title fs-5" id="exampleModalLabel">เพิ่มข้อมูลพนักงานขายยอดเยี่ยม</h1>
									<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
								</div>

								<div class="modal-body">
									<form action="insert_outstandingemployeesales.php" method="POST" enctype="multipart/form-data">
										<div class="mb-3">
											<label for="img_employeesales" class="form-label">อัพโหลดรูปภาพ</label>
											<input type="file" class="form-control" placeholder="" id="imgInputoutstandingemployeesales" name="img_employeesales" required><br>
											<img width="100px" id="PreviewImgoutstandingemployeesales" alt="" class="rounded">
										</div>

										<div class="mb-3">
											<label for="id_employeesales" class="form-label">รหัสพนักงาน</label>
											<input type="text" class="form-control" placeholder="" name="id_employeesales">
										</div>

										<div class="mb-3">
											<label for="sales" class="form-label">ยอดขาย</label>
											<input type="text" class="form-control " placeholder="" name="sales">
										</div>

										<div class="mb-3">
											<label for="title_employeesales" class="form-label">ชื่อ-นามสกุล</label>
											<input type="text" class="form-control " placeholder="" name="title_employeesales">
										</div>

										<div class="mb-4">
											<label for="details_employeesales" class="form-label">รายละเอียด</label>
											<input type="text" class="form-control " placeholder="" name="details_employeesales">
										</div>

										<div class="modal-footer">
											<button type="button" class="btn btn-sm btn-secondary" data-bs-dismiss="modal">กลับ</button>
											<button id="btn" type="submit" name='submit' class="btn btn-sm text-white">บันทึก</button>
										</div>
									</form>
								</div>

							</div>
						</div>
					</div>
					<!-- โมเดลเพิ่มข้อมูลพนักงานขาย -->

					<!-- พรีวิวรูปภาพก่อนเพิ่มข้อมูลพนักงานขาย-->
					<script>
						let imgInputoutstandingemployeesales = document.getElementById('imgInputoutstandingemployeesales');
						let PreviewImgoutstandingemployeesales = document.getElementById('PreviewImgoutstandingemployeesales');

						imgInputoutstandingemployeesales.onchange = evt => {
							const [file] = imgInputoutstandingemployeesales.files;
							if (file) {
								PreviewImgoutstandingemployeesales.src = URL.createObjectURL(file);
							}
						}
					</script>
					<!-- พรีวิวรูปภาพก่อนเพิ่มข้อมูลพนักงานขาย -->



					<!-- ตารางแผนก -->


					<div class="tab-pane fade" id="table-department" role="tabpanel" aria-labelledby="orders-paid-tab">
						<?php
						$permissionList = json_decode($_SESSION['permission']);
						$filterDepartment = array_filter($permissionList, function ($item) {
							return $item->permissionTap == "#table-department" && $item->permissionStatus == 1;
						});

						if (count($filterDepartment) !== 0) {
						?>

							<!-- ปุ่มเพิ่มข้อมูล -->
							<div class="pagination justify-content-end my-4">
								<a id="btn" class="btn btn-sm text-white" data-bs-toggle="modal" data-bs-target="#departmentModal">+ เพิ่มข้อมูลแผนก</a>
							</div>
							<div class="app-card app-card-orders-table mb-5 px-3">
								<div class="app-card-body">
									<div class="table-responsive">
										<table class="table mb-0 text-left">
											<thead>
												<tr>
													<th class="cell">id</th>
													<th class="cell">แผนก / ฝ่าย</th>
													<th class="cell">แก้ไข</th>
													<th class="cell">ลบ</th>
												</tr>
											</thead>
											<tbody>
												<?php
												$stmt = $db->query("SELECT * FROM tbl_department");
												$stmt->execute();
												$row = $stmt->fetchAll();

												if (!$row) {
													echo "<tr><td colspan='6' class='text-center'>ไม่มีข้อมูลในฐานข้อมูล</td></tr>";
												} else {
													foreach ($row as $rows) {
												?>
														<tr>
															<td class="cell"><?= $rows['id']; ?></td>
															<td class="cell"><?= $rows['department'] ?></td>
															<td class="cell"><a id="edit" href="FormEdit_department.php?id=<?= $rows['id']; ?>" class="btn btn-sm text-white"><i class="fas fa-edit fa-lg"></i></a></td>
															<td class="cell"><a id="delete" href="?deletedepartment=<?= $rows['id']; ?>" class="btn btn-sm text-white" onclick="return confirm('ต้องการลบหรือไม่');"><i class="fas fa-trash-alt fa-lg"></i></a></td>
														</tr>
												<?php
													}
												}
												?>

											</tbody>
										</table>
									</div><!--//table-responsive-->
								</div><!--//app-card-body-->
							</div><!--//app-card-->
						<?php
						} ?>
					</div>

					<!-- ตารางแผนก -->


					<!-- โมเดลเพิ่มข้อมูลแผนก -->
					<div class="modal fade" id="departmentModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-header">
									<h1 class="modal-title fs-5" id="exampleModalLabel">เพิ่มข้อมูลแผนก</h1>
									<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
								</div>

								<div class="modal-body">
									<form action="insert_department.php" method="POST">

										<div class="mb-4">
											<label for="department" class="form-label">ชื่อแผนก :</label>
											<input type="text" class="form-control " placeholder="ป้อนชื่อแผนก" name="department" required>
										</div>

										<div class="modal-footer">
											<button type="button" class="btn btn-sm btn-secondary" data-bs-dismiss="modal">กลับ</button>
											<button id="btn" type="submit" name='submit' class="btn btn-sm text-white">บันทึก</button>
										</div>
									</form>
								</div>

							</div>
						</div>
					</div>
					<!-- โมเดลเพิ่มข้อมูลแผนก -->


					<!-- ตารางเบอร์โทรแผนก -->

					<div class="tab-pane fade" id="table-numberdepartment" role="tabpanel" aria-labelledby="orders-paid-tab">
						<?php
						$permissionList = json_decode($_SESSION['permission']);
						$filterNumberDepartment = array_filter($permissionList, function ($item) {
							return $item->permissionTap == "#table-numberdepartment" && $item->permissionStatus == 1;
						});

						if (count($filterNumberDepartment) !== 0) {
						?>

							<!-- ปุ่มเพิ่มข้อมูล -->
							<div class="pagination justify-content-end my-4">
								<a id="btn" class="btn btn-sm text-white" data-bs-toggle="modal" data-bs-target="#departmentnumberModal">+ เพิ่มข้อมูลเบอร์โทรแผนก</a>
							</div>
							<div class="app-card app-card-orders-table mb-5 px-3">
								<div class="app-card-body">
									<div class="table-responsive">
										<table class="table mb-0 text-left">
											<thead>
												<tr>
													<th class="cell">id</th>
													<th class="cell">แผนก / ฝ่าย</th>
													<th class="cell">ชื่อโต๊ะ</th>
													<th class="cell">เบอร์โทร</th>
													<th class="cell">แก้ไข</th>
													<th class="cell">ลบ</th>

												</tr>
											</thead>
											<tbody>
												<?php
												$stmt = $db->query("SELECT tbl_numberdepartment.number,tbl_numberdepartment.id ,tbl_numberdepartment.name,tbl_department.department FROM `tbl_numberdepartment` LEFT JOIN tbl_department ON tbl_department.id = tbl_numberdepartment.department");
												$stmt->execute();
												$row = $stmt->fetchAll();

												if (!$row) {
													echo "<tr><td colspan='6' class='text-center'>ไม่มีข้อมูลในฐานข้อมูล</td></tr>";
												} else {
													foreach ($row as $rows) {
												?>
														<tr>
															<td class="cell"><?= $rows['id']; ?></td>
															<td class="cell"><?= $rows['department'] ?></td>
															<td class="cell"><?= $rows['name']; ?></td>
															<td class="cell"><?= $rows['number']; ?></td>
															<td class="cell"><a id="edit" href="FormEdit_NumberDepartment.php?id=<?= $rows['id']; ?>" class="btn btn-sm text-white"><i class="fas fa-edit fa-lg"></i></a></td>
															<td class="cell"><a id="delete" href="?deletenumberdepartment=<?= $rows['id']; ?>" class="btn btn-sm text-white" onclick="return confirm('ต้องการลบหรือไม่');"><i class="fas fa-trash-alt fa-lg"></i></a></td>
													<?php
													}
												}
													?>

											</tbody>
										</table>
									</div><!--//table-responsive-->
								</div><!--//app-card-body-->
							</div><!--//app-card-->
						<?php
						} ?>
					</div>
					<!-- ตารางเบอร์โทรแผนก -->


					<!-- โมเดลเพิ่มข้อมูลเบอร์โทรแผนก -->
					<div class="modal fade" id="departmentnumberModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-header">
									<h1 class="modal-title fs-5" id="exampleModalLabel">เพิ่มข้อมูลเบอร์โทรแผนก</h1>
									<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
								</div>

								<div class="modal-body">
									<form action="insert_numberdepartment.php" method="POST">
										<div class="mb-3">
											<label for="select" class="form-label">แผนก</label>
											<select class="form-select mb-3" name="select">
												<option selected>เลือกแผนก</option>
												<?php
												// คำสั่ง SQL เพื่อดึงข้อมูล
												$sql = "SELECT * FROM tbl_department";
												$stmt = $db->prepare($sql);
												$stmt->execute();

												// วนลูปแสดงผลลัพธ์ในรูปแบบของ option
												while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
													echo "<option value='" . $row['id'] . "'>" . $row['department'] . "</option>";
												}

												?>
											</select>

											<div class="mb-3 mt-3">
												<label for="title_news" class="form-label">ชื่อโต๊ะ :</label>
												<input type="text" class="form-control" placeholder="ป้อนชื่อโต๊ะ" name="name" required>
											</div>
											<div class="mb-4 mt-3">
												<label for="details_news" class="form-label">เบอร์โทรโต๊ะ :</label>
												<input type="text" class="form-control " placeholder="ป้อนเบอร์โทรโต๊ะ" name="number">
											</div>

											<div class="mb-3 mt-3">
												<button type="button" class="btn btn-sm btn-secondary" data-bs-dismiss="modal">กลับ</button>
												<button id="btn" type="submit" name='submit' class="btn btn-sm text-white">บันทึก</button>
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
					<!-- โมเดลเพิ่มข้อมูลgเบอร์โทรแผนก -->


					<!-- ตารางผู้ใช้users -->

					<!-- <div class="tab-pane fade" id="table-users" role="tabpanel" aria-labelledby="orders-all-tab">
						<?php
						$permissionList = json_decode($_SESSION['permission']);
						$filterUsers = array_filter($permissionList, function ($item) {
							return $item->permissionTap == "#table-users" && $item->permissionStatus == 1;
						});

						if (count($filterUsers) !== 0) {
						?>

							<div class="pagination justify-content-center my-4">
								<a id="btn" href="register.php" class="btn btn-sm text-white">สมัครสมาชิก</a>
							</div>
							<div class="app-card app-card-orders-table shadow-sm mb-5 px-3">
								<div class="app-card-body">
									<div class="table-responsive">
										<table class="table app-table-hover mb-0 text-center">
											<thead>
												<tr>
													<th width="60px" class="cell">ID</th>
													<th class="cell">ชื่อผู้ใช้</th>
													<th class="cell">ชื่อ</th>
													<th class="cell">นามสกุล</th>
													<th class="cell">Role</th>
													<th class="cell">แก้ไข</th>
													<th class="cell">รีเซ็ตรหัสผ่าน</th>
													<th class="cell">ลบ</th>
												</tr>
											</thead>
											<tbody>
												<?php
												$stmt = $db->query("SELECT * FROM users LEFT JOIN role ON users.role =  role.id");
												$stmt->execute();
												$row = $stmt->fetchAll();

												if (!$row) {
													echo "<tr><td colspan='6' class='text-center'>ไม่มีข้อมูลในฐานข้อมูล</td></tr>";
												} else {
													foreach ($row as $rows) {
												?>
														<tr>
															<td class="cell"><?= $rows['user_id']; ?></td>
															<td class="cell"><?= $rows['username'] ?></td>
															<td class="cell"><?= $rows['firstname'] ?></td>
															<td class="cell"><?= $rows['lastname'] ?></td>
															<td class="cell"><?= $rows['positionNameTh'] ?></td>
															<td class="cell"><a id="edit" href="FormEdit_Users.php?id=<?= $rows['user_id']; ?>" class="btn btn-sm text-white"><i class="fas fa-edit fa-lg"></i></a></td>
															<td class="cell"><a id="reset" href="FormEdit_PasswordReset.php?id=<?= $rows['user_id']; ?>" class="btn btn-sm text-white"><i class="fas fa-redo fa-lg"></i></a></td>
															<td class="cell"><a id="delete" href="?deleteUsers=<?= $rows['user_id']; ?>" class="btn btn-sm text-white" onclick="return confirm('ต้องการลบผู้ใช้หรือไม่');"><i class="fas fa-trash-alt fa-lg"></i></a></td>
														</tr>
												<?php
													}
												}
												?>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						<?php
						} ?>
					</div> -->
					<!-- ตารางผู้ใช้users -->


				</div><!--//tap-content-->
			</div>
			<div>
				<div>



</body>

</html>