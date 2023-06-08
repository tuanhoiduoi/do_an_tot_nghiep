@extends('trangchu_admin')
@section('content')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="content table-responsive table-full-width">
                        <table class="table table-hover table-striped">
                            <thead>
                                <th>ID</th>
                                <th>Số phòng</th>
                                <th>Rạp</th>
                            </thead>
                            <tbody>
                                @foreach ($lst_room as $room)
                                    <tr>
                                        <td>{{$room->id}}</td>
                                        <td>{{$room->sophong}}</td>
                                        <td>{{$room->rap_id}}</td>
                                        <td><a href="{{route('rooms.edit',['room' => $room])}}" class="btn btn-primary">Sửa</a></td>
                                        <td>
                                            <form action="{{route('rooms.destroy',['room'=>$room])}}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger" onclick="return confirm('Bạn có chắc muốn xóa người dùng này không?')">Xóa</button>
                                            </form>
                                        </td>
                                        <td><a href="{{route('rooms.create')}}" class="btn btn-success">Thêm</a></td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
