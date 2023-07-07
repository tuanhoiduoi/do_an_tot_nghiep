@extends('trangchu_admin')
@section('content')

    <h4>Thông Kê doanh thu</h4>
   </p><form action="{{route('/tke')}}" >
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
                <span class="badge badge-secondary badge-pill">3</span>
            </h4>
            <ul class="list-group mb-3">
                {{-- <input type="hidden" name="sanphamgiohang[1][sp_ma]" value="2">
                <input type="hidden" name="sanphamgiohang[1][gia]" value="11800000.00">
                <input type="hidden" name="sanphamgiohang[1][soluong]" value="2"> --}}

                <li class="list-group-item d-flex justify-content-between lh-condensed">
                    {{-- <div>
                        <h6 class="my-0">Apple Ipad 4 Wifi 16GB</h6>
                        <small class="text-muted">11800000.00 x 2</small>
                    </div> --}}
                    <span class="text-muted">{{ $tongtien }}</span>
                </li>
                {{-- <input type="hidden" name="sanphamgiohang[2][sp_ma]" value="4">
                <input type="hidden" name="sanphamgiohang[2][gia]" value="14990000.00">
                <input type="hidden" name="sanphamgiohang[2][soluong]" value="8">

                <li class="list-group-item d-flex justify-content-between lh-condensed">
                    <div>
                        <h6 class="my-0">Apple iPhone 5 16GB White</h6>
                        <small class="text-muted">14990000.00 x 8</small>
                    </div>
                    <span class="text-muted">119920000</span>
                </li>
                <li class="list-group-item d-flex justify-content-between">
                    <span>Tổng thành tiền</span>
                    <strong>143520000</strong>
                </li> --}}
            </ul>


            {{-- <div class="input-group">

                <div class="input-group-append">
                    <button type="submit" class="btn btn-secondary">Xác nhận</button>
                </div>
            </div> --}}

        </div>
        {{-- @endforeach --}}
@endsection()
