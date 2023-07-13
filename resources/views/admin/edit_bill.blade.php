@extends('trangchu_admin')
@section('content')
<style>
    form label{
        margin-top: 3%
    }
    form div{
        margin-left: 3%
    }
    form button{
        margin-left: 3%;
        margin-top: 3%;
        padding: 10px 40px;
        font-size: 15px
    }
    form textarea{
        height: 80px;
        width: 300px
    }
</style>
@if (isset($message))
    <div class="alert alert-danger">
        {{ $message }}
    </div>
@endif
<form action="{{route('bills.update',['bill'=>$bill])}}" method="POST">
    @csrf
    @method('PUT')

    <div class="mb-3">
        <label for="" class="form-label">Khách hàng</label>
        <select class="form-select" name="kh_id">
            @foreach ($lst_kh as $kh)
                <option value="{{$kh->id}}">{{$kh->hoten}}</option>
            @endforeach
        </select>
    </div>

    <div class="mb-3">
          <label for="" class="form-label">Ngày lập</label>
          <input type="date" class="form-control" name="ngaylap" value="{{$bill->ngaylap}}">
    </div>

    <div class="mb-3">
        <label for="" class="form-label">Mã veri</label>
        <input type="text" class="form-control" name="veri" value="{{$bill->veri}}">
    </div>

    <div class="mb-3">
        <label for="" class="form-label">Trạng thái</label>
        <input type="text" class="form-control" name="trangthai" value="{{$bill->trangthai}}" >
    </div>
    <button type="submit" class="btn btn-primary">Lưu</button>
</form>
@endsection

