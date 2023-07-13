@extends('layout_user')
@section('content')
<div class="container">
    <div class=" row">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/3"><i class="fa fa-home"></i> Trang chủ</a></li>
            <li class="breadcrumb-item"><a href="/phim">Phim </a></li>
            <li class="breadcrumb-item active" aria-current="page">Chi tiết</li>
          </ol>
        </nav>
    </div>
    <div class="row productbox">
        <div class="col-sm-9">
            @foreach ($phim as $film)
            <div class="row ">
                <div class="col-sm-6">

                    <section class="box-image">
                        <a href="">
                            <img src="/images/{{$film->hinh}}" width="245px" height="350px"/>
                        </a>
                    </section>
                </div>
                <div class="col-sm-6" style="font-family: Times New Roman, Times, serif; ">
                    <section class="box-info">
                        <h1 class="name"><b>{{$film->tenphim}}</b></h1>

                         <ul style="font-size:16px">
                            <li><b>Đạo diễn: </b>{{$film->daodien}}</li>

                            <li><b>Thời lượng: </b>{{$film->thoiluong}} phút</li>

                        </ul>

                        <p class="btnorder">
                            <a href="/suatchieu/{{$film->id}}"> <button type="button" class="btn btn-primary">Mua vé</button></a>
                            <a href="/images/trailer.mp4"><button type="button" class="btn btn-warning">Trailer</button></a>
                        </p>

                    </section>
                </div>
            </div>


        </div>
        <p  style="font-family: Times New Roman, Times, serif;padding-top:20px;padding-bottom:20px" >
            <b>Nội dung: </b>{{$film->noidung}}</p>
        @endforeach
@endsection
