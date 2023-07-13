@extends('trangchu_admin')
@section('content')
@if (isset($message))
    <div class="alert alert-danger">
        {{ $message }}
    </div>
@endif
<form action="{{route('cinemas.store')}}" method="POST">
    @csrf
    <div class="mb-3">
        <label for="" class="form-label">Tên rạp</label>
        <input type="text" class="form-control" name="tenrap" >
    </div>

    <div class="mb-3">
        <label for="" class="form-label">Địa chỉ</label>
        <textarea class="form-control" name="diachi"></textarea>
    </div>

    <div class="mb-3 form-check">
        <input type="checkbox" class="form-check-input" name="trangthai" value="1">
        <label class="form-check-label" for="">Trạng thái</label>
    </div>
    <button type="submit" class="btn btn-primary">Lưu</button>
</form>
@endsection
