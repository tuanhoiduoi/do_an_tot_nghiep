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
                                <th>Tên rạp</th>
                                <th>Địa chỉ</th>
                                <th>Trạng thái</th>
                            </thead>
                            <tbody>
                                @foreach ($lst_cinema as $cinema)
                                    <tr>
                                        <td>{{$cinema->id}}</td>
                                        <td>{{$cinema->tenrap}}</td>
                                        <td>{{$cinema->diachi}}</td>
                                        <td>
                                            @if($cinema->trangthai == 1)
                                                Hoạt động
                                            @else
                                                Không hoạt động
                                            @endif
                                        </td>
                                        <td><a href="{{route('cinemas.edit',['cinema' => $cinema])}}" class="btn btn-primary">Sửa</a></td>
                                        <td>
                                            <form action="{{route('cinemas.destroy',['cinema'=>$cinema])}}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger" onclick="return confirm('Bạn có chắc muốn xóa người dùng này không?')">Xóa</button>
                                            </form>
                                        </td>
                                        <td><a href="{{route('cinemas.create')}}" class="btn btn-success">Thêm</a></td>
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
