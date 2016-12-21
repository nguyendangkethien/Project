<?php

include "connect.php";

$taikhoan = $_POST["txtTaiKhoan"];
$matkhau = $_POST['txtMatKhau'];
$password = $_POST['password'];
$repassword = $_POST['txtNhapLaiMK'];
$sodt = $_POST['txtSoDT'];
$diachi = $_POST['txtDiaChi'];

	//existing email address in our database
	$sql = "SELECT * FROM user WHERE TaiKhoan = '$taikhoan' LIMIT 1" ;
	$check_query = mysqli_query($con,$sql);
	$count_email = mysqli_num_rows($check_query);
	if($count_email > 0){
		echo "
			<div class='alert alert-danger'>
				<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
				<b>Tài Khoan da ton tai!</b>
			</div>
		";
		exit();
	} else {
		$password = md5($password);
		$sql = "INSERT INTO `user` 
		(`TaiKhoan`, `MatKhau`, `Level`, `GioiTinh`, 
		`SoDT`, `DiaChi`) 
		VALUES ('$taikhoan', '$matkhau', '2', 
		'KXD', '$sodt', '$diachi')";
		$run_query = mysqli_query($con,$sql);
		if($run_query){
			echo "
				<div class='alert alert-success'>
					<a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a>
				<b>Dang ki thanh cong..!</b>
				</div>
			";
		}
	}
	}
	


?>






















































