@extends('trangchu_admin')
@section('content')
<style>
    .mb-3 img{
        margin-bottom: 20px;
        height: 180px;
        width: 15%;
    }
</style>

@if (isset($message))
    <div class="alert alert-danger">
        {{ $message }}
    </div>
@endif
<form action="{{route('films.update',['film'=>$film])}}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')

    <div class="mb-3">
        <label for="" class="form-label">Tên phim</label>
        <input type="text" class="form-control" name="tenphim" value="{{$film->tenphim}}">
    </div>

    <div class="mb-3">
        <label for="" class="form-label">Hình</label>
        <img src="{{$film->hinh}}">
        <input type="file" class="form-control" accept="images/*" name="hinh">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Trailer</label>
        <input type="file" class="form-control" accept="video/*" name="trailer">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Nội dung</label>
        <textarea name="noidung" class="form-control" value="{{$film->noidung}}">{{$film->noidung}}</textarea>
    </div>

    <div class="mb-3">
        <label for="" class="form-label">Thời lượng</label>
        <input type="text" class="form-control" name="thoiluong" value="{{$film->thoiluong}}">
    </div>

    <div class="mb-3">
        <label for="" class="form-label">Đạo diễn</label>
        <input type="text" class="form-control" name="daodien" value="{{$film->daodien}}">
    </div>

    <div class="mb-3 form-check">
        <input type="checkbox" class="form-check-input" name="trangthai" value="{{$film->trangthai}}" id="statusCheckbox" {{ $film->trangthai == 1 ? 'checked' : '' }}>
        <label class="form-check-label" for="">Hoạt động</label>
    </div>
    <button type="submit" class="btn btn-primary">Lưu</button>
</form>
<script>
    const checkbox = document.getElementById('statusCheckbox');

    checkbox.addEventListener('change', function() {
      if (this.checked) {
        this.value = 1;
      }
    });
  </script>
@endsection
