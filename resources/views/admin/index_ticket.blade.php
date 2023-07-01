@extends('trangchu_admin')
@section('content')
<a href="{{route('tickets.create')}}" class="btn btn-success">Thêm</a>
<div class="row">
          <div class="col-lg-12 d-flex align-items-stretch">
            <div class="card w-100">
              <div class="card-body p-4">
                <div class="table-responsive">
                  <table class="table text-nowrap mb-0 align-middle">
                    <thead class="text-dark fs-4">
                      <tr>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Id</h6>
                        </th>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Suất chiếu</h6>
                        </th>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Ghế</h6>
                        </th>
                        <th class="border-bottom-0">
                            <h6 class="fw-semibold mb-0">Hóa đơn</h6>
                          </th>
                      </tr>
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
                        </tr>
                    @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
@endsection


