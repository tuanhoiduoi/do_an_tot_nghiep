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
                                        <th>Họ tên</th>
                                    	<th>Số điện thoại</th>
                                    	<th>Mật khẩu</th>
                                    	<th>Admin</th>
                                    </thead>
                                    <tbody>
                                        @foreach ($lst_user as $users)
                                            <tr>
                                                <td>{{$users->id}}</td>
                                                <td>{{$users->hoten}}</td>
                                                <td>{{$users->sdt}}</td>
                                                <td>{{$users->password}}</td>
                                                <td>
                                                    @if($users->is_admin == 1)
                                                        Yes
                                                    @else
                                                        No
                                                    @endif
                                                </td>
                                                <td><a href="{{route('accounts.edit',['account' => $users])}}" class="btn btn-primary">Sửa</a></td>
                                                <td>
                                                    <form action="{{route('accounts.destroy',['account'=>$users])}}" method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger" onclick="return confirm('Bạn có chắc muốn xóa người dùng này không?')">Xóa</button>
                                                    </form>
                                                </td>
                                                <td><a href="{{route('accounts.create')}}" class="btn btn-success">Thêm</a></td>
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
