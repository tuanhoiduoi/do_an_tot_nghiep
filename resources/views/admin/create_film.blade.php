@extends('trangchu_admin')
@section('content')
@if (isset($message))
    <div class="alert alert-danger">
        {{ $message }}
    </div>
@endif
<form action="{{route('films.store')}}" method="POST" enctype="multipart/form-data">
    @csrf

    <div class="mb-3">
        <label for="" class="form-label">Tên phim</label>
        <input type="text" class="form-control" name="tenphim">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Hình</label>
        <input type="file" class="form-control" accept="images/*" name="hinh">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Nội dung</label>
        <textarea class="form-control" name="noidung"></textarea>
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Thời lượng</label>
        <input type="text" class="form-control" name="thoiluong">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Đạo diễn</label>
        <input type="text" class="form-control" name="daodien">
    </div>
    <div class="mb-3 form-check">
        <input type="checkbox" class="form-check-input" name="trangthai" value="1" >
        <label class="form-check-label" for="">Hoạt động</label>
    </div>
    <button type="submit" class="btn btn-primary">Lưu</button>
</form>
@endsection
