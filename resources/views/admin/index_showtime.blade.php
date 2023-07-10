@extends('trangchu_admin')
@section('content')
<a href="{{route('showtimes.create')}}" class="btn btn-success">Thêm</a>
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
                          <h6 class="fw-semibold mb-0">Phim</h6>
                        </th>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Phòng</h6>
                        </th>
                        <th class="border-bottom-0">
                            <h6 class="fw-semibold mb-0">Rạp</h6>
                          </th>
                        <th class="border-bottom-0">
                            <h6 class="fw-semibold mb-0">Thời gian</h6>
                        </th>
                        <th class="border-bottom-0">
                            <h6 class="fw-semibold mb-0">Giá</h6>
                        </th>
                        <th class="border-bottom-0">
                            <h6 class="fw-semibold mb-0">Trạng thái</h6>
                        </th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($lst_showtime as $showtime =>$key)
                            <tr>
                                <td>{{$key->id}}</td>
                                <td style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis; max-width:150px">{{$key->tenphim}}</td>
                                <td>{{$key->sophong}}</td>
                                <td style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis; max-width:100px">{{$key->tenrap}}</td>
                                <td >{{\Carbon\Carbon::createFromTimestamp(strtotime($key->thoigian))->format('d-m-Y H:i:s')}}</td>
                                <td>{{$key->tien}}</td>
                                <td style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis; max-width:100px">
                                     @if($key->trangthai == 1)
                                        Hoạt động
                                    @else
                                        Không hoạt động
                                    @endif
                                </td>
                                <td><a href="{{route('showtimes.edit',['showtime' => $key])}}" class="btn btn-primary">Sửa</a></td>
                                <td>
                                    <form action="{{route('showtimes.destroy',['showtime'=>$key])}}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger" onclick="return confirm('Bạn có chắc muốn xóa người dùng này không?')">Xóa</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                  </table>
                  {{ $lst_showtime->links('pagination::bootstrap-4') }}
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>


@endsection



