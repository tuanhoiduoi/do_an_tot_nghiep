@extends('trangchu_admin')
@section('content')
{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/4.3.0/chart.min.js"
integrity="sha512-mlz/Fs1VtBou2TrUkGzX4VoGvybkD9nkeXWJm3rle0DPHssYYx4j+8kIS15T78ttGfmOjH0lLaBXGcShaVkdkg=="
crossorigin="anonymous" referrerpolicy="no-referrer"></script> --}}

    <h4>Thông Kê doanh thu</h4>
   </p><form action="{{URL('/tke')}}" >
    Chọn tháng (trong khoảng từ 1 tới 12):
    <input type="number" name="thang" min="1" max="12">
    <button type="submit" >Xác nhận</button>
    {{-- Chọn năm:
    <input type="number" name="quantity">
    <input type="submit" > --}}

    </form>
{{-- @foreach ($thongkes as $thongke) --}}

     <div class="row">
        <div class="col-md-4 order-md-2 mb-4">
            <h4 class="d-flex justify-content-between align-items-center mb-3">
                <span class="text-muted"></span>
                <span class="badge badge-secondary badge-pill"></span>
            </h4>
            <ul class="list-group mb-3">


                <li class="list-group-item d-flex justify-content-between lh-condensed">
                    {{-- <div>
                        <h6 class="my-0">Apple Ipad 4 Wifi 16GB</h6>
                        <small class="text-muted">11800000.00 x 2</small>
                    </div> --}}
                    <span class="text-muted">{{$tongtien}}VND</span>
                </li>

            </ul>
            >

        </div>
        {{-- @endforeach --}}


@endsection()
