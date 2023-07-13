@extends('trangchu_admin')
@section('content')
@if (isset($message))
    <div class="alert alert-danger">
        {{ $message }}
    </div>
@endif
<form action="{{route('accounts.update',['account'=>$user])}}" method="POST">
    @csrf
    @method('PUT')

    <div class="mb-3">
      <label for="" class="form-label">Họ tên</label>
      <input type="text" class="form-control" name="hoten" value="{{$user->hoten}}">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Số điện thoại</label>
        <input type="text" class="form-control" name="sdt" value="{{$user->sdt}}">
      </div>
      <div class="mb-3">
        <label for="" class="form-label">Mật khẩu</label>
        <input type="text" class="form-control" name="password" value="{{$user->password}}">
      </div>
      <div class="mb-3 form-check">
        <input type="checkbox" class="form-check-input" name="is_admin" value="{{$user->is_admin}}" id="adminCheckbox" {{ $user->is_admin == 1 ? 'checked' : '' }}>
        <label class="form-check-label" for="">Admin</label>
      </div>
    <button type="submit" class="btn btn-primary">Lưu</button>
</form>
<script>
    const checkbox = document.getElementById('adminCheckbox');

    checkbox.addEventListener('change', function() {
      if (this.checked) {
        this.value = 1;
      }
    });
  </script>
@endsection

