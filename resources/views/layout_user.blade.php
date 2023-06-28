<!doctype html>
<html>
<head>
	<meta charset="utf-8"/>
	<link href="/vendor/fontawesome/css/all.min.css" rel="stylesheet"/>
	<link href="/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet"/>
	<link href="/css/style.css" rel="stylesheet"/>
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet" />
    @yield('css')
	<script src="/js/jquery-3.5.1.min.js"></script>
	<script src="/js/popper.min.js"></script>
	<script src="/vendor/bootstrap/js/bootstrap.min.js"></script>
    @yield('js')
</head>
<body>

	<header class="container-fluid">
			<div class="top row">
				<div class="col-6">
					<a href=""><i  class="fa fa-phone"></i> 022444454</a>
					<a href=""><i  class="fa fa-envelope"></i> galaxy@gmail.com</a>
					<a href=""><i  class="fa fa-clock"></i> Phục vụ: 8h-23h cả CN & ngày lễ</a>
				</div>
				<div class="col-6 text-right">
					<a href=""><i  class="fas fa-user-alt"></i> Đăng nhập</a>
					<a href=""><i  class="social fab fa-facebook-square"></i></a>
					<a href=""><i  class="social fab fa-twitter"></i></a>
					<a href=""><i  class="social fab fa-instagram"></i></a>

				</div>
			</div>
			<nav class="menu row">
				<div class="logo col-3">
					<a href=""><img src="/images/logo1.jpg" width="150" height="50" alt=""/></a>
				</div>
				<div class="col-6 float-right   mt-4">
					<a href="Home.html"><i class="fa fa-home"></i> Trang chủ</a>
					<a href="gioithieu.html">Giới thiệu</a>
					<div class="dropdown" style="display:inline-block">
						<a href="" class="dropdown-toggle" data-toggle="dropdown">Phim</a>
						<div class="dropdown-content text-center">
							<a class="dropdown-item" href="/phim">Phim Đang Chiếu</a>
							<a class="dropdown-item" href="/phim2">Phim Sắp Chiếu</a>
						</div>
					</div>
					<!-- <div class="dropdown" style="display:inline-block">
						<a href="" class="dropdown-toggle" data-toggle="dropdown">Thông tin</a>
						<div class="dropdown-content text-center">
							<a class="dropdown-item" href="chinhanh1.html">Rạp</a>
							<a class="dropdown-item" href="diachi.html">Giá vé</a>
							<a class="dropdown-item" href="chinhanh3.html">Sự kiện</a>
						</div> -->
						<div class="dropdown" style="display:inline-block">
                            <a href="" class="dropdown-toggle" data-toggle="dropdown">Rạp</a>
                            <div class="dropdown-content text-center">
                                <a class="dropdown-item" href="">Chi Nhánh 1</a>
                                <a class="dropdown-item" href="">Chi Nhánh 2</a>
                            </div>
                        </div>

					</div>

				</div>

				 <div class="box col-3 text-right" style="padding:20px 0px 0px 20px">
					<form  action="{{URL('/timkiem')}}" method="Get">
						<div class="input-group mb-3" style="padding: 15px 0px 0px 0px">
							<input name="timkiem" style="background: #f9f9f9;border-color: #007bff;"type="text" class="form-control" placeholder="Phim Cần Tìm...">
							<div class="input-group-append">
								<button type="submit" style="background: #007bff;color: #000;border-color: #007bff;"class="input-group-text">Tìm kiếm</button>
							</div>
						</div>
					 </form>
				</div>
			</nav>
	</header>
	<main>
        @yield('content')

	</main>
	<footer class="container-fluid text-white"style="background:#021c3a;">
		<div class="text-center  pt-5 pb-5">
			 <a href=""><img src="/images/logo01.png" height="100px"/></a><br>
			 <strong>UY TÍN LÀ SỐ 1	</strong>
			<hr color="white" width="80%" align="center" />
		</div>
		<div class="row " style="padding:0px 20px 10px 40px">
			   <div class="col-sm-3" style="padding:0px 10px 0px 0px">
					<p><h3 >HỆ THỐNG RẠP</h3></p>
					<p class="text-center">
						<p>Chi nhánh 1:<a href=""> 718bis Kinh Dương Vương, Q.6, Tp. Hồ Chí Minh</a></p>
						<p>Chi nhánh 2:<a href=""> 246 Nguyễn Hồng Đào, Q.Tân Bình, Tp. Hồ Chí Minh</a></p>
						<p>Chi nhánh 3:<a href=""> 116 Nguyễn Du, Q.1, Tp. Hồ Chí Minh</a></p>
					</p>
			   </div>
			   <div class="col-sm-3 mt-3">
					<h3>Hotline</h3>
					<p>
						<i  class="fa fa-phone"></i><a href=""> 0793333353</a>
					</p>
					<p>
						<i  class="fa fa-phone"></i><a href=""> 0701111101</a>
					</p>
					<p>
						<i  class="fa fa-phone"></i><a href=""> 0228888828</a>
					</p>
				</div>
			   <div class="col-sm-3  mt-3">
					<a href="" class="text-white" ><h3 class="h5">Chính Sách Tuyển Dụng</h3></a>
							<ul>
								<li><a href="" >Chính Sách Đổi Trả</a></li>
								 <li><a href="">Chính Sách Hoàn Tiền</a></li>
								<li><a href="" >Chính Sách Thanh Toán</a></li>
							</ul>
			   </div>
			   <div class="col-sm-3  mt-3">
					<a href="" class="text-white"><h3 class="h5">Đăng ký thông tin</h3></a>
					<p>
						Hãy đăng ký để được tặng mã giảm giá hoặc thông tin khuyến mãi
					</p>
					<p>
						<form>
						  <div class="input-group mb-3">
							<input style="background: #ffffff30;color: #000;border: none;"type="text" class="form-control" placeholder="Your Email">
							<div class="input-group-append">
							  <span style="background: #ffffff3d;color: #f1ff00;border: none;"class="input-group-text">@example.com</span>
							</div>
						  </div>
						</form>
					</p>
			   </div>
		</div>
		 <div class="main-footer-copyright text-center"style="border-top:1px solid #ddd">
			<p>Tên Doanh Nghiệp: Cinema <br>
			MST/ĐKKD/QĐTL: 41X8027709 - Cấp ngày 28/09/2016 <br>
			Công Ty Cổ Phần Phim Thiên Ngân, Tầng 3, Toà Nhà Bitexco Nam Long, 63A Võ Văn Tần, P. Võ Thị Sáu, Quận 3, Tp. Hồ Chí Minh</p>
			<a rel="nofollow" href=""><img height="60px" src="/images/dtb.png"></a>
		</div>
	</footer>
</body>
</html>
