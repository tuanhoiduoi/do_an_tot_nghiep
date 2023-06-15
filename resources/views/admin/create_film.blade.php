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
    form textarea{
        width: 50%;
    }
    form img{
        margin-bottom: 20px;
        height: 250px;
        width: 20%;
    }
</style>
<form action="{{route('films.store')}}" method="POST" enctype="multipart/form-data">
    @csrf

    <div>
        <label for="name">Tên</label><br>
        <input type="text" name="tenphim">
    </div>

    <div>
        <label for="name">Hình</label><br>
        <input type="file" accept="images/*" name="hinh">
    </div>

    <div>
        <label for="name">Nội dung</label><br>
        <textarea name="noidung"></textarea>
    </div>

    <div>
        <label for="name">Thời lượng</label><br>
        <input type="text" name="thoiluong">
    </div>

    <div>
        <label for="name">Đạo diễn</label><br>
        <input type="text" name="daodien">
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
