@extends('layout_user')
@section('css')
 <link rel="stylesheet" href="/css/ghe.css">
@endsection
@section('js')
<script src="{{asset('js/taoghe.js')}}"></script>
<script src="{{asset('js/chonghe.js')}}"></script>
@endsection

@section('content')
<div class="image2" style="">
    <center>
        <img src="/images/smart-tv.png" height="400px" width="600px" />
    </center>
    <div class="go-to-exit">
    <img src="/images/go-to-work.png" height="200px" width="100px" style=""/>
    <img src="/images/exit.png" height="200px" width="100px" align="right"/>
    </div>
</div>

    {{-- @foreach ($ghe as $ghees)
        <a href="">{{$ghees->tenghe}}</a>
    @endforeach --}}
    <form action="">
    <div class="ghe">
    <div id="chair" style="--rows: {{$dong}}; --cols: {{$cot}};" >
        @foreach ($ghe as $ghees )
            <input name="ghe[]" type="checkbox" class="btn-check" id="btn-{{$ghees->dong}}-{{$ghees->cot}}" value="{{$ghees->id}}" data-gia="{{$gia}}" data-ten="{{$ghees->tenghe}}" autocomplete="off">
            <label class="btn btn-outline-primary" for="btn-{{$ghees->dong}}-{{$ghees->cot}}" style="--row:{{$ghees->dong}};--col:{{$ghees->cot}}">{{$ghees->tenghe}}</label>
            @endforeach
    </div>
    <div >
        <p  >Ghế: <span id="lst-ghe"></span></p>
    </div>
    <div>
        <p >Thành Tiền: <span id="thanh-tien"></span></p>
    </div>
    </div><button class="btn btn-success" type="submit">xac nhan</button>
</form>
@endsection
