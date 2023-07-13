@extends('trangchu_admin')
@section('content')

@if (isset($message))
    <div class="alert alert-danger">
        {{ $message }}
    </div>
@endif
<form action="{{route('bills.store')}}" method="POST">
    @csrf
    <div class="mb-3">
        <label for="" class="form-label">Khách hàng</label>
        <select class="form-select" name="kh_id">
            @foreach ($lst_kh as $kh)
                <option value="{{$kh->id}}">{{$kh->hoten}}</option>
            @endforeach
        </select>
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Ngày lập</label>
        <input type="date" class="form-control" name="ngaylap" id="ngaylap">
      </div>
      <div class="mb-3">
        <label for="" class="form-label">Trạng thái</label>
        <input type="text" class="form-control" name="trangthai">
      </div>

    <button type="submit" class="btn btn-primary">Lưu</button>
  </form>
<script>
    // Lấy thời gian hiện tại và định dạng nó thành chuỗi phù hợp với trường ngày của bạn.
    const now = new Date();
    const formattedDate = now.toISOString().slice(0,10);

    // Đặt giá trị trường ngày của bạn bằng cách sử dụng giá trị được định dạng của ngày hiện tại.
    document.getElementById("ngaylap").value = formattedDate;
  </script>
@endsection
