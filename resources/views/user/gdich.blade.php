@extends('layout_user')
@section('content')
<div class="container">
    <div class=" row">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/3"><i class="fa fa-home"></i> Trang chủ</a></li>
            <li class="breadcrumb-item active" aria-current="page">Lịch sử giao dịch</li>
          </ol>
        </nav>
    </div>
<link rel="stylesheet" href="/admin/assets/css/styles.min.css" />
 {{-- <h4 class="mb-3">Lịch sử giao dịch</h4> --}}
{{-- <table> --}}
    {{-- <input type="hidden" name="concac" value="{{(Auth::user()->id)}}"> --}}
    <div class="row2" style="padding-bottom: 80px">
              <div class="col-lg-12 d-flex align-items-stretch">
                <div class="card w-100">
                  <div class="card-body p-4">
                    <div class="table-responsive">
                      <table class="table text-nowrap mb-0 align-middle">
                        <thead class="text-dark fs-4">
                          <tr>
                            {{-- <th class="border-bottom-0">
                              <h6 class="fw-semibold mb-0">STT</h6>
                            </th> --}}

                            <th class="border-bottom-0">
                              <h6 class="fw-semibold mb-0">Tên KH</h6>
                            </th>
                            <th class="border-bottom-0">
                                <h6 class="fw-semibold mb-0">Tên phim</h6>
                              </th>
                              <th class="border-bottom-0">
                                <h6 class="fw-semibold mb-0">Suất chiếu</h6>
                              </th>
                              <th class="border-bottom-0">
                                <h6 class="fw-semibold mb-0">Tiền </h6>
                              </th>
                              <th class="border-bottom-0">
                                <h6 class="fw-semibold mb-0">Ghế</h6>
                              </th>
                          </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $gd)
                                                <tr>
                                                    {{-- <td>{{$dem}}</td> --}}
                                                    <td>{{$gd->hoten}}</td>
                                                    <td>{{$gd->tenphim}}</td>
                                                     <td>{{\Carbon\Carbon::createFromTimestamp(strtotime($gd->thoigian))->format('d-m-Y | H:i:s')}} phút</td>
                                                    <td>{{$gd->tien}} VND</td>
                                                    <td>{{$gd->tenghe}}</td>

                                                </tr>
                                            @endforeach
                        </tbody>

                    </div>
                  </div>
                </div>
              </div>
            </div>
</table>
{{ $data->links('pagination::bootstrap-4')}}
@endsection
