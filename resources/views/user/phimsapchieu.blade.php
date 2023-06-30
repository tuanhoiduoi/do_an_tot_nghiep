@extends('layout_user')
@section('content')
		<section>
			<h2 class="title text-center">
				<a href="">Phim Sắp Chiếu</a>
			</h2>
            <div class="col-sm-12"  >
                @foreach ($phim as $fil)

                    <div class="item " class="col-sm-3" >
                            <div class="image">
                                <a href="{{URL::to('/ctphim/'.$fil->id)}}">
                                    <img src="/images/{{$fil->hinh}}"/>
                                </a>
                            </div>
                            <div class="name">
                                <p>{{$fil->tenphim}}</p>
                            </div>
                            <div class="boxprice">
                                {{-- <span class="price">
                                    <a href="{{URL::to('/ctphim/'.$fil->id)}}"></a>
                                </span> --}}
                            </div>
                        </div>

                    @endforeach
            </div>

</main>
@endsection
