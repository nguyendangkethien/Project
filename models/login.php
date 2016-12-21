<?php
include "connect.php";

session_start();

if(isset($_POST["btnDangNhap"])){
	$taikhoan = mysqli_real_escape_string($con,$_POST["txtTaiKhoan"]);
	$matkhau = md5($_POST["txtPass"]);
	$sql = "SELECT * FROM user_info WHERE TaiKhoan = '$taikhoan' AND MatKhau = '$matkhau'";
	$run_query = mysqli_query($con,$sql);
	$count = mysqli_num_rows($run_query);
	if($count == 1){
		$row = mysqli_fetch_array($run_query);
		$_SESSION["uid"] = $row["user_id"];
		$_SESSION["name"] = $row["first_name"];
			echo "truefsvkjbskvvsbd";
		}
	
}

?>
