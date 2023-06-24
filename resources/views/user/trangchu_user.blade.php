@extends('layout_user')
@section('content')
@extends('layout_user')
@section('content')
<section style="padding:30px 0px 20px 40px;background:#d0d0d6" >
    <div class="confider row text-white pt-3 pb-3 ">
        <div class="col-sm-7" >
                <div id="" class="carousel slide" data-ride="carousel" data-interval="2000">
                  <ul class="carousel-indicators">
                        <li data-target="#" data-slide-to="0" class="active"></li>
                        <li data-target="#" data-slide-to="1" ></li>
                        <li data-target="#" data-slide-to="2" ></li>
                  </ul>
                  <div class="carousel-inner"style="max-width:100%">
                        <div class="carousel-item active">
                            <a href="/sp1"><img src="images/anh3.jpg" /></a>
                        </div>
                        <div class="carousel-item " >
                          <img src="/images/10.png" width="300px"/>
                        </div>
                        <div class="carousel-item" >
                          <img src="/images/15.png"/>
                        </div>
                  </div>
                  <a class="carousel-control-prev" href="#" data-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                  </a>
                  <a class="carousel-control-next" href="#" data-slide="next">
                    <span class="carousel-control-next-icon"></span>
                  </a>
                </div>

        </div>
        <div class="col-sm-5 mb-5">
            <div class="col-sm-6 mb-3">
                <a href="/sp1"><img src="images/anh4.jpg" height="300px"/></a>
            </div>
            <div class="col-sm-6 mt-3">
                <a href="/sp1"><img src="images/anh5.jpg" height="300px"/></a>
            </div>

        </div>
    </div>
</section>
<section class="info-review">
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
</section>
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
@endsection

@endsection
