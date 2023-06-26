@extends('layout_user')
@section('content')
<div class="container">
    <div class=" row">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="SCBH.html"><i class="fa fa-home"></i> Trang chủ</a></li>
            <li class="breadcrumb-item"><a href="sanpham.html">Phim Đang Chiếu</a></li>
            <li class="breadcrumb-item active" aria-current="page">Chi tiết</li>
          </ol>
        </nav>
    </div>
    <div class="row productbox">
        <div class="col-sm-9">
            <div class="row">
                <div class="col-sm-6">
                    @foreach ($phim as $film)
                    <section class="box-image">
                        <a href="">
                            <img src="/images/{{$film->hinh}}" width="245px" height="350px"/>
                        </a>
                    </section>
                </div>
                <div class="col-sm-6">
                    <section class="box-info">
                        <h1 class="name"><b>{{$film->tenphim}}</b></h1>

                         <ul style="font-size:16px">
                            <li><b>Đạo diễn: </b>{{$film->daodien}}</li>
                            <P><b>Nội dung: </b>{{$film->noidung}}</P>
                            <li><b>Thời lượng: </b>{{$film->thoiluong}} phút</li>

                        </ul>

                        <p class="btnorder">
                            <a href="{{URL::to('/suatchieu/'.$film->id)}}">  <button type="button" class="btn btn-primary">Mua vé</button></a>
                            <a href="/images/trailer.mp4"><button type="button" class="btn btn-warning">Trailer</button></a>
                        </p>

                    </section>
                </div>
            </div>
            @endforeach
        </div>


@endsection
