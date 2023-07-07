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
                            @foreach ($data as $gd)
                                                <tr>
                                                    <td>{{$gd->hoten}}</td>
                                                    <td>{{$gd->kh_id}}</td>
                                                    <td>{{\Carbon\Carbon::createFromTimestamp(strtotime($bills->ngaylap))->format('d-m-Y')}}</td>
                                                    <td>{{$gd->veri}}</td>


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
