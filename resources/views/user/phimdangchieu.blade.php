@extends('layout_user')
@section('content')
		<section>
			<h2 class="title text-center">
				<a href="">PHIM ĐANG CHIẾU</a>
			</h2>
            <div class="col-sm-15"  >
                @foreach ($phim as $fil)
                    <div class="item " class="col-sm-3" >
                            <div class="image">
                                <a href="">
                                    <img src="/images/{{$fil->hinh}}" height="350px"/>
                                </a>
                            </div>
                            <div class="name">
                                <p>{{$fil->tenphim}}</p>
                            </div>
                            <div class="boxprice">
                                <span class="price">
                                    <a href="{{URL::to('/ctphim/'.$fil->id)}}"><strong>Mua Vé</strong></a>
                                </span>
                            </div>
                        </div>

                    @endforeach
            </div>

</main>
@endsection
