<!doctype html>
<html>
<head>
    <meta charset="utf-8"/>


	<link href="/vendor/fontawesome/css/all.min.css" rel="stylesheet"/>
	<link href="/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet"/>
	<link href="/css/style.css" rel="stylesheet"/>
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet" />
    @yield('css')
	<script src="/js/jquery-3.7.0.min.js"></script>
	<script src="/js/bootstrap.bundle.min.js"></script>
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
                    <ul class="navbar-nav flex-row ms-auto align-items-center justify-content-end">

                        @if (Session::get('sdt'))
                        <li class="nav-item dropdown">
                          <a class="nav-link nav-icon-hover" href="javascript:void(0)" id="drop2" data-bs-toggle="dropdown"
                            aria-expanded="false">

                            <img src="/admin/assets/images/profile/user-1.jpg" alt="" width="35" height="35" class="rounded-circle">
                          </a>
                          <div class="dropdown-menu dropdown-menu-end dropdown-menu-animate-up" aria-labelledby="drop2">
                            <div class="message-body2">
                                    {{-- <input type="hidden" name="concac" value="{{(Auth::user()->id)}}"> --}}
                                <a href="{{url('/giaodich')}}/{{(Auth::user()->id)}}" class="btn btn-danger" style="width:170px; " >Lịch sử giao dịch</a>
                          </div>
                          <div class="message-body"  style="padding-top:10px;">
                            <a href="{{route('logout')}}" class="btn btn-primary" style="width:170px;">Logout</a>
                          </div>
                          @else
                          <a href="{{url('/dangnhap')}}"> Đăng nhập</a>
                          @endif
                        </li>
                      </ul>

				</div>
			</div>
			<nav class="menu row">
				<div class="logo col-3">
					<a href=""><img src="/images/logo1.jpg" width="150" height="50" alt=""/></a>
				</div>
				<div class="col-6 float-right   mt-4" style="font-family: Tahoma, serif;"       >
					<a href="/trangchu"><i class="fa fa-home"></i> Trang chủ</a>
					<a href="/gioithieu">Giới thiệu</a>
                    <a href="/phim">Phim</a>
					{{-- <div class="dropdown" style="display:inline-block">
						<a href="" class="dropdown-toggle" data-toggle="dropdown">Phim</a>
						<div class="dropdown-content text-center">
							<a class="dropdown-item" href="/phim">Phim Đang Chiếu</a>
							<a class="dropdown-item" href="/phim2">Phim Sắp Chiếu</a>
						</div>
					</div> --}}


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
	<footer class="container-fluid text-white"style="background:#222222;">

		<div class="row "  style="font-family: Courier New, monospace; padding:0px 20px 10px 40px ">
			   <div class="col-sm-3" style="padding:0px 10px 0px 0px">
					<p ><h4  style="font-family: Courier New, monospace" >HỆ THỐNG RẠP</h4></p>

                    <ul class="footer__nav" style="text-align: center">

                        <ul class="nav__ul" style="font-family: Courier New, monospace">

                            <p>Chi nhánh 1:<a href=""> 718bis Kinh Dương Vương, Q.6, Tp. Hồ Chí Minh</a></p>
						<p>Chi nhánh 2:<a href=""> 246 Nguyễn Hồng Đào, Q.Tân Bình, Tp. Hồ Chí Minh</a></p>
						<p>Chi nhánh 3:<a href=""> 116 Nguyễn Du, Q.1, Tp. Hồ Chí Minh</a></p>

                        </ul>

                  </ul>
			   </div>
			   <div class="col-sm-3 mt-3" style="text-align: center;">
                <h4 class="nav__title" style="font-family: Courier New, monospace;">HOTLINE</h4>
                <div class="footer__nav" style="text-align: center">

                      <ul class="nav__ul" style="font-size: 18px; font-family: Courier New, monospace">

                          <a >0359204531 </a><br>

                          <a >0348408761</a><br>

                          <a >0159236478</a><br>
                      </ul>

                </div>
				</div>
			    <div class="col-sm-3 mt-3" style="text-align: center;">
                    <h4 class="nav__title" style="font-family: Courier New, monospace;">CHÍNH SÁCH BẢO MẬT</h4>
                    <div class="footer__nav" style="text-align: center">

                          <ul class="nav__ul" style="font-family: Courier New, monospace">

                              <a >CHÍNH SÁCH BẢO MẬT</a><br>

                              <a >QUY CHẾ HOẠT ĐỐNG</a><br>

                              <a >THỎA MÃN SỬ DỤNG</a><br>
                          </ul>

                    </div>
                    </div>
			   <div class="col-sm-3  mt-3" >
					<a href="" class="text-white"><h3 class="h5" style="font-family: Courier New, monospace;">Đăng ký thông tin</h3></a>
					<p style="font-family: Courier New, monospace">
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
        {{-- để lại --}}
		 <div class="main-footer-copyright text-center"style="border-top:1px solid #ddd;font-family: Courier New, monospace">
			<p>Tên Doanh Nghiệp: Cinema <br>
			MST/ĐKKD/QĐTL: 41X8027709 - Cấp ngày 28/09/2016 <br>
			Công Ty Cổ Phần Phim Thiên Ngân, Tầng 3, Toà Nhà Bitexco Nam Long, 63A Võ Văn Tần, P. Võ Thị Sáu, Quận 3, Tp. Hồ Chí Minh</p>
			<a rel="nofollow" href=""><img height="60px" src="/images/dtb.png"></a>
		</div>
	</footer>
</body>
</html>
