@extends('trangchu_admin')
@section('content')

@if (isset($message))
    <div class="alert alert-danger">
        {{ $message }}
    </div>
@endif
<form action="{{route('accounts.store')}}" method="POST">
    @csrf
    <div class="mb-3">
      <label for="" class="form-label">Họ tên</label>
      <input type="text" class="form-control" name="hoten">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Số điện thoại</label>
        <input type="text" class="form-control" name="sdt">
      </div>
      <div class="mb-3">
        <label for="" class="form-label">Mật khẩu</label>
        <input type="text" class="form-control" name="password">
      </div>
      <div class="mb-3 form-check">
        <input type="checkbox" class="form-check-input" name="is_admin" value="1" >
        <label class="form-check-label" for="">Admin</label>
      </div>
    <button type="submit" class="btn btn-primary">Lưu</button>
  </form>

@endsection
