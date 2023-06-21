@extends('trangchu_admin')
@section('content')
<style>
    form label{
        margin-top: 3%
    }
    form div{
        margin-left: 3%
    }
    form select{
        margin-left: 3%
    }
    form button{
        margin-left: 3%;
        margin-top: 3%;
        padding: 10px 40px;
        font-size: 15px
    }
</style>
<form action="{{route('bills.store')}}" method="POST">
    @csrf

    <div>
        <label for="name">Khách</label>
        <select name="kh_id">
            @foreach ($lst_kh as $kh)
                <option value="{{$kh->id}}">{{$kh->hoten}}</option>
            @endforeach
        </select>
    </div>

    <div>
        <label for="name">Ngày lập</label><br>
        <input type="date" name="ngaylap" id="ngaylap">
    </div>

    <button type="submit">Lưu</button>
</form>
<script>
    // Lấy thời gian hiện tại và định dạng nó thành chuỗi phù hợp với trường ngày của bạn.
    const now = new Date();
    const formattedDate = now.toISOString().slice(0,10);

    // Đặt giá trị trường ngày của bạn bằng cách sử dụng giá trị được định dạng của ngày hiện tại.
    document.getElementById("ngaylap").value = formattedDate;
  </script>
@endsection
