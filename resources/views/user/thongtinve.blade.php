@extends('layout_user')
@section('content')
@extends('layout_user')
@section('content')
<div class="container">
    <div class=" row">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item active " aria-current="page"><i class="fa fa-home"></i>Thông tin vé</a></li>
            {{-- <li class="breadcrumb-item"><a href="">Phim Đang Chiếu</a></li>
            <li class="breadcrumb-item"><a href="">Phim Đang Chiếu</a></li>
            <li class="breadcrumb-item"><a href="">Phim Đang Chiếu</a></li>
            <li class="breadcrumb-item active" aria-current="page">Thông tin vé</li> --}}
          </ol>
        </nav>
    </div>
    <div class="row productbox">
        <div class="col-sm-9">
            {{-- @foreach ($phim as $film) --}}
            <div class="row">
                <div class="col-sm-6">

                    <section class="box-image">
                        <a href="">
                            <img src="" width="245px" height="350px"/>
                        </a>
                    </section>
                </div>
                <div class="col-sm-6">
                    <section class="box-info">
                        <h1 class="name"><b></b></h1>

                         <ul style="font-size:16px">
                            <li><b></li>

                            <li><b></li>

                        </ul>

                        <p class="btnorder">
                            <a href=""> <button type="button" class="btn btn-primary">Thanh Toán</button></a>
                            {{-- <a href="/images/trailer.mp4"><button type="button" class="btn btn-warning">Trailer</button></a> --}}
                        </p>

                    </section>
                </div>
            </div>


        </div>

        {{-- @endforeach --}}
@endsection

@endsection
