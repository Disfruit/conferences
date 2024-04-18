<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            padding: 0;
        }
        form {
            text-align: center;
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 20px;
            width: 300px;
        }
        label {
            font-weight: bold;
            margin-bottom: 5px;
            display: block;
        }
        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            margin-bottom: 10px;
        }
        input[type="checkbox"] {
            margin-right: 5px;
        }
        input[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        input[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
<form action="{{route('login') }}" method="POST">
    @csrf
    <div>
        <label for="title-input">Username</label>
        <input type="text" id="title-input" name="name" value="{{old('name') }}">
        @error('name')
        <p>{{$message}}</p>
        @enderror
    </div>
    <div>
        <label for="password-input">Password</label>
        <input type="password" id="password-input" name="password" value="{{old('password') }}">
        @error('password')
        <p>{{$message}}</p>
        @enderror
    </div>
    <div>
        <label for="remember-input">Remember me</label>
        <input type="checkbox" id="remember-input" name="remember" value="1" {{old('remember') ? 'checked' : '' }}>
    </div>
    <div><input type="submit" value="Login"></div>
</form>
</body>
</html>
