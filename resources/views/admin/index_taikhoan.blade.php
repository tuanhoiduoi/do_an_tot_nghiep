@extends('trangchu_admin')
@section('content')
<a href="{{route('accounts.create')}}" class="btn btn-success">Thêm</a>
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
                          <h6 class="fw-semibold mb-0">Họ tên</h6>
                        </th>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Số điện thoại</h6>
                        </th>
                        <th class="border-bottom-0">
                            <h6 class="fw-semibold mb-0">Admin</h6>
                          </th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($lst_user as $users)
                            <tr>
                                <td>{{$users->id}}</td>
                                <td>{{$users->hoten}}</td>
                                <td>{{$users->sdt}}</td>
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
