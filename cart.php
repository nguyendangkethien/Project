<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Takara Comic Store</title>
	<link rel="shortcut icon" href="images/logo.png" />
<!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/bootstrap-theme.css">
	<link rel="stylesheet" href="css/bootstrap-theme.min.css">
<!-- Bootstrap -->
	<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </head>
  
  <body>

	<nav class="navbar navbar-inverse">
	  <div class="container-fluid">
		<div class="navbar-header">
		<img src="images/takara.jpg" style="width:80px;height:80px;">
		  <a class="navbar-brand" href="#">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Takara Comic Store  </a>
		</div>
		<ul class="nav navbar-nav">
		
		</ul>
			<li>
				&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
				<a href=https://www.facebook.com/aquarius.love.allgirl" target="_blank"><img src="images/facebook.png" style="width:50px;height:50px;"></a>&nbsp;
				<a href="https://zalo.me" target="_blank"><img src="images/zalo.png" style="width:50px;height:50px;"></a>&nbsp;
				<a href="https://www.instagram.com/nhokthien_1412_95/" target="_blank"><img src="images/instagram.png" style="width:50px;height:50px;"></a>&nbsp;
				<a href="https://www.viber.com" target="_blank"><img src="images/viber.png" style="width:50px;height:50px;"></a>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
				<style>
				/* Full-width input fields */
				input[type=text], input[type=password] {
					width: 100%;
					padding: 12px 20px;
					margin: 8px 0;
					display: inline-block;
					border: 1px solid #ccc;
					box-sizing: border-box;
				}

				/* Set a style for all buttons */
				button {
					background-color: #4CAF50;
					color: white;
					padding: 14px 20px;
					margin: 8px 0;
					border: none;
					cursor: pointer;
					width: 100%;
				}

				/* Extra styles for the cancel button */
				.cancelbtn {
					width: auto;
					padding: 10px 18px;
					background-color: #f44336;
				}

				/* Center the image and position the close button */
				.imgcontainer {
					text-align: center;
					margin: 24px 0 12px 0;
					position: relative;
				}

				img.avatar {
					width: 40%;
					border-radius: 50%;
				}

				.container {
					padding: 16px;
				}

				span.psw {
					float: right;
					padding-top: 16px;
				}

				/* The Modal (background) */
				.modal {
					display: none; /* Hidden by default */
					position: fixed; /* Stay in place */
					z-index: 1; /* Sit on top */
					left: 0;
					top: 0;
					width: 100%; /* Full width */
					height: 100%; /* Full height */
					overflow: auto; /* Enable scroll if needed */
					background-color: rgb(0,0,0); /* Fallback color */
					background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
					padding-top: 60px;
				}

				/* Modal Content/Box */
				.modal-content {
					background-color: #fefefe;
					margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
					border: 1px solid #888;
					width: 90%; /* Could be more or less, depending on screen size */
				}

				/* The Close Button (x) */
				.close {
					position: absolute;
					right: 25px;
					top: 0;
					color: #000;
					font-size: 35px;
					font-weight: bold;
				}

				.close:hover,
				.close:focus {
					color: red;
					cursor: pointer;
				}

				/* Add Zoom Animation */
				.animate {
					-webkit-animation: animatezoom 0.6s;
					animation: animatezoom 0.6s
				}

				@-webkit-keyframes animatezoom {
					from {-webkit-transform: scale(0)} 
					to {-webkit-transform: scale(1)}
				}
					
				@keyframes animatezoom {
					from {transform: scale(0)} 
					to {transform: scale(1)}
				}

				/* Change styles for span and cancel button on extra small screens */
				@media screen and (max-width: 300px) {
					span.psw {
					   display: block;
					   float: none;
					}
					.cancelbtn {
					   width: 100%;
					}
				}
				</style>
				&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;
				<button onclick="document.getElementById('id01').style.display='block'" style="width:auto;"><img src="images/login.png" style="margin-left: -15px;width:40px;height:40px;"> Đăng Nhập</button>
				<div id="id01" class="modal">
				  
				  <form class="modal-content animate" action="action_page.php">
					<div class="imgcontainer">
					  <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
					  <img src="images/avatar.png" style="width:350px; height:250px;">
					</div>

					<div class="container">
					  <label><b>Tài Khoản</b></label>
					  <input type="text" placeholder="Nhập Tài Khoản" name="uname" required>

					  <label><b>Mật Khẩu</b></label>
					  <input type="password" placeholder="Nhập Mật Khẩu" name="psw" required>
						
					  <button type="submit">Đăng Nhập</button>
					  <input type="checkbox" checked="checked"> Nhớ Mật Khẩu
					</div>

					<div class="container" style="background-color:#f1f1f1">
					  <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Thoát</button>
					  <span class="psw"><a href="#">Forgot Password?</a></span>
					</div>
				  </form>
				</div>
				&nbsp;
				<button onclick="document.getElementById('id02').style.display='block'" style="width:auto;"><img src="images/register.png" style="margin-left: -15px;width:40px;height:40px;"> Đăng Kí</button>
				<div id="id02" class="modal">
				  
				  <form class="modal-content animate" action="action_page.php">
					<div class="imgcontainer">
					  <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
					  <img src="images/avatar.png" style="width:350px; height:250px;">
					</div>

					<div class="container">
					  <label><b>Nhập Email(Tài Khoản)</b></label>
					  <input type="text" placeholder="Nhập Tài Khoản Mới" name="uname" required>
					  <label><b>Nhập Mật Khẩu</b></label>
					  <input type="text" placeholder="Nhập Mật Khẩu Mới" name="uname" required>
					  <label><b>Nhập Lại Mật Khẩu</b></label>
					  <input type="text" placeholder="Nhập Lại Mật Khẩu" name="uname" required>
					  Giới Tính: &nbsp; &nbsp; Nam &nbsp;<input type="checkbox" checked="checked"> &nbsp; &nbsp;   Nữ &nbsp; <input type="checkbox"><br>

					  <label><b>Nhập Số Điện Thoại</b></label>
					  <input type="text" placeholder="Có Thể Bỏ Trống" name="uname" required>
					  <label><b>Nhập Địa Chỉ Giao Nhận</b></label>
					  <input type="text" placeholder="Có Thể Bỏ Trống" name="uname" required>
					  <button type="submit">Đăng Kí</button>
					</div>

					<div class="container" style="background-color:#f1f1f1">
					  <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Thoát</button>
					</div>
				  </form>
				</div>
				<script>
				// Get the modal
				var modal = document.getElementById('id01');
				var modal = document.getElementById('id02');
				// When the user clicks anywhere outside of the modal, close it
				window.onclick = function(event) {
					if (event.target == modal) {
						modal.style.display = "none";
					}
				}
				</script>
			</li>
		</ul>
	  </div>
	</nav>

<!-- Top -->
<nav class="navbar navbar-default">
			  <div class="container-fluid">
				  <div class="col-lg-12">
					<div class="input-group">
					  <input type="text" class="form-control" placeholder="Search for...">
						<button type="button" class="btn btn-success">Tìm Kiếm</button>
						<span class="input-group-btn">
							</span>
							<span class="input-group-btn">
							<button type="button" class="btn btn-default btn-lg"><img src="images/checkout.png" style="margin-left: -15px;width:40px;height:40px;">Thanh Toán</button>
						</span>
					</div><!-- /input-group -->
				  </div><!-- /.col-lg-6 -->
			  </div>	  
			</nav>
			<!-- Search Box -->
			<!-- Menu Website -->
			<nav class="navbar navbar-default">
			  <div class="container-fluid">
				<div class="navbar-header">
				  <a class="navbar-brand" href="#"> Trang Chủ </a>
				</div>
				<ul class="nav navbar-nav">
					<li class="w3-dropdown-hover w3-hover-orange">
					  <a class="w3-hover-orange" href="#"> Sách <i class="fa fa-caret-down"></i></a>
					  <div class="w3-dropdown-content w3-white w3-card-4">
						<a href="#">Truyện Tranh</a>
						<a href="#">Tiểu Thuyết</a>
						<a href="#">Tạp Chí</a>
					  </div>
					</li>
					<li class="w3-dropdown-hover w3-hover-orange">
					  <a class="w3-hover-orange" href="#"> Phụ Kiện <i class="fa fa-caret-down"></i></a>
					  <div class="w3-dropdown-content w3-white w3-card-4">
						<a href="#">Ốp Lưng Điện Thoại</a>
						<a href="#">Link 2</a>
						<a href="#">Link 3</a>
					  </div>
					</li>
					<li class="w3-dropdown-hover w3-hover-orange">
					  <a class="w3-hover-orange" href="#"> Quà Tặng <i class="fa fa-caret-down"></i></a>
					  <div class="w3-dropdown-content w3-white w3-card-4">
						<a href="#">Móc Khóa</a>
						<a href="#">Cốc-Bình Nước</a>
						<a href="#">Nón-Gối</a>
					  </div>
					</li>
					<li class="w3-dropdown-hover w3-hover-orange">
					  <a class="w3-hover-orange" href="#"> Thời Trang <i class="fa fa-caret-down"></i></a>
					  <div class="w3-dropdown-content w3-white w3-card-4">
						<a href="#">Balo</a>
						<a href="#">Áo Thun</a>
						<a href="#">Áo Khoác</a>
					  </div>
					</li>
					<li class="w3-dropdown-hover w3-hover-orange">
					  <a class="w3-hover-orange" href="#">Trợ Giúp <i class="fa fa-caret-down"></i></a>
					  <div class="w3-dropdown-content w3-white w3-card-4">
						<a href="#">Mua Hàng</a>
						<a href="#">Thanh Toán</a>
						<a href="#">Giao Nhận</a>
					  </div>
					</li>
					<li>
					<h3>&nbsp; &nbsp;<strong><i><u> HotLine:0963203816-01287857375 </strong></u></i></h3>
					<li>
				</ul>
			  </div>
			</nav>
		</div>
	</div>
			<h2 class="text-center">Giỏ Hàng Của Bạn</h2>
			<div class="container"> 
			 <table id="cart" class="table table-hover table-condensed"> 
			  <thead> 
			   <tr> 
				<th style="width:50%">Tên sản phẩm</th> 
				<th style="width:10%">Giá</th> 
				<th style="width:8%">Số lượng</th> 
				<th style="width:22%" class="text-center">Thành tiền</th> 
				<th style="width:10%"> </th> 
			   </tr> 
			  </thead> 
			  <tbody><tr> 
			   <td data-th="Product"> 
				<div class="row"> 
				 <div class="col-sm-2 hidden-xs"><img src="images/product-new/2.jpeg" alt="Sản phẩm 1" class="img-responsive" width="100">
				 </div> 
				 <div class="col-sm-10"> 
				  <h4 class="nomargin">Sản phẩm 1</h4> 
				  <p>Mô tả của sản phẩm 1</p> 
				 </div> 
				</div> 
			   </td> 
			   <td data-th="Price">200.000 đ</td> 
			   <td data-th="Quantity"><input class="form-control text-center" value="1" type="number">
			   </td> 
			   <td data-th="Subtotal" class="text-center">200.000 đ</td> 
			   <td class="actions" data-th="">
				<button class="btn btn-info btn-sm"><i class="fa fa-edit"></i>
				</button> 
				<button class="btn btn-danger btn-sm"><i class="fa fa-trash-o"></i>
				</button>
			   </td> 
			  </tr> 
			  <tr> 
			   <td data-th="Product"> 
				<div class="row"> 
				 <div class="col-sm-2 hidden-xs"><img src="images/product-new/1.jpeg" alt="Sản phẩm 1" class="img-responsive" width="100">
				 </div> 
				 <div class="col-sm-10"> 
				  <h4 class="nomargin">Sản phẩm 2</h4> 
				  <p>Mô tả của sản phẩm 2</p> 
				 </div> 
				</div> 
			   </td> 
			   <td data-th="Price">300.000 đ</td> 
			   <td data-th="Quantity"><input class="form-control text-center" value="1" type="number">
			   </td> 
			   <td data-th="Subtotal" class="text-center">300.000 đ</td> 
			   <td class="actions" data-th="">
				<button class="btn btn-info btn-sm"><i class="fa fa-edit"></i>
				</button> 
				<button class="btn btn-danger btn-sm"><i class="fa fa-trash-o"></i>
				</button>
			   </td> 
			  </tr> 
			  </tbody><tfoot> 
			   <tr class="visible-xs"> 
				<td class="text-center"><strong>Tổng 200.000 đ</strong>
				</td> 
			   </tr> 
			   <tr> 
				<td><a href="#" class="btn btn-warning"><i class="fa fa-angle-left"></i> Tiếp tục mua hàng</a>
				</td> 
				<td colspan="2" class="hidden-xs"> </td> 
				<td class="hidden-xs text-center"><strong>Tổng tiền 500.000 đ</strong>
				</td> 
				<td><a href="#" class="btn btn-success btn-block">Thanh toán <i class="fa fa-angle-right"></i></a>
				</td> 
			   </tr> 
			  </tfoot> 
			 </table>
			</div>
<!-- Footer -->
    <div id="footer">
      <div class="container">
		<br>
        <div class="row">

          <div class="col-md-4">
            <img src="http://oi60.tinypic.com/w8lycl.jpg" class="img-circle">
            <h4>Developer</h4>
            <p>By Nguyễn Đăng Kế Thiện</p>
          </div>
          <div class="col-md-4">
            <img src="http://oi60.tinypic.com/2z7enpc.jpg" class="img-circle" >
            <h4>Artist</h4>
            <p>By Nguyễn Đăng Kế Thiện</p>
          </div>
          <div class="col-md-4">
            <img src="http://oi61.tinypic.com/307n6ux.jpg" class="img-circle">
            <h4>Designer</h4>
            <p>By Nguyễn Đăng Kế Thiện</p>
          </div>
        </div>
      </div>
    </div>

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
	<script src="js/bootstrap.js"></script>
	<script src="js/npm.js"></script>
	<script src="https://maps.googleapis.com/maps/api/js?callback=myMap"></script>
  </body>
</html>

