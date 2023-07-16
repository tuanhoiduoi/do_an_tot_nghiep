@extends('layout_user')
@section('css')
    <style>
        .legend {
            display: flex;
            align-items: center;
        }

        .seat {
            width: 20px;
            height: 20px;
            margin-right: 10px;
            border-radius: 5px;
        }

        .available {
            background-color: #e3d216;
        }

        .selected {
            background-color: #0f85f3;
        }

        .occupied {
            background-color: #ffffff;
            border: 1px solid #0f85f3;
        }
    </style>
    <link rel="stylesheet" href="/css/ghe.css">
@endsection
@section('js')
    <script src="{{ asset('js/taoghe.js') }}"></script>
    <script src="{{ asset('js/chonghe.js') }}"></script>
@endsection
@section('content')
    @if (session('message'))
        <div class="alert alert-danger">
            {{ session('message') }}
        </div>
    @endif
    <div class="nen">
        <div class="image2"  >
            <h2 class="title text-center " >
                <p >MÀN HÌNH</p>
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
        <form action="{{ url('/vnpay_payment') }}" method="POST">
            @csrf
            {{-- <input type="hidden" name="id_suat" value="{{$suat}}"> --}}
            <div class="maxwidth">
                <div class="row pb-5">
                    <div class="col-md-9">
                        <div class="ghe">
                            <div id="chair" style="--rows: {{ $dong }}; --cols: {{ $cot }};">
                                @foreach ($ghe as $ghees)
                                    @if ($ghees->bill_id == null)
                                        <input name="ghe[]" type="checkbox" class="btn-check"
                                            id="btn-{{ $ghees->dong }}-{{ $ghees->cot }}" value="{{ $ghees->id }}"
                                            data-gia="{{ $gia }}" data-ten="{{ $ghees->tenghe }}" autocomplete="off">
                                        <label class="btn btn-outline-primary"
                                            for="btn-{{ $ghees->dong }}-{{ $ghees->cot }}"
                                            style="--row:{{ $ghees->dong }};--col:{{ $ghees->cot }}">{{ $ghees->tenghe }}</label>
                                    @else
                                        <input disabled type="checkbox" class="btn-check"
                                            id="btn-{{ $ghees->dong }}-{{ $ghees->cot }}" value="{{ $ghees->id }}"
                                            data-gia="{{ $gia }}" data-ten="{{ $ghees->tenghe }}" autocomplete="off">
                                        <label class="btn btn-warning" for="btn-{{ $ghees->dong }}-{{ $ghees->cot }}"
                                            style="--row:{{ $ghees->dong }};--col:{{ $ghees->cot }}">{{ $ghees->tenghe }}</label>
                                    @endif
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">

                        <div class="title-ghe">
                            <div>
                                <p><b>Thành Tiền: </b></p>
                                <p style="  text-align: center; color: rgb(11, 11, 10);" id="thanh-tien"></p>
                                <input type="hidden" name="total">
                                <h2 class="title text-center-1">
                                </h2>
                                <p><b>Ghế: </b></p>
                                <span id="lst-ghe"></span>
                                <h2 class="title text-center-1">
                                </h2>
                            </div>
                            <div>
                                <div class="legend">
                                    <div class="seat available"></div>
                                    <span>Ghế đã được đặt</span>
                                </div>
                                <div class="legend">
                                    <div class="seat selected"></div>
                                    <span>Ghế đang chọn</span>
                                </div>
                                <div class="legend">
                                    <div class="seat occupied"></div>
                                    <span>Ghế trống</span>
                                </div>
                            </div>
                            <button type="submit" name="redirect" class=" button2" value=""><b>Thanh toán</b></button>
                        </div>
                    </div>
                </div>
            </div>

        </form>
    </div>
@endsection
