@extends('trangchu_admin')
@section('content')
@if (isset($message))
    <div class="alert alert-danger">
        {{ $message }}
    </div>
@endif
<form action="{{route('showtimes.update',['showtime'=>$showtime])}}" method="POST">
    @csrf
    @method('PUT')


    <div class="mb-3">
        <label for="" class="form-label">Tên phim</label>
        <select class="form-select" name="film_id">
            @foreach ($lst_film as $film)
                <option value="{{$film->id}}">{{$film->tenphim}}</option>
            @endforeach
        </select>
    </div>

    <div class="mb-3">
        <label for="" class="form-label">Rạp</label>
        <select class="form-select" name="cine_id" onchange="getRoom()">
            @foreach ($lst_cinema as $cinema)
                <option value="{{$cinema->id}}">{{$cinema->tenrap}}</option>
            @endforeach
        </select>
    </div>

    <div class="mb-3">
        <label for="" class="form-label">Phòng</label>
        <select class="form-select" name="room_id" id="roomSelect">
            {{-- @foreach ($lst_room as $room)
                <option value="{{$room->id}}">{{$room->sophong}}</option>
            @endforeach --}}
        </select>
    </div>

    <div class="mb-3">
        <label for="" class="form-label">Thời gian</label>
        <input class="form-control" type="datetime-local" name="thoigian" value="{{$showtime->thoigian}}">
    </div>

    <div class="mb-3">
        <label for="" class="form-label">Giá</label>
        <input class="form-control" type="text" name="tien" value="{{$showtime->tien}}">
    </div>

    <div class="mb-3 form-check">
        <input type="checkbox" class="form-check-input" name="trangthai" value="{{$showtime->trangthai}}" id="statusCheckbox" {{ $showtime->trangthai == 1 ? 'checked' : '' }}>
        <label class="form-check-label" for="">Hoạt động</label>
      </div>


      <button type="submit" class="btn btn-primary">Lưu</button>
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
<script>
    const checkbox = document.getElementById('statusCheckbox');
    checkbox.addEventListener('change', function() {
    if (this.checked) {
        this.value = 1;
    }
    });
</script>
@endsection

