@extends('trangchu_admin')
@section('css')
 <link rel="stylesheet" href="/css/ghe.css">
@endsection
@section('js')
<script src="{{asset('js/taoghe.js')}}"></script>
@endsection
@section('content')
    <form action="{{route('rooms.store')}}" method="POST" id="form-them">
    @csrf
    <div>
        <label for="name">Số phòng</label><br>
        <input type="number" name="sophong">
    </div>

    <div>
        <label for="name">Rạp</label>
        <select name="cine_id">
            @foreach ($lst_cinema as $cinema)
                <option value="{{$cinema->id}}">{{$cinema->tenrap}}</option>
            @endforeach
        </select>
    </div>

    <div>
        <label for="">Trạng Thái</label>
        <select name="trangthai">
            <option value="1">Hoạt động</option>
            <option value="0">Không hoạt động</option>
        </select>
    </div>

    Dong :<input type="text" name="dong" value="10">
    Cot :<input type="text" name="cot" value="20">
    <button type="button" name="nut" style="width: 50px;height: 50px;" onclick="taocheckbox()">Xac nhan</button>


        <div id="chair"></div>




    <button type="submit">Lưu</button>
</form>
<script>
    /*
    function taocheckbox() {
        var hang =['A','B','C','D','E','F','G','H','K','J','U','Z','L','T','X','Q','W','R'];
        var checkboxes = document.getElementById("chair");
        checkboxes.innerHTML = "";
        var cot = document.getElementsByName("cot")[0];
        var dong = document.getElementsByName("dong")[0];

        for (var i = 1; i <= dong.value; i++) {
            var row = document.createElement("div");
            row.classList.add("row");
            for (var j = 1; j <= cot.value; j++) {
                var div = document.createElement("div");
                div.className = "btn";
                div.style = "border: none";
                var label =document.createElement("label");
                var input = document.createElement("input");

                input.type = "checkbox";
                input.className = "btn-check";
                input.id = "btn-check-outlined";
                input.name = "checkboxes[]";
                input.autocomplete ="off";
                input.value =  "[" + i + "][" + j + "]";

                label.className ="btn btn-outline-primary";
                label.for ="btn-check-outlined";
                label.textContent = hang[i-1] + j.toLocaleString('en-US', {minimumIntegerDigits:2});

                label.appendChild(input);
                div.appendChild(label);


                // xử lý lấy dữ liệu nút khi người dùng click vào
                input.onclick = function () {
                    var label = this.parentElement;
                    if(this.checked){
                        label.classList.add("btn-checked", "btn-background");

                    }
                    else{
                        label.classList.remove("btn-checked", "btn-background");
                    }
                };

                row.appendChild(div);

            }
            checkboxes.appendChild(row);
        }

    }
    */
</script>
@endsection
