@extends('trangchu_admin')
@section('css')
 <link rel="stylesheet" href="/css/ghe.css">
 {{-- <link href="/css/bootstrap.min.css" rel="stylesheet" /> --}}
@endsection
@section('js')
<script src="/js/taoghe.js"></script>
@endsection
@section('content')
@if (isset($message))
    <div class="alert alert-danger">
        {{ $message }}
    </div>
@endif
    <form action="{{route('rooms.store')}}" method="POST" id="form-them">
    @csrf
    <div class="mb-3">
        <label for="" class="form-label">Phòng</label>
        <input type="text" class="form-control" name="sophong">
    </div>
    <div>
        <label for="name">Rạp</label>
        <select class="form-select" name="cine_id">
            @foreach ($lst_cinema as $cinema)
                <option value="{{$cinema->id}}">{{$cinema->tenrap}}</option>
            @endforeach
        </select>
    </div>
    <div class="mb-3 form-check"  style="margin-top: 20px;">
        <input type="checkbox" class="form-check-input" name="trangthai" value="1">
        <label class="form-check-label" for="">Hoạt động</label>
    </div>

    <div class="mb-3">
        <label for="" class="form-label">Dòng</label>
        <input type="text" class="form-control" name="dong" value="10">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Cột</label>
        <input type="text" class="form-control" name="cot" value="10">
    </div>

    <button type="button" style="margin-top: 20px;" class="btn btn-success" onclick="taocheckbox()">Tạo ghế</button>

    <div id="chair"></div>






    <button type="submit"  style="margin-top: 20px;" class="btn btn-primary">Lưu</button>
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
