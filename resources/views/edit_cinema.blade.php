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
<form action="{{route('cinemas.update',['cinema'=>$cinema])}}" method="POST">
    @csrf
    @method('PUT')

    <div>
        <label for="name">Tên rạp</label><br>
        <input type="text" name="tenrap" value="{{$cinema->tenrap}}">
    </div>

    <div>
        <label for="name">Địa chỉ</label><br>
        <textarea name="diachi">{{$cinema->diachi}}</textarea>
    </div>


    <button type="submit">Lưu</button>
</form>
@endsection

