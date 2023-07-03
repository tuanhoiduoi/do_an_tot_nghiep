@extends('layout_user')
@section('content')

@foreach ($schieu as $film)

<div class="top2 row">
    <div class="col-6" style="">
        <a> <b>{{$film->tenrap }}</b></a>
    </div>
</div>
<nav class="menu row" >

    <div class="logo col-3">

    </div>
    <div class="col-6 float-right   mt-4">
         <div class="dropdown" style="display:inline-block">
            <a href="/ghe/{{$film->id}}"><button type="button"> {{$film->thoigian}}</button></a>
            </div>
        </div>

    </div>


</nav>

</div>
@endforeach

@endsection
