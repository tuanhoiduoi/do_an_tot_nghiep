@extends('layout_user')
@section('content')

@foreach ($schieu as $film)
<div class="top2 row">
    <div class="col-6" style="">

        <a> <b>{{$film->tenrap}}</b></a>
    </div>
</div>
<nav class="menu row" >

    <div class="logo col-3">

    </div>
    <div class="col-6 float-right   mt-4">


         <div class="dropdown" style="display:inline-block">
            <a href=""><button type="button"> {{$film->thoigian}}</button></a>
            </div>

        </div>

    </div>


</nav>
</div>
@endforeach
{{-- <div class="top2 row">
    <div class="col-6" style="">

        <a> <b>Aeon Tân Bình</b></a>
    </div>
</div>
<nav class="menu row" >

    <div class="logo col-3">

    </div>
    <div class="col-6 float-right   mt-4">


         <div class="dropdown" style="display:inline-block">
            <a href=""><button type="button"> 12:00</button></a>
            <a href=""><button type="button"> 12:00</button></a>
            <a href=""><button type="button"> 12:00</button></a>
            </div>


        </div>

    </div>


</nav>
</div>
<div class="top2 row">
    <div class="col-6" style="">

        <a> <b>Nguyễn Du</b></a>
    </div>
</div>
<nav class="menu row" >

    <div class="logo col-3">

    </div>
    <div class="col-6 float-right   mt-4">


         <div class="dropdown" style="display:inline-block">
            <a href=""><button type="button"> 12:00</button></a>

            </div>


        </div>

    </div>


</nav>
</div> --}}
@endsection
