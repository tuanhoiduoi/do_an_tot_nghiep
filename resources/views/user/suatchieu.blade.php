@extends('layout_user')
<style>
    .button1{
        background-color: white;  color: black;
        border: 2px solid #000000;
         -webkit-transition-duration: 0.4s;
         transition-duration: 0.4s;

    }
    .button1:hover{
        background-color: rgb(226, 126, 11);
         color: rgb(7, 7, 7);
    }
</style>
@section('content')
<div class="container">
    <div class=" row">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/3"><i class="fa fa-home"></i> Trang chủ</a></li>
            <li class="breadcrumb-item"><a href="/phim">Phim </a></li>
            <li class="breadcrumb-item active" aria-current="page">Lịch chiếu</li>
          </ol>
        </nav>
    </div>
@foreach ($schieu as $tenrap=>$lst)
<div class="top1">
<div class="top2 row">
    <div class="col-6" >
        <a> <b>{{$tenrap}}</b></a>
    </div>
</div>
<nav class="menu row" >
    <div class="logo col-3">
        <h6>2D:Phụ Đề</h6>
    </div>
    <div class="col-6 float-right   mt-4">
         <div class="dropdown" style="display:inline-block">
            @foreach ($lst as $suat)
            <a href="/ghe/{{$suat->id}}"><button type="button"  class="button1" style="width:78%"> {{\Carbon\Carbon::createFromTimestamp(strtotime($suat->thoigian))->format('d-m-Y H:i')}}</button></a>
            @endforeach
        </div>
    </div>
</nav>
</div>

@endforeach

@endsection
