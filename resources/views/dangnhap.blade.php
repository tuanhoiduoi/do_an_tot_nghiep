<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/dangnhap.css">

    <title>Cinema</title>
</head>
<body>
    <div class="container" id="container">
        <div class="form-container sign-up-container">
            <form action="{{route('dangky')}}" method="POST">
                @csrf
                <h1>Tạo tài khoản</h1>
                <input type="text" name="name" placeholder="Họ tên" />
                <input type="text" name="sdt" placeholder="Số điện thoại" />
                <input type="password" name="password" placeholder="Mật khẩu" />
                <button type="submit">Đăng ký</button>
            </form>
        </div>
        <div class="form-container sign-in-container">
            <form action="{{route('dangnhap')}}" method="POST">
                @csrf
                <h1>Đăng nhập</h1>
                <input type="text" name="sdt" placeholder="Số điện thoại" />
                <input type="password" name="password" placeholder="Mật khẩu" />
                <a href="#">Quên mật khẩu</a>
                <button type="submit">Đăng nhập</button>
            </form>
        </div>
        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-left">
                    <button class="ghost" id="signIn">Đăng nhập</button>
                </div>
                <div class="overlay-panel overlay-right">
                    <button class="ghost" id="signUp">Đăng ký</button>
                </div>
            </div>
        </div>
    </div>
    <script>
        const signUpButton = document.getElementById('signUp');
        const signInButton = document.getElementById('signIn');
        const container = document.getElementById('container');

        signUpButton.addEventListener('click', () => {
            container.classList.add('right-panel-active');
        });

        signInButton.addEventListener('click', () => {
            container.classList.remove('right-panel-active');
        });
        </script>

</body>
</html>
