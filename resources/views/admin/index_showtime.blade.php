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
                                        <th>Phim</th>
                                    	<th>Phòng</th>
                                        <th>Thời gian</th>
                                        <th>Trạng thái</th>
                                    </thead>
                                    <tbody>
                                        @foreach ($lst_showtime as $showtime)
                                            <tr>
                                                <td>{{$showtime->id}}</td>
                                                <td>{{$showtime->film_id}}</td>
                                                <td>{{$showtime->room_id}}</td>
                                                <td>{{$showtime->thoigian}}</td>
                                                <td>
                                                    @if($showtime->trangthai == 1)
                                                        Hoạt động
                                                    @else
                                                        Không hoạt động
                                                    @endif
                                                </td>
                                                <td><a href="{{route('showtimes.edit',['showtime' => $showtime])}}" class="btn btn-primary">Sửa</a></td>
                                                <td>
                                                    <form action="{{route('showtimes.destroy',['showtime'=>$showtime])}}" method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger" onclick="return confirm('Bạn có chắc muốn xóa người dùng này không?')">Xóa</button>
                                                    </form>
                                                </td>
                                                <td><a href="{{route('showtimes.create')}}" class="btn btn-success">Thêm</a></td>
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
