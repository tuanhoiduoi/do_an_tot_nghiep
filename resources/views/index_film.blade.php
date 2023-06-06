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
                                <th>Hình</th>
                                <th>Tên</th>
                                <th>Nội dung</th>
                                <th>Thời lượng</th>
                                <th>Đạo diễn</th>
                                <th>Trạng thái</th>
                            </thead>
                            <tbody>
                                @foreach ($lst_film as $film)
                                    <tr>
                                        <td>{{$film->id}}</td>
                                        <td><img style="height: 75px;width: 75px;" src="/images/{{$film->hinh}}"></td>
                                        <td>{{$film->tenphim}}</td>
                                        <td style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis; max-width:300px">{{$film->noidung}}</td>
                                        <td>{{$film->thoiluong}}</td>
                                        <td>{{$film->daodien}}</td>
                                        <td>
                                            @if($film->trangthai == 1)
                                                Hoạt động
                                            @else
                                                Không hoạt động
                                            @endif
                                        </td>
                                        <td><a href="{{route('films.edit',['film' => $film])}}" class="btn btn-primary">Sửa</a></td>
                                        <td>
                                            <form action="{{route('films.destroy',['film'=>$film])}}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger" onclick="return confirm('Bạn có chắc muốn xóa người dùng này không?')">Xóa</button>
                                            </form>
                                        </td>
                                        <td><a href="{{route('films.create')}}" class="btn btn-success">Thêm</a></td>
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
