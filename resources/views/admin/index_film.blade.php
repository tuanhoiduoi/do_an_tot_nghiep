@extends('trangchu_admin')
@section('content')
<a href="{{route('films.create')}}" class="btn btn-success">Thêm</a>
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
                          <h6 class="fw-semibold mb-0">Hình</h6>
                        </th>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Tên</h6>
                        </th>
                        <th class="border-bottom-0">
                            <h6 class="fw-semibold mb-0">Nội dung</h6>
                        </th>
                        <th class="border-bottom-0">
                            <h6 class="fw-semibold mb-0">Thời lượng</h6>
                        </th>
                        <th class="border-bottom-0">
                            <h6 class="fw-semibold mb-0">Đạo diễn</h6>
                        </th>
                        <th class="border-bottom-0">
                            <h6 class="fw-semibold mb-0">Trạng thái</h6>
                        </th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($lst_film as $film)
                            <tr>
                                <td>{{$film->id}}</td>
                                <td><img style="height: 75px;width: 75px;" src="/images/{{$film->hinh}}"></td>
                                <td style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis; max-width:150px">{{$film->tenphim}}</td>
                                <td style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis; max-width:200px">{{$film->noidung}}</td>
                                <td>{{$film->thoiluong}}</td>
                                <td style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis; max-width:100px">{{$film->daodien}}</td>
                                <td style="white-space: nowrap; overflow: hidden; text-overflow: ellipsis; max-width:100px">
                                    @if($film->trangthai == 1)
                                        Hoạt động
                                    @else
                                        Không hoạt động
                                    @endif
                                </td>
                                <td><a href="{{route('films.edit',['film' => $film])}}" class="btn btn-primary">Sửa</a></td>
                                <td>
                                    <form action="{{route('films.destroy',['film'=>$film])}}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger" onclick="return confirm('Bạn có chắc muốn xóa người dùng này không?')">Xóa</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                  </table>
                  {{ $lst_film->links('pagination::bootstrap-4') }}
                </div>
              </div>
            </div>
          </div>
        </div>
@endsection


