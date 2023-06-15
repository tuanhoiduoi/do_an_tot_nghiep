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
<form action="{{route('rooms.store')}}" method="POST">
    @csrf
    <div>
        <label for="name">Số phòng</label><br>
        <input type="number" name="sophong">
    </div>

    <div>
        <label for="name">Rạp</label>
        <select name="rap_id">
            @foreach ($lst_cinema as $cinema)
                <option value="{{$cinema->id}}">{{$cinema->tenrap}}</option>
            @endforeach
        </select>
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
