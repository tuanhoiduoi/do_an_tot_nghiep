@extends('layout_user')
@section('css')
 <link rel="stylesheet" href="/css/ghe.css">
@endsection
@section('js')
<script src="{{asset('js/disabled.js')}}"></script>
<script src="{{asset('js/taoghe.js')}}"></script>
<script src="{{asset('js/chonghe.js')}}"></script>
@endsection

@section('content')
<div class="nen">
<div class="image2" >
    <h2 class="title text-center">
        <p  >Màn Chiếu</p>
    </h2>
    {{-- <center>
        <img src="/images/smart-tv.png" height="400px" width="600px" />
    </center> --}}
    {{-- <div class="go-to-exit">
    <img src="/images/go-to-work.png" height="200px" width="100px" style=""/>
    <img src="/images/exit.png" height="200px" width="100px" align="right"/>
    </div> --}}
</div>

    {{-- @foreach ($ghe as $ghees)
        <a href="">{{$ghees->tenghe}}</a>
    @endforeach --}}
    <form action="{{url('/vnpay_payment')}}" method="POST">
        @csrf
        <input type="hidden" name="id_suat" value="{{$suat}}">
        <div class="ghe">
        <div id="chair" style="--rows: {{$dong}}; --cols: {{$cot}};" >
            @foreach ($ghe as $ghees)
                @if ($ghees ->bill_id == null)
                <input name="ghe[]" type="checkbox" class="btn-check" id="btn-{{$ghees->dong}}-{{$ghees->cot}}" value="{{$ghees->id}}" data-gia="{{$gia}}" data-ten="{{$ghees->tenghe}}" autocomplete="off">
                <label class="btn btn-outline-primary" for="btn-{{$ghees->dong}}-{{$ghees->cot}}" style="--row:{{$ghees->dong}};--col:{{$ghees->cot}}">{{$ghees->tenghe}}</label>
                @else
                <input disabled type="checkbox" class="btn-check" id="btn-{{$ghees->dong}}-{{$ghees->cot}}" value="{{$ghees->id}}" data-gia="{{$gia}}" data-ten="{{$ghees->tenghe}}" autocomplete="off">
                <label class="btn btn-warning" for="btn-{{$ghees->dong}}-{{$ghees->cot}}" style="--row:{{$ghees->dong}};--col:{{$ghees->cot}}">{{$ghees->tenghe}}</label>
                @endif
           @endforeach
        </div>
        <div class="title-ghe">
    <div >
        <p >Ghế: <span id="lst-ghe"></span></p>
    </div>
    <div>
        <p >Thành Tiền: <span id="thanh-tien"></span></p>
        <input type="hidden" name="total">
    </div>
    <span style="background:rgb(228, 240, 6)">Đã đặt</span> </p>
    <div>






    <button type="submit" name="redirect" class=" button2" value="">Thanh toán</button>

</form>
</div>
    {{-- </div>

    <div >
        <p  >Ghế: <span id="lst-ghe"></span></p>
    </div>
    <div>
        <p >Thành Tiền: <span id="thanh-tien"></span></p>
        <input type="hidden" name="total" value="">



    </div>

</form>
<div class="center">
    <h3>THÔNG TIN VÉ</h3>
    <form>
        <p >Ghế </p>
      <div class="inputbox">
        <span style=" width: 150px;
        height: 33px;
        boder-width: 2px;
        border-radius: 5px;
        border: solid;
        bg-color: brown;
        background: #f8f8f8;"
         id="lst-ghe"></span>
      </div>
      <p>Thành Tiền</p>
      <div class="inputbox">

        <span
             style=" width: 150px;
            height: 33px;
            boder-width: 2px;
            border-radius: 5px;
            border: solid;
            bg-color: brown;
            background: #f8f8f8;"

        name="total" id="thanh-tien"></span>
      </div>
      <div class="inputbox">
        <span
        style=" width: 15px;
        height: 15px;
        boder-width: 2px;
        border-radius: 5px;
        border: solid;
        background: #aaa8a86e;"

        name="total" id="thanh-tien">
         </span>
      </div>
      <div class="inputbox">
        <span
             style=" width: 15px;
            height: 15px;
            boder-width: 2px;
            border-radius: 5px;
            border: solid;
            background: #f8f8f8;"

        name="total" id="thanh-tien"></span>
      </div>
      <button type="submit" name="redirect" class=" button2" value="">Thanh toán</button>

    </form>
</div>
</div> --}}
@endsection

