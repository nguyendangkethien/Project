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
<!-- Top -->

	<nav class="navbar navbar-inverse" >
	  <div class="container-fluid" style="background-color: ">
		<div class="navbar-header">
		<img src="images/takara.jpg" style="width:80px;height:80px;">
		  <a class="navbar-brand" href="#" stlye="font-color: black;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; Takara Comic Store  </a>
		</div>
		<ul class="nav navbar-nav">
		
		</ul>
			<li>
				&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
				<a href=https://www.facebook.com/aquarius.love.allgirl" target="_blank"><img src="images/facebook.png" style="width:50px;height:50px;"></a>&nbsp;
				<a href="https://zalo.me" target="_blank"><img src="images/zalo.png" style="width:50px;height:50px;"></a>&nbsp;
				<a href="https://www.instagram.com/nhokthien_1412_95/" target="_blank"><img src="images/instagram.png" style="width:50px;height:50px;"></a>&nbsp;
				<a href="https://www.viber.com"><img src="images/viber.png" style="width:50px;height:50px;"></a>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
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
				  
				  <form class="modal-content animate" action="models/login.php" method="POST">
					<div class="imgcontainer">
					  <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
					  <img src="images/avatar.png" style="width:350px; height:250px;">
					</div>

					<div class="container">
					  <label><b>Tài Khoản</b></label>
					  <input type="text" placeholder="Nhập Tài Khoản" name="txtTaiKhoan" required>

					  <label><b>Mật Khẩu</b></label>
					  <input type="password" placeholder="Nhập Mật Khẩu" name="txtPass" required>
						
					  <button type="submit" value="DangNhap" name="btnDangNhap">Đăng Nhập</button>
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
				  
				  <form class="modal-content animate" action="models/register.php" method="POST">
					<div class="imgcontainer">
					  <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
					  <img src="images/avatar.png" style="width:350px; height:250px;">
					</div>

					<div class="container">
					<form action="models/register.php" method="post">
					  <label><b>Nhập Email(Tài Khoản)</b></label>
					  <input type="text" placeholder="Nhập Tài Khoản Mới" name="txtTaiKhoan" required>
					  <label><b>Nhập Mật Khẩu</b></label>
					  <input type="text" placeholder="Nhập Mật Khẩu Mới" name="txtMatKhau" required>
					  <label><b>Nhập Lại Mật Khẩu</b></label>
					  <input type="text" placeholder="Nhập Lại Mật Khẩu" name="txtNhapLaiMK" required>
					  Giới Tính: &nbsp; &nbsp; Nam &nbsp;<input type="checkbox" checked="checked" value="Nam"> &nbsp; &nbsp;   Nữ &nbsp; <input type="checkbox" value="Nu"><br>

					  <label><b>Nhập Số Điện Thoại</b></label>
					  <input type="text" placeholder="Có Thể Bỏ Trống" name="txtSoDT" required>
					  <label><b>Nhập Địa Chỉ Giao Nhận</b></label>
					  <input type="text" placeholder="Có Thể Bỏ Trống" name="txtDiaChi" required>
					  <button type="submit">Đăng Kí</button>
					</form>
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


<!-- Top Slider -->

	<div class="slideshow-container">

	<div class="mySlides fade">
	  <img src="images/topslider1.jpeg" style="width:100%">
	  <div class="text">Takara Comic Store</div>
	</div>

	<div class="mySlides fade">
	  <img src="images/topslider2.jpeg" style="width:100%">
	  <div class="text">Takara Comic Store</div>
	</div>

	<div class="mySlides fade">
	  <img src="images/topslider3.jpeg" style="width:100%">
	  <div class="text">Takara Comic Store</div>
	</div>

	<div class="mySlides fade">
	  <img src="images/topslider4.jpeg" style="width:100%">
	  <div class="text">Takara Comic Store</div>
	</div>
	
	<div class="mySlides fade">
	  <img src="images/topslider5.jpeg" style="width:100%">
	  <div class="text">Takara Comic Store</div>
	</div>
	
	<a class="prev" onclick="plusSlides(-1)">❮</a>
	<a class="next" onclick="plusSlides(1)">❯</a>

	</div>

	<div style="text-align:center">
	  <span class="dot" onclick="currentSlide(1)"></span>
	  <span class="dot" onclick="currentSlide(2)"></span>
	  <span class="dot" onclick="currentSlide(3)"></span>
	  <span class="dot" onclick="currentSlide(4)"></span>
	  <span class="dot" onclick="currentSlide(5)"></span>	  
	</div>

<!-- Top Slider -->

    <div id="main">
<!-- Grid system -->
	<div class="row">
		<div id="left-sidebar" class="col-md-3">
		<!-- Calender Widget -->
			<div class="month"> 
			  <ul>
				<li class="prev">&#10094;</li>
				<li class="next">&#10095;</li>
				<li>
				  August<br>
				  <span style="font-size:18px">2016</span>
				</li>
			  </ul>
			</div>

			<ul class="weekdays">
			  <li>Mo</li>
			  <li>Tu</li>
			  <li>We</li>
			  <li>Th</li>
			  <li>Fr</li>
			  <li>Sa</li>
			  <li>Su</li>
			</ul>

			<ul class="days"> 
			  <li>1</li>
			  <li>2</li>
			  <li>3</li>
			  <li>4</li>
			  <li>5</li>
			  <li>6</li>
			  <li>7</li>
			  <li>8</li>
			  <li>9</li>
			  <li><span class="active">10</span></li>
			  <li>11</li>
			  <li>12</li>
			  <li>13</li>
			  <li>14</li>
			  <li>15</li>
			  <li>16</li>
			  <li>17</li>
			  <li>18</li>
			  <li>19</li>
  			  <li>20</li>
			  <li>21</li>
			  <li>22</li>
			  <li>23</li>
			  <li>24</li>
			  <li>25</li>
			  <li>26</li>
			  <li>27</li>
			  <li>28</li>
			  <li>29</li>
			  <li>30</li>
			  <li>31</li>
			</ul>
		<!-- Calender Widget -->
		<!-- Map -->
			<h2>Comic Store Address</h2>
			<div id="map" style="width:315px; height:315px;background:yellow"></div>
		<!-- Map -->
		
		
		</div>
		<div id="main-content" class="col-md-9">
			<!-- Search Box -->
			<nav class="navbar navbar-default">
			  <div class="container-fluid">
				  <div class="col-lg-12">
					<div class="input-group">
					  <input type="text" class="form-control" placeholder="Search for...">
						<button type="button" class="btn btn-success">Tìm Kiếm</button>
						<span class="input-group-btn">

							<button type="button" class="btn btn-default btn-lg"><img src="images/cart.png" style="margin-left: -15px;width:40px;height:40px;">Giỏ Hàng</button>
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
			<!-- Menu Website -->

		
			<!-- Product List -->
			<div class="bs-example" data-example-id="thumbnails-with-custom-content"> 
				<h3>Danh Mục 1</h3>
				<div class="row"> 
					<div class="col-sm-6 col-md-3"> 
						<div class="thumbnail"> 
							<img alt="New Comic" src="images/product-new/1.jpeg" data-holder-rendered="true" style="height: 300px; width: 100%; display: block;"> 
							<div class="caption"> 
								<h4>Hàng Mới</h4> 
								<p>25.000 đồng.</p> 
								<p>
									<a href="#" class="btn btn-primary" role="button">Thêm Giỏ</a> 
									<a href="#" class="btn btn-default" role="button">Mua Ngay</a>
								</p> 	
							</div> 
						</div> 
					</div> 
					<div class="col-sm-6 col-md-3"> 
						<div class="thumbnail"> 
							<img alt="New Comic" src="images/product-new/2.jpeg" data-holder-rendered="true" style="height: 300px; width: 100%; display: block;"> 
							<div class="caption"> 
								<h4>Hàng Mới</h4> 
								<p>25.000 đồng.</p> 
								<p>
									<a href="#" class="btn btn-primary" role="button">Thêm Giỏ</a> 
									<a href="#" class="btn btn-default" role="button">Mua Ngay</a>
								</p> 	
							</div> 
						</div> 
					</div> 
					<div class="col-sm-6 col-md-3"> 
						<div class="thumbnail"> 
							<img alt="New Comic" src="images/product-new/3.jpeg" data-holder-rendered="true" style="height: 300px; width: 100%; display: block;"> 
							<div class="caption"> 
								<h4>Hàng Mới</h4> 
								<p>25.000 đồng.</p> 
								<p>
									<a href="#" class="btn btn-primary" role="button">Thêm Giỏ</a> 
									<a href="#" class="btn btn-default" role="button">Mua Ngay</a>
								</p> 	
							</div> 
						</div> 
					</div>
					<div class="col-sm-6 col-md-3"> 
						<div class="thumbnail"> 
							<img alt="New Comic" src="images/product-new/4.jpeg" data-holder-rendered="true" style="height: 300px; width: 100%; display: block;"> 
							<div class="caption"> 
								<h4>Hàng Mới</h4> 
								<p>25.000 đồng.</p> 
								<p>
									<a href="#" class="btn btn-primary" role="button">Thêm Giỏ</a> 
									<a href="#" class="btn btn-default" role="button">Mua Ngay</a>
								</p> 	
							</div> 
						</div> 
					</div>
				</div>
			</div>
			
			<div class="bs-example" data-example-id="thumbnails-with-custom-content"> 
				<h3>Danh Mục 2</h3>
				<div class="row"> 
					<div class="col-sm-6 col-md-3"> 
						<div class="thumbnail"> 
							<img alt="New Comic" src="images/product-new/5.jpeg" data-holder-rendered="true" style="height: 300px; width: 100%; display: block;"> 
							<div class="caption"> 
								<h4>Hàng Mới</h4> 
								<p>25.000 đồng.</p> 
								<p>
									<a href="#" class="btn btn-primary" role="button">Thêm Giỏ</a> 
									<a href="#" class="btn btn-default" role="button">Mua Ngay</a>
								</p> 	
							</div> 
						</div> 
					</div> 
					<div class="col-sm-6 col-md-3"> 
						<div class="thumbnail"> 
							<img alt="New Comic" src="images/product-new/6.jpeg" data-holder-rendered="true" style="height: 300px; width: 100%; display: block;"> 
							<div class="caption"> 
								<h4>Hàng Mới</h4> 
								<p>25.000 đồng.</p> 
								<p>
									<a href="#" class="btn btn-primary" role="button">Thêm Giỏ</a> 
									<a href="#" class="btn btn-default" role="button">Mua Ngay</a>
								</p> 	
							</div> 
						</div> 
					</div> 
					<div class="col-sm-6 col-md-3"> 
						<div class="thumbnail"> 
							<img alt="New Comic" src="images/product-new/7.jpeg" data-holder-rendered="true" style="height: 300px; width: 100%; display: block;"> 
							<div class="caption"> 
								<h4>Hàng Mới</h4> 
								<p>25.000 đồng.</p> 
								<p>
									<a href="#" class="btn btn-primary" role="button">Thêm Giỏ</a> 
									<a href="#" class="btn btn-default" role="button">Mua Ngay</a>
								</p> 	
							</div> 
						</div> 
					</div>
					<div class="col-sm-6 col-md-3"> 
						<div class="thumbnail"> 
							<img alt="New Comic" src="images/product-new/8.jpeg" data-holder-rendered="true" style="height: 300px; width: 100%; display: block;"> 
							<div class="caption"> 
								<h4>Hàng Mới</h4> 
								<p>25.000 đồng.</p> 
								<p>
									<a href="#" class="btn btn-primary" role="button">Thêm Giỏ</a> 
									<a href="#" class="btn btn-default" role="button">Mua Ngay</a>
								</p> 	
							</div> 
						</div> 
					</div>
				</div>		
			</div>		
			<div class="bs-example" data-example-id="thumbnails-with-custom-content"> 
				<h3>Danh Mục 3</h3>
				<div class="row"> 
					<div class="col-sm-6 col-md-3"> 
						<div class="thumbnail"> 
							<img alt="New Comic" src="images/product-new/9.jpeg" data-holder-rendered="true" style="height: 300px; width: 100%; display: block;"> 
							<div class="caption"> 
								<h4>Hàng Mới</h4> 
								<p>25.000 đồng.</p> 
								<p>
									<a href="#" class="btn btn-primary" role="button">Thêm Giỏ</a> 
									<a href="#" class="btn btn-default" role="button">Mua Ngay</a>
								</p> 	
							</div> 
						</div> 
					</div> 
					<div class="col-sm-6 col-md-3"> 
						<div class="thumbnail"> 
							<img alt="New Comic" src="images/product-new/10.jpeg" data-holder-rendered="true" style="height: 300px; width: 100%; display: block;"> 
							<div class="caption"> 
								<h4>Hàng Mới</h4> 
								<p>25.000 đồng.</p> 
								<p>
									<a href="#" class="btn btn-primary" role="button">Thêm Giỏ</a> 
									<a href="#" class="btn btn-default" role="button">Mua Ngay</a>
								</p> 	
							</div> 
						</div> 
					</div> 
					<div class="col-sm-6 col-md-3"> 
						<div class="thumbnail"> 
							<img alt="New Comic" src="images/product-new/11.jpeg" data-holder-rendered="true" style="height: 300px; width: 100%; display: block;"> 
							<div class="caption"> 
								<h4>Hàng Mới</h4> 
								<p>25.000 đồng.</p> 
								<p>
									<a href="#" class="btn btn-primary" role="button">Thêm Giỏ</a> 
									<a href="#" class="btn btn-default" role="button">Mua Ngay</a>
								</p> 	
							</div> 
						</div> 
					</div>
					<div class="col-sm-6 col-md-3"> 
						<div class="thumbnail"> 
							<img alt="New Comic" src="images/product-new/12.jpeg" data-holder-rendered="true" style="height: 300px; width: 100%; display: block;"> 
							<div class="caption"> 
								<h4>Hàng Mới</h4> 
								<p>25.000 đồng.</p> 
								<p>
									<a href="#" class="btn btn-primary" role="button">Thêm Giỏ</a> 
									<a href="#" class="btn btn-default" role="button">Mua Ngay</a>
								</p> 	
							</div> 
						</div> 
					</div>
				</div>
			</div>
			
			<div class="bs-example" data-example-id="thumbnails-with-custom-content"> 
				<h3>Danh Mục 4</h3>
				<div class="row"> 
					<div class="col-sm-6 col-md-3"> 
						<div class="thumbnail"> 
							<img alt="New Comic" src="images/product-new/13.jpeg" data-holder-rendered="true" style="height: 300px; width: 100%; display: block;"> 
							<div class="caption"> 
								<h4>Hàng Mới</h4> 
								<p>25.000 đồng.</p> 
								<p>
									<a href="#" class="btn btn-primary" role="button">Thêm Giỏ</a> 
									<a href="#" class="btn btn-default" role="button">Mua Ngay</a>
								</p> 	
							</div> 
						</div> 
					</div> 
					<div class="col-sm-6 col-md-3"> 
						<div class="thumbnail"> 
							<img alt="New Comic" src="images/product-new/14.jpeg" data-holder-rendered="true" style="height: 300px; width: 100%; display: block;"> 
							<div class="caption"> 
								<h4>Hàng Mới</h4> 
								<p>25.000 đồng.</p> 
								<p>
									<a href="#" class="btn btn-primary" role="button">Thêm Giỏ</a> 
									<a href="#" class="btn btn-default" role="button">Mua Ngay</a>
								</p> 	
							</div> 
						</div> 
					</div> 
					<div class="col-sm-6 col-md-3"> 
						<div class="thumbnail"> 
							<img alt="New Comic" src="images/product-new/15.jpeg" data-holder-rendered="true" style="height: 300px; width: 100%; display: block;"> 
							<div class="caption"> 
								<h4>Hàng Mới</h4> 
								<p>25.000 đồng.</p> 
								<p>
									<a href="#" class="btn btn-primary" role="button">Thêm Giỏ</a> 
									<a href="#" class="btn btn-default" role="button">Mua Ngay</a>
								</p> 	
							</div> 
						</div> 
					</div>
					<div class="col-sm-6 col-md-3"> 
						<div class="thumbnail"> 
							<img alt="New Comic" src="images/product-new/16.jpeg" data-holder-rendered="true" style="height: 300px; width: 100%; display: block;"> 
							<div class="caption"> 
								<h4>Hàng Mới</h4> 
								<p>25.000 đồng.</p> 
								<p>
									<a href="#" class="btn btn-primary" role="button">Thêm Giỏ</a> 
									<a href="#" class="btn btn-default" role="button">Mua Ngay</a>
								</p> 	
							</div> 
						</div> 
					</div>
				</div>		
			</div>
			<div class="bs-example" data-example-id="thumbnails-with-custom-content"> 
				<h3>Danh Mục 5</h3>
				<div class="row"> 
					<div class="col-sm-6 col-md-3"> 
						<div class="thumbnail"> 
							<img alt="New Comic" src="images/product-new/17.jpeg" data-holder-rendered="true" style="height: 300px; width: 100%; display: block;"> 
							<div class="caption"> 
								<h4>Hàng Mới</h4> 
								<p>25.000 đồng.</p> 
								<p>
									<a href="#" class="btn btn-primary" role="button">Thêm Giỏ</a> 
									<a href="#" class="btn btn-default" role="button">Mua Ngay</a>
								</p> 	
							</div> 
						</div> 
					</div> 
					<div class="col-sm-6 col-md-3"> 
						<div class="thumbnail"> 
							<img alt="New Comic" src="images/product-new/18.jpeg" data-holder-rendered="true" style="height: 300px; width: 100%; display: block;"> 
							<div class="caption"> 
								<h4>Hàng Mới</h4> 
								<p>25.000 đồng.</p> 
								<p>
									<a href="#" class="btn btn-primary" role="button">Thêm Giỏ</a> 
									<a href="#" class="btn btn-default" role="button">Mua Ngay</a>
								</p> 	
							</div> 
						</div> 
					</div> 
					<div class="col-sm-6 col-md-3"> 
						<div class="thumbnail"> 
							<img alt="New Comic" src="images/product-new/19.jpeg" data-holder-rendered="true" style="height: 300px; width: 100%; display: block;"> 
							<div class="caption"> 
								<h4>Hàng Mới</h4> 
								<p>25.000 đồng.</p> 
								<p>
									<a href="#" class="btn btn-primary" role="button">Thêm Giỏ</a> 
									<a href="#" class="btn btn-default" role="button">Mua Ngay</a>
								</p> 	
							</div> 
						</div> 
					</div>
					<div class="col-sm-6 col-md-3"> 
						<div class="thumbnail"> 
							<img alt="New Comic" src="images/product-new/20.jpeg" data-holder-rendered="true" style="height: 300px; width: 100%; display: block;"> 
							<div class="caption"> 
								<h4>Hàng Mới</h4> 
								<p>25.000 đồng.</p> 
								<p>
									<a href="#" class="btn btn-primary" role="button">Thêm Giỏ</a> 
									<a href="#" class="btn btn-default" role="button">Mua Ngay</a>
								</p> 	
							</div> 
						</div> 
					</div>
				</div>
			</div>
			
			<div class="bs-example" data-example-id="thumbnails-with-custom-content"> 
				<h3>Danh Mục 6</h3>
				<div class="row"> 
					<div class="col-sm-6 col-md-3"> 
						<div class="thumbnail"> 
							<img alt="New Comic" src="images/product-new/21.jpeg" data-holder-rendered="true" style="height: 300px; width: 100%; display: block;"> 
							<div class="caption"> 
								<h4>Hàng Mới</h4> 
								<p>25.000 đồng.</p> 
								<p>
									<a href="#" class="btn btn-primary" role="button">Thêm Giỏ</a> 
									<a href="#" class="btn btn-default" role="button">Mua Ngay</a>
								</p> 	
							</div> 
						</div> 
					</div> 
					<div class="col-sm-6 col-md-3"> 
						<div class="thumbnail"> 
							<img alt="New Comic" src="images/product-new/22.jpeg" data-holder-rendered="true" style="height: 300px; width: 100%; display: block;"> 
							<div class="caption"> 
								<h4>Hàng Mới</h4> 
								<p>25.000 đồng.</p> 
								<p>
									<a href="#" class="btn btn-primary" role="button">Thêm Giỏ</a> 
									<a href="#" class="btn btn-default" role="button">Mua Ngay</a>
								</p> 	
							</div> 
						</div> 
					</div> 
					<div class="col-sm-6 col-md-3"> 
						<div class="thumbnail"> 
							<img alt="New Comic" src="images/product-new/23.jpeg" data-holder-rendered="true" style="height: 300px; width: 100%; display: block;"> 
							<div class="caption"> 
								<h4>Hàng Mới</h4> 
								<p>25.000 đồng.</p> 
								<p>
									<a href="#" class="btn btn-primary" role="button">Thêm Giỏ</a> 
									<a href="#" class="btn btn-default" role="button">Mua Ngay</a>
								</p> 	
							</div> 
						</div> 
					</div>
					<div class="col-sm-6 col-md-3"> 
						<div class="thumbnail"> 
							<img alt="New Comic" src="images/product-new/24.jpeg" data-holder-rendered="true" style="height: 300px; width: 100%; display: block;"> 
							<div class="caption"> 
								<h4>Hàng Mới</h4> 
								<p>25.000 đồng.</p> 
								<p>
									<a href="#" class="btn btn-primary" role="button">Thêm Giỏ</a> 
									<a href="#" class="btn btn-default" role="button">Mua Ngay</a>
								</p> 	
							</div> 
						</div> 
					</div>
				</div>		
			</div>
		<!-- Product List -->
		</div>
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

