<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="js/register.js" defer></script>
</head>
<body>
    <progress id="progress" value="10" max="100"></progress>
    <section class="layover">
        <img src="img/logo.png" alt="">
        <form class="auth-form" id="signup" action="{{ route('register') }}" method="POST">
            @csrf
            <section id="tab1">
                <div style="margin-right:20px;" class="input-field">
                    <label style="margin-right:160px;" for="name">Gebruikersnaam</label><br>
                    <input type="text" name="name" id="username" value="{{ old('name') }}">
                    <small></small>
                    @error('name')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div style="margin-right:20px;" class="input-field">
                    <label style="margin-right:160px;" for="email">e-mailadres</label><br>
                    <input type="text" name="email" id="email" value="{{ old('email') }}">
                    <small></small>
                    @error('email')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div style="margin-right:20px;" class="input-field">
                    <label style="margin-right:160px;" for="password">Wachtwoord</label><br>
                    <input type="password" name="password" id="password">
                    <small></small>
                    @error('password')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div style="margin-right:20px;" class="input-field">
                    <label style="margin-right:160px;" for="password">Herhaal je Wachtwoord</label><br>
                    <input type="password" name="password_confirmation" id="confirm-password">
                    <small></small>
                </div>
                <a  id="gototab2" class="login-btn" href="" value="Next">Volgende</a>
                <!-- <button type="submit" class="login-btn">Registreren</button> -->
            </section>
            <section id="tab2">
                <div style="margin-right:20px;" class="input-field">
                    <label style="margin-right:160px;" for="address">Postcode</label><br>
                    <input type="text" id="address" name="address" value="{{ old('address') }}">
                    <small></small>
                    @error('address')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div style="margin-right:20px;" class="input-field">
                    <label style="margin-right:160px;" for="streetname">Straatnaam</label><br>
                    <input type="text" id="streetname" name="streetname" value="{{ old('streetname') }}">
                    @error('streetname')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div style="margin-right:20px;" class="input-field">
                    <label style="margin-right:160px;" for="housenumber">Huisnummer</label><br>
                    <input type="text" id="housenumber" name="housenumber" value="{{ old('housenumber') }}">
                    <small></small>
                    @error('housenumber')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="action-buttons">
                    <a id="gobackto1" class="login-btn" href="">Vorige</a>
                    <a id="gototab3" class="login-btn" href="" value="Next">Volgende</a>
                </div>
            </section>
            <section id="tab3">
                <div style="margin-right:20px;" class="input-field">
                    <label style="margin-right:160px;" for="phonenumber">Telefoonnummer</label><br>
                    <input type="text" id="phonenumber" name="phonenumber" value="{{ old('phonenumber') }}">
                    <small></small>
                    @error('phonenumber')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div style="margin-right:20px;" class="input-field">
                    <label style="margin-right:160px;" for="age">Leeftijd</label><br>
                    <input type="text" id="age" name="age" value="{{ old('age') }}">
                    <small></small>
                    @error('age')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <a id="gobackto2" class="login-btn" href="">Vorige</a>
                <input type="submit" value="Registreren" class="login-btn">
            </section>
        </form>
        <a class="link" href="{{ route('login') }}">Ik heb al een account!</a>
    </section>
    <img class="hond-img" src="img/hond-registratie.png" alt="">
</body>
</html>

<script>
    window.onload = () => {
        document.getElementById('tab2').hidden = true;
        document.getElementById('tab3').hidden = true;

        var nextButtonTab1 = document.getElementById('gototab2');
        var nextButtonTab2 = document.getElementById('gototab3');

        var previousButtonTab2 = document.getElementById('gobackto1');
        var previousButtonTab3 = document.getElementById('gobackto2');

        var progressBar = document.getElementById('progress').value;
        console.log(progressBar);

        nextButtonTab1.addEventListener('click', function handleClick() {
            event.preventDefault();
            document.getElementById('tab1').hidden = true;
            document.getElementById('tab2').hidden = false;
            document.getElementById('tab3').hidden = true;
            console.log("Next button is clicked");
            document.getElementById('progress').value = "50";
        });

        nextButtonTab2.addEventListener('click', function handleClick() {
            event.preventDefault();
            document.getElementById('tab1').hidden = true;
            document.getElementById('tab2').hidden = true;
            document.getElementById('tab3').hidden = false;
            console.log("Next button is clicked");
            document.getElementById('progress').value = "100";
        });

        previousButtonTab2.addEventListener('click', function handleClick() {
            event.preventDefault();
            document.getElementById('tab1').hidden = false;
            document.getElementById('tab2').hidden = true;
            document.getElementById('tab3').hidden = true;
            console.log("Next button is clicked");
            document.getElementById('progress').value = "10";
        });

        previousButtonTab3.addEventListener('click', function handleClick() {
            event.preventDefault();
            document.getElementById('tab1').hidden = true;
            document.getElementById('tab2').hidden = false;
            document.getElementById('tab3').hidden = true;
            console.log("Next button is clicked");
            document.getElementById('progress').value = "50";
        });
    }
</script>