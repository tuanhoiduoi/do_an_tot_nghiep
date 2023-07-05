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
<form action="{{route('bills.update',['bill'=>$bill])}}" method="POST">
    @csrf
    @method('PUT')

    <div>
        <label for="name">Khách</label><br>
        <select name="kh_id">
            @foreach ($lst_kh as $kh)
                <option value="{{$kh->id}}">{{$kh->hoten}}</option>
            @endforeach
        </select>
    </div>

    <div>
        <label for="name">Ngày lập</label><br>
        <input type="date" name="ngaylap" value="{{$bill->ngaylap}}">
    </div>

    <div>
        <label for="name">Mã Veri</label><br>
        <input type="text" name="veri" value="{{$bill->veri}}">
    </div>

    <div>
        <label for="name">Trạng thái</label><br>
        <input type="text" name="trangthai" value="{{$bill->trangthai}}">
    </div>

    <button type="submit">Lưu</button>
</form>
@endsection

