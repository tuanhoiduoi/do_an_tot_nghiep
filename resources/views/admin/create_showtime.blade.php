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
        <label for="name">Rạp</label>
        <select name="cine_id" onchange="getRoom()">
            @foreach ($lst_cinema as $cinema)
                <option value="{{$cinema->id}}">{{$cinema->tenrap}}</option>
            @endforeach
        </select>
    </div>

    <div>
        <label for="name">Phòng</label>
        <select name="room_id" id="roomSelect">
            {{-- @foreach ($lst_room as $room)
                <option value="{{$room->id}}">{{$room->sophong}}</option>
            @endforeach --}}
        </select>
    </div>

    <div>
        <label for="name">Thời gian</label><br>
        <input type="datetime-local" name="thoigian">
    </div>

    <div>
        <label for="name">Giá</label><br>
        <input type="text" name="tien">
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
<script>
    function getRoom(){
        var cineSelect = document.getElementsByName("cine_id")[0];
        var roomSelect = document.getElementById("roomSelect");

        // Xóa các tùy chọn phòng hiện có
        while (roomSelect.firstChild) {
            roomSelect.removeChild(roomSelect.firstChild);
        }

        // Lấy giá trị của rạp đã chọn
        var selectedCineId = cineSelect.value;

        // Thêm các tùy chọn phòng mới dựa trên rạp đã chọn
        @foreach ($lst_room as $room)
            if ({{$room->cine_id}} == selectedCineId) {
                var option = document.createElement("option");
                option.value = {{$room->id}};
                option.text = {{$room->sophong}};
                roomSelect.appendChild(option);
            }
        @endforeach
    }
</script>
@endsection

