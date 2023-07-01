@extends('trangchu_admin')
@section('content')
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
                          <h6 class="fw-semibold mb-0">Dòng</h6>
                        </th>
                        <th class="border-bottom-0">
                          <h6 class="fw-semibold mb-0">Cột</h6>
                        </th>
                        <th class="border-bottom-0">
                            <h6 class="fw-semibold mb-0">Tên ghế</h6>
                          </th>
                          <th class="border-bottom-0">
                            <h6 class="fw-semibold mb-0">Phòng</h6>
                          </th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($lst_ghe as $chairs)
                            <tr>
                                <td>{{$chairs->id}}</td>
                                <td>{{$chairs->dong}}</td>
                                <td>{{$chairs->cot}}</td>
                                <td>{{$chairs->tenghe}}</td>
                                <td>{{$chairs->room_id}}</td>
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
