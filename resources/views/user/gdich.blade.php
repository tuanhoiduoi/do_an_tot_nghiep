@extends('layout_user')
@section('content')
<link rel="stylesheet" href="/admin/assets/css/styles.min.css" />
 <h4 class="mb-3">Lịch sử giao dịch</h4>
<table>
    {{-- <input type="hidden" name="concac" value="{{(Auth::user()->id)}}"> --}}
    <div class="row2">
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
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
</table>
@endsection
