<?php session_start(); ?>


<!-- ลบข้อมูลuser-->
<?php

include("connection.php");

if (isset($_GET['delete'])) {
	$delete_id = $_GET['delete'];
	$deletestmt = $db->query("DELETE FROM role WHERE id = $delete_id");
	$deletestmt->execute();

	if ($deletestmt) {
		echo "
			<script>
			alert('ลบข้อมูลตารางชื่อแผนกเรียบร้อยแล้ว');
				location.replace('permission.php');
			</script>
			";
	} else {
		echo "
			<script>
			alert('ลบข้อมูลตารางชื่อแผนกไม่สำเร็จ');
			location.replace('permission');
			</script>
			";
	}
}
?>
<!-- ลบข้อมูลuser -->




<!DOCTYPE html>
<html lang="en">

<head>
	<title>สิทธิ์การเข้าใช้งาน</title>

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
			/* background-color: #59CE8F; */
			/* background-color: #FFB562; */


		}

		#edit {
			background-color: #FFEAA5;
		}

		#delete {
			background-color: #FF6969;

		}
	</style>

</head>

<body class="app">
	<header class="app-header fixed-top">
		<div class="app-header-inner">
			<div class="container-fluid py-2">
				<div class="app-header-content">

				</div><!--//container-fluid-->
			</div><!--//app-header-inner-->
			<div id="app-sidepanel" class="app-sidepanel sidepanel-hidden">
				<div id="sidepanel-drop" class="sidepanel-drop"></div>
				<div class="sidepanel-inner d-flex flex-column">
					<a href="#" id="sidepanel-close" class="sidepanel-close d-xl-none">&times;</a>
					<div class="app-branding">
						<img src="img-tkn/logo-tkn-new.png" style="width: 130px;" class="fixed">

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
										<span class="nav-link-text12">สิทธิ์การเข้าใช้งาน</span>
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
								<?php } ?>
							</li>

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
								<?php } ?>

							</li>


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
					</nav>

					<div class="app-sidepanel-footer">
						<nav class="app-nav app-nav-footer">
							<ul class="app-menu footer-menu list-unstyled">

								<li class="nav-item">
									<a class="nav-link" href="logout.php">
										<!-- <span class="nav-icon">
											<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-gear" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
												<path fill-rule="evenodd" d="M8.837 1.626c-.246-.835-1.428-.835-1.674 0l-.094.319A1.873 1.873 0 0 1 4.377 3.06l-.292-.16c-.764-.415-1.6.42-1.184 1.185l.159.292a1.873 1.873 0 0 1-1.115 2.692l-.319.094c-.835.246-.835 1.428 0 1.674l.319.094a1.873 1.873 0 0 1 1.115 2.693l-.16.291c-.415.764.42 1.6 1.185 1.184l.292-.159a1.873 1.873 0 0 1 2.692 1.116l.094.318c.246.835 1.428.835 1.674 0l.094-.319a1.873 1.873 0 0 1 2.693-1.115l.291.16c.764.415 1.6-.42 1.184-1.185l-.159-.291a1.873 1.873 0 0 1 1.116-2.693l.318-.094c.835-.246.835-1.428 0-1.674l-.319-.094a1.873 1.873 0 0 1-1.115-2.692l.16-.292c.415-.764-.42-1.6-1.185-1.184l-.291.159A1.873 1.873 0 0 1 8.93 1.945l-.094-.319zm-2.633-.283c.527-1.79 3.065-1.79 3.592 0l.094.319a.873.873 0 0 0 1.255.52l.292-.16c1.64-.892 3.434.901 2.54 2.541l-.159.292a.873.873 0 0 0 .52 1.255l.319.094c1.79.527 1.79 3.065 0 3.592l-.319.094a.873.873 0 0 0-.52 1.255l.16.292c.893 1.64-.902 3.434-2.541 2.54l-.292-.159a.873.873 0 0 0-1.255.52l-.094.319c-.527 1.79-3.065 1.79-3.592 0l-.094-.319a.873.873 0 0 0-1.255-.52l-.292.16c-1.64.893-3.433-.902-2.54-2.541l.159-.292a.873.873 0 0 0-.52-1.255l-.319-.094c-1.79-.527-1.79-3.065 0-3.592l.319-.094a.873.873 0 0 0 .52-1.255l-.16-.292c-.892-1.64.902-3.433 2.541-2.54l.292.159a.873.873 0 0 0 1.255-.52l.094-.319z" />
												<path fill-rule="evenodd" d="M8 5.754a2.246 2.246 0 1 0 0 4.492 2.246 2.246 0 0 0 0-4.492zM4.754 8a3.246 3.246 0 1 1 6.492 0 3.246 3.246 0 0 1-6.492 0z" />
											</svg>
										</span> -->
										<span class="nav-link-text"><i class="fas fa-sign-out-alt"></i> ออกจากระบบ</span>
									</a>
								</li>
							</ul>
						</nav>
					</div>
				</div><!--//sidepanel-inner-->
			</div><!--//app-sidepanel-->
	</header><!--//app-header-->

	<div class="app-wrapper">

		<div class="app-content pt-3 p-md-3 p-lg-4">
			<div class="container-xl">

				<div class="row g-3 mb-4 align-items-center justify-content-between">
					<div class="col-auto">
						<h1 class="app-page-title mb-0">สิทธิ์การเข้าใช้งาน</h1>
					</div>
					<div class="col-auto">
						<div class="page-utilities">
							<div class="row g-2 justify-content-start justify-content-md-end align-items-center">

							</div>
						</div>
					</div>
				</div>


				<nav id="orders-table-tab" class="orders-table-tab app-nav-tabs nav shadow-sm flex-column flex-sm-row mb-4">
					<a class="flex-sm-fill text-sm-center nav-link active" id="orders-all-tab" data-bs-toggle="tab" href="#permission" role="tab" aria-controls="orders-all" aria-selected="true">ตารางสิทธิ์เข้าใช้งาน</a>

				</nav>

				<div class="tab-content" id="orders-table-tab-content">
					<div class="tab-pane fade show active" id="permission" role="tabpanel" aria-labelledby="orders-all-tab">
						<?php
						$permissionList = json_decode($_SESSION['permission']);
						$filterPermission = array_filter($permissionList, function ($item) {
							return $item->permissionTap == "#permission.php" && $item->permissionStatus == 1;
						});

						if (count($filterPermission) !== 0) {
						?>

							<!-- ปุ่มเพิ่มข้อมูล -->
							<div class="pagination justify-content-start my-4">
								<a id="btn" class="btn btn-sm text-white" data-bs-toggle="modal" data-bs-target="#insertModal"> + เพิ่มข้อมูล</a>
							</div>
							<div class="app-card app-card-orders-table shadow-sm mb-5">
								<div class="app-card-body">
									<div class="table-responsive">
										<table class="table app-table-hover mb-0 text-center">
											<thead>
												<tr>
													<th class="cell">ID</th>
													<th class="cell">ชื่อตำแหน่ง(TH)</th>
													<th class="cell">ชื่อตำแหน่ง(Eng)</th>
													<th class="cell">สถานะ</th>
													<!-- <th class="cell">สถานะ (อนุมัติ)</th> -->
													<th class="cell">เครื่องมือ</th>
												</tr>
											</thead>
											<tbody>

												<?php include("connection.php");
												$stmt = $db->query("SELECT * FROM role");
												$stmt->execute();
												$row = $stmt->fetchAll();

												if (!$row) {
													echo "<tr><td colspan='6' class='text-center'>ไม่มีข้อมูลในฐานข้อมูล</td></tr>";
												} else {
													foreach ($row as $rows) {
												?>

														<tr>
															<td class="cell"><?= $rows['id']; ?></td>
															<td class="cell"><span class="truncate"><?= $rows['positionNameTh']; ?></span></td>
															<td class="cell"><?= $rows['positionNameEng']; ?></td>
															<td class="cell"><span id="btn" class="badge rounded-pill"><?= $rows['status']; ?></span></td>
															<!-- <td class="cell"><span id="btn" class="badge rounded-pill">สามารถทำรายการได้</span></td> -->
															<td class="cell"><span><a id="edit" href="FormEdit_Permission.php?id=<?= $rows['id']; ?>" class="btn btn-sm text-white"><i class="fas fa-edit fa-lg"></i></a></span><span><a id="delete" href="?delete=<?= $rows['id']; ?>" class="btn btn-sm text-white" onclick="return confirm('ต้องการลบหรือไม่');"><i class="fas fa-trash-alt fa-lg"></i></a></span></td>
														</tr>
												<?php
													}
												}
												?>
											</tbody>
										</table>


										<!-- โมเดลเพิ่มข้อมูลสิทธิ์การใช้งาน -->
										<div class="modal fade" id="insertModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
											<div class="modal-dialog">
												<div class="modal-content">
													<div class="modal-header">
														<h1 class="modal-title fs-5" id="exampleModalLabel">เพิ่มรายการสิทธิ์การเข้าใช้งาน</h1>
														<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
													</div>
													<div class="modal-body">
														<form action="insert_role.php" method="POST">

															<div class="mb-3">
																<label for="title_news" class="form-label">ชื่อตำแหน่ง (TH)</label>
																<input type="text" class="form-control" placeholder="" name="position_th" id="position_th" required>
															</div>
															<div class="mb-3">
																<label for="details_news" class="form-label">ชื่อตำแหน่ง (ENG)</label>
																<input type="text" class="form-control " placeholder="" name="position_eng" id="position_eng" required>
															</div>

															<div class="form-check">
																<input class="form-check-input" type="checkbox" id="check1" name="news" value="false">
																<label class="form-check-label">ตารางข่าวสาร</label>
															</div>
															<div class="form-check">
																<input class="form-check-input" type="checkbox" id="check2" name="employeenews" value="false">
																<label class="form-check-label">ตารางพนักงานเข้าใหม่</label>
															</div>
															<div class="form-check">
																<input class="form-check-input" type="checkbox" id="check3" name="employeeresign" value="false">
																<label class="form-check-label">ตารางพนักงานลาออก</label>
															</div>
															<div class="form-check">
																<input class="form-check-input" type="checkbox" id="check4" name="outstandingemployee" value="false">
																<label class="form-check-label">ตารางพนักงานบริการดีเด่น</label>
															</div>
															<div class="form-check">
																<input class="form-check-input" type="checkbox" id="check5" name="outstandingemployeesales" value="false">
																<label class="form-check-label">ตารางพนักงานยอดขายดีเด่น</label>
															</div>
															<div class="form-check">
																<input class="form-check-input" type="checkbox" id="check6" name="department" value="false">
																<label class="form-check-label">ตารางแผนก</label>
															</div>
															<div class="form-check">
																<input class="form-check-input" type="checkbox" id="check7" name="numberdepartment" value="false">
																<label class="form-check-label">ตารางเบอร์โทรแผนก</label>
															</div>
															<div class="form-check">
																<input class="form-check-input" type="checkbox" id="check8" name="users" value="false">
																<label class="form-check-label">ตารางผู้ใช้งานระบบ</label>
															</div>

															<div class="form-check">
																<input class="form-check-input" type="checkbox" id="check9" name="permission" value="false">
																<label class="form-check-label">สิทธิ์การเข้าใช้งาน</label>
															</div>

															<div class="form-check ">
																<input class="form-check-input" type="checkbox" id="check10" name="register" value="false">
																<label class="form-check-label">สมัครสมาชิก</label>
															</div>

															<div class="form-check mb-3">
																<input class="form-check-input" type="checkbox" id="check11" name="employeewelfare" value="false">
																<label class="form-check-label">สวัสดิการพนักงาน</label>
															</div>
															<!-- <div class="modal-footer">
														</div> -->
														</form>

														<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">กลับ</button>
														<button onclick="checkCheckbox()" id="btn" name="submit" class="btn text-white">บันทึก</button>
														<!-- <button onclick="checkCheckbox()">button</button> -->
													</div>

												</div>
											</div>
										</div>
										<!-- โมเดลเพิ่มข้อมูลสิทธิ์การใช้งาน -->
									</div>
								</div>
							</div><!--//app-card-->
					</div><!--//tab-pane-->
				</div><!--//tab-content-->
			<?php } ?>

			</div><!--//container-fluid-->
		</div><!--//app-content-->




		<footer class="app-footer">
		</footer><!--//app-footer-->

	</div><!--//app-wrapper-->


	<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

	<script>
		function checkCheckbox() {
			var checkbox1 = document.getElementById("check1").checked;
			var checkbox2 = document.getElementById("check2").checked;
			var checkbox3 = document.getElementById("check3").checked;
			var checkbox4 = document.getElementById("check4").checked;
			var checkbox5 = document.getElementById("check5").checked;
			var checkbox6 = document.getElementById("check6").checked;
			var checkbox7 = document.getElementById("check7").checked;
			var checkbox8 = document.getElementById("check8").checked;
			var checkbox9 = document.getElementById("check9").checked;
			var checkbox10 = document.getElementById("check10").checked;
			var checkbox11 = document.getElementById("check11").checked;




			var position_th = document.getElementById("position_th").value;
			var position_eng = document.getElementById("position_eng").value;

			var data = {
				position_th,
				position_eng,
				list: [{
					key: "ตารางข่าวสาร",
					tabName: "#table-news",
					value: checkbox1,
				}, {
					key: "ตารางพนักงานเข้าใหม่",
					tabName: "#table-employeenews",
					value: checkbox2,
				}, {
					key: "ตารางพนักงานลาออก",
					tabName: "#table-employeeresign",
					value: checkbox3,
				}, {
					key: "ตารางพนักงานดีเด่น",
					tabName: "#tbl-outstandingemployee",
					value: checkbox4,
				}, {
					key: "ตารางพนักงานยอดขายดีเด่น",
					tabName: "#tbl-outstandingsales",
					value: checkbox5,
				}, {
					key: "ตารางแผนก",
					tabName: "#table-department",
					value: checkbox6,
				}, {
					key: "ตารางเบอร์โทรแผนก",
					tabName: "#table-numberdepartment",
					value: checkbox7,
				}, {
					key: "ตารางผู้ใช้งานระบบ",
					tabName: "#table-users",
					value: checkbox8,
				}, {
					key: "สิทธิ์การเข้าใช้งาน",
					tabName: "#permission.php",
					value: checkbox9,
				}, {
					key: "สมัครสมาชิก",
					tabName: "#register.php",
					value: checkbox10,
				}, {
					key: "สวัสดิการพนักงาน",
					tabName: "#Tbl_Employeewelfare.php",
					value: checkbox11,
				}]
			};

			$.ajax({
				type: "POST",
				url: "insert_role.php",
				data: data, // Convert data to JSON string if needed
				// contentType: "application/json", // Set content type to JSON if sending JSON data
				// processData:false, // Process data
				success: function(response) {
					// Handle the successful response from the server
					// console.log("Success:", response);
					alert('บันทึกข้อมูลสิทธิ์การเข้าใช้งานเรียบร้อยแล้ว');
					location.replace('permission.php');
				},
				error: function(error) {
					// Handle any errors that occur during the AJAX request
					// console.error("Error:", error);
					alert('บันทึกข้อมูลสิทธิ์การเข้าใช้งานไม่สำเร็จ');
					location.replace('permission.php');
				}
			});


		}
	</script>

	<!-- Javascript -->
	<script src="assets/plugins/popper.min.js"></script>
	<script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>


	<!-- Page Specific JS -->
	<script src="assets/js/app.js"></script>

</body>

</html>