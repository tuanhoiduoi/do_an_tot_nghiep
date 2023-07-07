@extends('layout_user')
@section('content')
 <h4 class="mb-3">Lịch sử giao dịch</h4>
<table>
    <div class="row2">
              <div class="col-lg-12 d-flex align-items-stretch">
                <div class="card w-100">
                  <div class="card-body p-4">
                    <div class="table-responsive">
                      <table class="table text-nowrap mb-0 align-middle">
                        <thead class="text-dark fs-4">
                          <tr>
                            <th class="border-bottom-0">
                              <h6 class="fw-semibold mb-0">STT</h6>
                            </th>
                            <th class="border-bottom-0">
                              <h6 class="fw-semibold mb-0">Ngày</h6>
                            </th>
                            <th class="border-bottom-0">
                              <h6 class="fw-semibold mb-0">Tên KH</h6>
                            </th>
                            <th class="border-bottom-0">
                                <h6 class="fw-semibold mb-0">Tên phim</h6>
                              </th>
                              <th class="border-bottom-0">
                                <h6 class="fw-semibold mb-0">Tiền </h6>
                              </th>
                          </tr>
                        </thead>
                        <tbody>
                            {{-- @foreach ($lst_bill as $bills)
                                                <tr>
                                                    <td>{{$bills->id}}</td>
                                                    <td>{{$bills->kh_id}}</td>
                                                    <td>{{\Carbon\Carbon::createFromTimestamp(strtotime($bills->ngaylap))->format('d-m-Y')}}</td>
                                                    <td>{{$bills->veri}}</td>
                                                    <td>{{$bills->trangthai}}</td>
                                                    <td><a href="{{route('bills.edit',['bill' => $bills])}}" class="btn btn-primary">Sửa</a></td>
                                                    <td>
                                                        <form action="{{route('bills.destroy',['bill'=>$bills])}}" method="POST">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="btn btn-danger" onclick="return confirm('Bạn có chắc muốn xóa người dùng này không?')">Xóa</button>
                                                        </form>
                                                    </td>

                                                </tr>
                                            @endforeach --}}
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
</table>
@endsection
