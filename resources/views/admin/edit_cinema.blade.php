@extends('trangchu_admin')
@section('content')
@if (isset($message))
    <div class="alert alert-danger">
        {{ $message }}
    </div>
@endif
<form action="{{route('cinemas.update',['cinema'=>$cinema])}}" method="POST">
    @csrf
    @method('PUT')

    <div class="mb-3">
        <label for="" class="form-label">Tên rạp</label>
        <input type="text" class="form-control" name="tenrap" value="{{$cinema->tenrap}}">
    </div>

    <div class="mb-3">
        <label for="" class="form-label">Địa chỉ</label>
        <textarea class="form-control" name="diachi">{{$cinema->diachi}}</textarea>
    </div>

    <div class="mb-3 form-check">
        <input type="checkbox" class="form-check-input" name="trangthai" value="{{$cinema->trangthai}}" id="statusCheckbox" {{$cinema->trangthai == 1 ? 'checked' : ''}}>
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

