@extends('layout_user')
@section('content')
@foreach ($schieu as $tenrap=>$lst)
<div class="top2 row">
    <div class="col-6" style="">
        <a> <b>{{$tenrap}}</b></a>
    </div>
</div>
<nav class="menu row" >

    <div class="logo col-3">

    </div>
    <div class="col-6 float-right   mt-4">
         <div class="dropdown" style="display:inline-block">
            @foreach ($lst as $suat)
            <a href="/ghe/{{$suat->id}}"><button type="button"> {{$suat->thoigian}}</button></a>
            @endforeach
        </div>
        </div>

    </div>


</nav>

</div>
@endforeach

@endsection
