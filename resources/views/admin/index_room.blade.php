@extends('trangchu_admin')
@section('content')
<a href="{{route('rooms.create')}}" class="btn btn-success">Thêm</a>
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
                          <h6 class="fw-semibold mb-0">Phòng</h6>
                        </th>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Số dòng</h6>
                        </th>
                        <th class="border-bottom-0">
                            <h6 class="fw-semibold mb-0">Số cột</h6>
                          </th>
                          <th class="border-bottom-0">
                            <h6 class="fw-semibold mb-0">Rạp</h6>
                          </th>
                          <th class="border-bottom-0">
                            <h6 class="fw-semibold mb-0">Trạng thái</h6>
                          </th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($lst_room as $room)
                                    <tr>
                                        <td>{{$room->id}}</td>
                                        <td>{{$room->sophong}}</td>
                                        <td>{{$room->dong}}</td>
                                        <td>{{$room->cot}}</td>
                                        <td>{{$room->cine_id}}</td>
                                        <td>
                                            @if($room->trangthai == 1)
                                                Hoạt động
                                            @else
                                                Không hoạt động
                                            @endif
                                        </td>
                                        {{-- <td><a href="{{route('rooms.edit',['room' => $room])}}" class="btn btn-primary">Sửa</a></td>
                                        <td>
                                            <form action="{{route('rooms.destroy',['room'=>$room])}}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger" onclick="return confirm('Bạn có chắc muốn xóa người dùng này không?')">Xóa</button>
                                            </form>
                                        </td> --}}
                                    </tr>
                                @endforeach
                    </tbody>
                  </table>
                  {{ $lst_room->links('pagination::bootstrap-4') }}
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>
</div>

@endsection

