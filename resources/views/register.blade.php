<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Đăng ký</title>
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}">
    <style>
        html, body {
            height: 100%;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: #2a3d55; /* Màu xanh than */
        }
        .register-box {
            width: 400px;
            padding: 40px;
            background: rgba(0,0,0,.5);
            box-sizing: border-box;
            box-shadow: 0 15px 25px rgba(0,0,0,.6);
            border-radius: 10px;
        }
        .register-box h2 {
            margin: 0 0 30px;
            padding: 0;
            color: #fff;
            text-align: center;
        }
        .register-box .user-box {
            position: relative;
            margin-bottom: 30px;
        }
        .register-box .user-box input {
            width: 100%;
            padding: 10px 0;
            font-size: 16px;
            color: #fff;
            border: none;
            border-bottom: 1px solid #03e9f4; /* Màu xanh lam sáng */
            outline: none;
            background: transparent;
        }
        .register-box .user-box label {
            position: absolute;
            top: 0;
            left: 0;
            padding: 10px 0;
            font-size: 16px;
            color: #fff;
            pointer-events: none;
            transition: .5s;
        }
        .register-box .user-box input:focus ~ label,
        .register-box .user-box input:valid ~ label {
            top: -20px;
            left: 0;
            color: #03e9f4;
            font-size: 12px;
        }
        .register-box form button {
            background: #03e9f4; /* Màu xanh lam sáng */
            border: none;
            padding: 10px 20px;
            cursor: pointer;
            border-radius: 5px;
            width: 100%;
            color: #fff;
            font-size: 16px;
            transition: .3s;
            margin-bottom: 20px;
        }
        .register-box form button:hover {
            background: #0288d1;
        }
        .register-box form a {
            display: block;
            background: #f39c12; /* Màu cam */
            border: none;
            padding: 10px 20px;
            text-align: center;
            cursor: pointer;
            border-radius: 5px;
            width: 100%;
            color: #fff;
            font-size: 16px;
            transition: .3s;
            text-decoration: none;
        }
        .register-box form a:hover {
            background: #e67e22;
        }
        .text-danger {
            text-align: center;
            color: #ff0000;
        }
    </style>
</head>
<body>
    <div class="register-box">
        <h2>Đăng ký</h2>
        @if(session('message'))
        <p class="text-danger">{{ session('message') }}</p>
        @endif
        <form action="{{ route('postRegister') }}" method="post">
            @csrf
            <div class="user-box">
                <input type="text" id="name" name="name" required>
                <label for="name">Name:</label>
            </div>
            <div class="user-box">
                <input type="email" id="email" name="email" required>
                <label for="email">Email:</label>
            </div>
            <div class="user-box">
                <input type="text" id="address" name="address" required>
                <label for="address">Address:</label>
            </div>
            <div class="user-box">
                <input type="text" id="phone" name="phone" required>
                <label for="phone">Phone:</label>
            </div>
            <div class="user-box">
                <input type="password" id="password" name="password" required>
                <label for="password">Password:</label>
            </div>
            <button type="submit">Đăng ký</button>
            <a href="{{ route('login') }}">Đăng nhập</a>
        </form>
    </div>
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>
