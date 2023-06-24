<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
    <title>Document</title>
    <style>
        .row{
            display: flex;
        }
        .btn{
            flex: 1;
        }
        form {
            max-width: fit-content;
            margin: 0 auto;
        }
        .btn-background{
            background-color: #0d6efd;
            color: #fff;
        }
        .btn-background:hover{
            background-color: green;
            color: white;
        }
    </style>
</head>
<body>
    Dong :<input type="text" name="dong" value="">
    Cot :<input type="text" name="cot" value="">
    <button type="button" name="nut" style="width: 50px;height: 50px;" onclick="taocheckbox()">Xac nhan</button>

    <form action="{{route('save-checkbox')}}" method="POST">
        @csrf
        <div id="chair"></div>
        <input type="submit" value="Xác nhận">
    </form>

    <script>
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
    </script>

</body>
</html>
