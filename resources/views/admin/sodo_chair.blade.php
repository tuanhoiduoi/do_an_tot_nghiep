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

    <form id="myMap">
        @foreach (session('selectedCheckbox') as $checkbox)
            <div class="btn" style="border:none;">
                <label id="label" for="btn-check-outlined" class="btn btn-outline-primary btn-checked btn-background">
                    <input type="checkbox" class="btn-check" id="btn-check-outlined" name="checkbox[]" autocomplete="off" value="{{$checkbox}}">
                </label>
            </div>
        @endforeach
    </form>


</body>
<script>
    var myCheckbox = document.getElementById('btn-check-outlined');
    var myLabel = document.getElementById('label');
    myCheckbox.addEventListener('click', function() {
        if (this.checked) {
            myLabel.classList.add("btn-checked", "btn-background");
        } else {
            myLabel.classList.remove("btn-checked", "btn-background");
        }
    });
</script>
</html>
