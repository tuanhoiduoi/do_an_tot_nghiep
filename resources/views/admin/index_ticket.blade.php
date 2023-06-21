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
                                        <th>Suất chiếu</th>
                                    	<th>Ghế</th>
                                    	<th>Hóa đơn</th>
                                    </thead>
                                    <tbody>
                                        @foreach ($lst_ticket as $tickets)
                                            <tr>
                                                <td>{{$tickets->id}}</td>
                                                <td>{{$tickets->show_id}}</td>
                                                <td>{{$tickets->chair_id}}</td>
                                                <td>{{$tickets->bill_id}}</td>
                                                <td><a href="{{route('tickets.edit',['ticket' => $tickets])}}" class="btn btn-primary">Sửa</a></td>
                                                <td>
                                                    <form action="{{route('tickets.destroy',['ticket'=>$tickets])}}" method="POST">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn btn-danger" onclick="return confirm('Bạn có chắc muốn xóa người dùng này không?')">Xóa</button>
                                                    </form>
                                                </td>
                                                <td><a href="{{route('tickets.create')}}" class="btn btn-success">Thêm</a></td>
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
