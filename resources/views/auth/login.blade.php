<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <section class="layover">
        <img src="img/logo.png" alt="">
        <form class="auth-form" action="{{ route('login') }}" method="POST">
            @csrf
            <div style="margin-right:20px;" class="input-field">
                <label style="margin-right:160px;" for="email">e-mailadres</label><br>
                <input type="text" name="email" id="email" value="{{ old('email') }}">
                @error('email')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div style="margin-right:20px;" class="input-field">
                <label style="margin-right:160px;" for="password">Wachtwoord</label><br>
                <input type="password" name="password" id="password">
                @error('password')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <input type="submit" value="Log in" class="login-btn">
        </form>
        <a class="link" href="{{ route('register') }}">Registreer je hier!</a>
    </section>
</body>
</html>