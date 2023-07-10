@extends('trangchu_admin')
@section('content')
<style>
    form label{
        margin-top: 3%
    }
    form div{
        margin-left: 3%
    }
    form button{
        margin-left: 3%;
        margin-top: 3%;
        padding: 10px 40px;
        font-size: 15px
    }
</style>
@if (isset($message))
    <div class="alert alert-danger">
        {{ $message }}
    </div>
@endif
<form action="{{route('cinemas.store')}}" method="POST">
    @csrf
    <div>
        <label for="name">Tên rạp</label><br>
        <input type="text" name="tenrap">
    </div>

    <div>
        <label for="phone_number">Địa chỉ</label><br>
        <input type="text" name="diachi">
    </div>

    <div>
        <label for="">Trạng Thái</label>
        <select name="trangthai">
            <option value="1">Hoạt động</option>
            <option value="0">Không hoạt động</option>
        </select>
    </div>

    <button type="submit">Lưu</button>
</form>
@endsection
