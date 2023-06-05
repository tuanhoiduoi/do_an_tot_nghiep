@extends('trangchu_admin')
@section('content')
<style>
    form label{
        margin-top: 3%
    }
    form div{
        margin-left: 3%
    }
    form select{
        margin-left: 3%
    }
    form button{
        margin-left: 3%;
        margin-top: 3%;
        padding: 10px 40px;
        font-size: 15px
    }
</style>
<form action="{{route('accounts.update',['account'=>$user])}}" method="POST">
    @csrf
    @method('PUT')

    <div>
        <label for="name">Tên:</label><br>
        <input type="text" name="hoten" value="{{$user->hoten}}">
    </div>

    <div>
        <label for="phone_number">Số điện thoại:</label><br>
        <input type="text" name="sdt" value="{{$user->sdt}}">
    </div>

    <div>
        <label for="password">Mật khẩu:</label><br>
        <input type="text" name="password" value="{{$user->password}}">
    </div>


    <div>
        <label for="">Admin</label>
        <select name="is_admin">
            <option value="1">Yes</option>
            <option value="0">No</option>
        </select>
    </div>


    <button type="submit">Lưu</button>
</form>
@endsection

