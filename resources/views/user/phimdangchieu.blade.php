@extends('layout_user')
@section('content')
<div class="container">
    <div class=" row">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/3"><i class="fa fa-home"></i> Trang chủ</a></li>
            <li class="breadcrumb-item active" aria-current="page">Phim</li>
          </ol>
        </nav>
    </div>
		<section>
			<h2 class="title text-center">
				{{-- <p>PHIM ĐANG CHIẾU</p> --}}
			</h2>
            <div class="image-contraiter"  >
                @foreach ($phim as $fil)
                    <div class="item " class="col-sm-3" >
                            <div class="image">
                                <a href="{{URL::to('/ctphim/'.$fil->id)}}">
                                    <img src="/images/{{$fil->hinh}}" height="350px"/>
                                </a>
                                {{-- <div class="overlay">Mua Vé</div> --}}
                            </div>
                            <div class="name">
                                <p>{{$fil->tenphim}}</p>
                            </div>
                            <div class="boxprice">
                                {{-- <span class="price">
                                    <a href="{{URL::to('/ctphim/'.$fil->id)}}"><strong>Mua Vé</strong></a>
                                </span> --}}
                            </div>
                        </div>

                    @endforeach
            </div>

</main>
@endsection
