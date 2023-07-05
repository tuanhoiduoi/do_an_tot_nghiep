@extends('layout_user')
@section('content')
<!doctype html>
<html lang="en">
  <head>
  	<title>Cimenas</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">

		<link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/4.5.6/css/ionicons.min.css">
		<link rel="stylesheet" href="css/style.css">
  </head>
  <body>
		<div class="home-slider owl-carousel js-fullheight">
      <div class="slider-item js-fullheight" style="background-image:url(images/slider1.jpg);">
      	<div class="overlay"></div>
        <div class="container">
          <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center">
	          <div class="col-md-12 ftco-animate">
	          	<div class="text w-100 text-center">
	          		<h2>The best place to go entertainment</h2>
		            <h1 class="mb-3">CINEMA</h1>
	            </div>
	          </div>
	        </div>
        </div>
      </div>

      <div class="slider-item js-fullheight" style="background-image:url(images/slider2.jpg);">
      	<div class="overlay"></div>
        <div class="container">
          <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center">
	          <div class="col-md-12 ftco-animate">
	          	<div class="text w-100 text-center">
	          		<h2>The best place to go entertainment</h2>
		            <h1 class="mb-3">CINEMA</h1>
	            </div>
	          </div>
	        </div>
        </div>
      </div>

      <div class="slider-item js-fullheight" style="background-image:url(images/slider3.jpg);">
      	<div class="overlay"></div>
        <div class="container">
          <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center">
	          <div class="col-md-12 ftco-animate">
	          	<div class="text w-100 text-center">
	          		<h2>The best place to go entertainment</h2>
		            <h1 class="mb-3">CINEMA</h1>
	            </div>
	          </div>
	        </div>
        </div>
      </div>
    </div>
    {{-- <section class="info-review">
        <div class="phu-kien text-center pt-3">
            <strong>GÓC ĐIỆN ẢNH</strong>
        </div>
        <div class="nhan row text-center pt-5 pb-5" >
            <div class="col-sm-3">
                <a href=""><img src="images/mau1.png" /></a><br>
                <strong>Diễn Viên</strong>
            </div>
            <div class="col-sm-3">
                <a href=""><img src="images/mau2.png" /></a><br>
                <strong>Điện Ảnh</strong>
            </div>
            <div class="col-sm-3">
                <a href=""><img src="images/mau3.png" /></a><br>
                <strong>Đạo Diễn</strong>
            </div>
            <div class="col-sm-3">
                <a href=""><img src="images/mau4.png" /></a><br>
                <strong>Bình Luận Phim</strong>
            </div>
        </div>
    </section> --}}
    <section class="mota text-white" style="background:linear-gradient(to right,#0a0809,#040102)">
        <div class="tieu-de text-center pt-3 pb-3">
            <strong> CINEMA</strong></h3>
            <hr color="white" width="30%" align ="center" />
        </div>
        <div class="confider row " >
            <div class="col-sm-5">
                <a href=""><img src="images/than5.jpg" height="250px"/></a><br>
            </div>
            <div class="col-sm-7">
                <div class=" row pt-3 pb-3 " >
                    <div class="col-sm-6">
                        <ul>
                            <p>
                            <strong><i class="far fa-check-circle"></i> Cinema</strong><br>
                            Cinema là một trong những công ty tư nhân đầu tiên về điện ảnh được thành lập từ năm 2003, đã khẳng định thương hiệu là 1 trong 10 địa điểm vui chơi giải trí được yêu thích nhất. Ngoài hệ thống rạp chiếu phim hiện đại, thu hút hàng triệu lượt người đến xem.
                            </p>
                            <p>
                            <strong><i class="far fa-check-circle"></i> Giờ đặt vé</strong><br>
                            Để mua vé, hãy vào tab Mua vé. Quý khách có thể chọn Mua vé theo phim, theo rạp, hoặc theo ngày. Sau đó, tiến hành mua vé theo các bước hướng dẫn. Chỉ trong vài phút, quý khách sẽ nhận được tin nhắn và email phản hồi Đặt vé thành công của Galaxy Cinema. Quý khách có thể dùng tin nhắn lấy vé tại quầy vé của Galaxy Cinema hoặc quét mã QR để một bước vào rạp mà không cần tốn thêm bất kỳ công đoạn nào nữa.
                            </p>
                        </ul>
                    </div>
                    <div class="col-sm-6">
                        <ul>
                            <p>

                            <strong><i class="far fa-check-circle"></i> Khuyễn mãi</strong><br>
                            Cinema luôn có những chương trình khuyến mãi, ưu đãi, quà tặng vô cùng hấp dẫn như giảm giá vé, tặng vé xem phim miễn phí, tặng Combo, tặng quà phim…  dành cho các khách hàng.
                            </p>
                            <p>
                            <strong><i class="far fa-check-circle"></i> Phát triển</strong><br>
                            Hiện nay, Cinema đang ngày càng phát triển hơn nữa với các chương trình đặc sắc, các khuyến mãi hấp dẫn, đem đến cho khán giả những bộ phim bom tấn của thế giới và Việt Nam nhanh chóng và sớm nhất.
                            </p>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>
@endsection()
