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
<form action="{{route('showtimes.update',['showtime'=>$showtime])}}" method="POST">
    @csrf
    @method('PUT')

    <div>
        <label for="name">Phim</label>
        <select name="phim_id">
            @foreach ($lst_film as $film)
                <option value="{{$film->id}}">{{$film->tenphim}}</option>
            @endforeach
        </select>
    </div>

    <div>
        <label for="name">Phòng</label>
        <select name="phong_id">
            @foreach ($lst_room as $room)
                <option value="{{$room->id}}">{{$room->sophong}}</option>
            @endforeach
        </select>
    </div>


    <div>
        <label for="name">Thời gian</label><br>
        <input type="datetime-local" name="thoigian" value="{{$showtime->thoigian}}">
    </div>



    <button type="submit">Lưu</button>
</form>
@endsection

