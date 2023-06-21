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
<form action="{{route('showtimes.store')}}" method="POST">
    @csrf

    <div>
        <label for="name">Phim</label>
        <select name="film_id">
            @foreach ($lst_film as $film)
                <option value="{{$film->id}}">{{$film->tenphim}}</option>
            @endforeach
        </select>
    </div>

    <div>
        <label for="name">Phòng</label>
        <select name="room_id">
            @foreach ($lst_room as $room)
                <option value="{{$room->id}}">{{$room->sophong}}</option>
            @endforeach
        </select>
    </div>

    <div>
        <label for="name">Thời gian</label><br>
        <input type="datetime-local" name="thoigian">
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

