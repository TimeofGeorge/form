<!DOCTYPE html>
<html lang="{{app()->getLocale()}}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="x-ua-compatible" content="IE=edge">
    <meta name="viewport" content="width-device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{csrf_token()}}">
    <title>Регистрация</title>
    <!-- Styles -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css"> <!-- bootstrap-->
    <link href="{{asset("/css/reg.css")}}" rel="stylesheet">
</head>
<body>
<section class="section">
    <div class="color"></div>
    <div class="color"></div>
    <div class="color"></div>
    <div class="reg">
        @error('email')
        <div class="alert alert-danger"> {{$message}}</div>
        @enderror
        @error('password')
        <div class="alert alert-danger"> {{$message}}</div>
        @enderror
        <div class="container">
            <div class="form">
                <h2>Login form</h2>
                <form class="sep" method="POST" action="{{route("user.index-c")}}">
                    @csrf
                    <div class="inputBox">
                        <input class="conf" id="email" name="email" type="text" value="" placeholder="Email">
                    </div>

                    <div class="inputBox">
                        <input class="conf" id="password" name="password" type="password" value="" placeholder="Password">
                    </div>

                    <div class="inputBox  inputBox--flex">
                        <input class="conf" type="submit" name="sendMe" value="Sign in">
                    </div>
                </form>
                <p class="forget">Забыли пароль?<a href="#"> Восстановить</a></p>
                <p class="forget">Нет аккаунта?<a href="{{route("user.registration")}}"> Зарегестрироваться</a></p>
            </div>
        </div>
    </div>
</section>
</body>
</html>
