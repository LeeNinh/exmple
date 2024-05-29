<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>
<body class="app">
    <form>
        <div class='container'>
            <div class="header">
                <div class="text">Login</div>
                <div class="underline"></div>
            </div>
            <div class="inputs">
                <div class="input">
<!--                    <img src="{{ asset('Assets/email.png') }}" alt="Email Icon"/>-->
                    <input type="email" placeholder="Email"/>
                </div>
                <div class="input">
<!--                    <img src="{{ asset('Assets/password.png') }}" alt="Password Icon"/>-->
                    <input type="password" placeholder="Password"/>
                </div>
            </div>
            <div class="forgot-password">Lost Password? <span>Click Here!</span></div>
            <div class="submit-container">
                <button type="submit" class="submit">Login</button>
            </div>
        </div>
    </form>
</body>
</html>
