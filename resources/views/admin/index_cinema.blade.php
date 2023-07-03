@extends('trangchu_admin')
@section('content')
<a href="{{route('cinemas.create')}}" class="btn btn-success">Thêm</a>
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
                          <h6 class="fw-semibold mb-0">Rạp</h6>
                        </th>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Địa chỉ</h6>
                        </th>
                        <th class="border-bottom-0">
                            <h6 class="fw-semibold mb-0">Trạng thái</h6>
                          </th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($lst_cinema as $cinema)
                                    <tr>
                                        <td>{{$cinema->id}}</td>
                                        <td>{{$cinema->tenrap}}</td>
                                        <td style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis; max-width:150px">{{$cinema->diachi}}</td>
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
