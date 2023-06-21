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
                                        <th>Khách</th>
                                    	<th>Ngày lập</th>
                                    	<th>Mã Veri</th>
                                    </thead>
                                    <tbody>
                                        @foreach ($bill as $key => $bills)
                                            <tr>
                                                <td>{{$bills->id}}</td>
                                                <td>{{$bills->hoten}}</td>
                                                <td>{{$bills->ngaylap}}</td>
                                                <td>{{$bills->veri}}</td>
                                                <td><a href="{{route('bills.edit',['bill' => $bills])}}" class="btn btn-primary">Sửa</a></td>
                                                <td>
                                                    <form action="{{route('bills.destroy',['bill'=>$bills])}}" method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger" onclick="return confirm('Bạn có chắc muốn xóa người dùng này không?')">Xóa</button>
                                                    </form>
                                                </td>
                                                <td><a href="{{route('bills.create')}}" class="btn btn-success">Thêm</a></td>
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
