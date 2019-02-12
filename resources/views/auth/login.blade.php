<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Icons -->
    <link rel="icon" href="{{ asset('img/logo-32x32.png') }}" sizes="32x32">
    <title>URL Shortener by KLAS</title>

    <!-- Styles -->
    <link type="text/css" href="{{ asset('css/normalize.css') }}" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="{{ asset('css/materialize.css') }}" media="screen,projection"/>
    <link type="text/css" href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <style>
        body {
            display: flex;
            min-height: 100vh;
            flex-direction: column;
        }

        main {
            flex: 1 0 auto;
        }

        .input-field input[type=date]:focus + label,
        .input-field input[type=text]:focus + label,
        .input-field input[type=email]:focus + label,
        .input-field input[type=password]:focus + label {
            color: #e91e63;
        }

        .input-field input[type=date]:focus,
        .input-field input[type=text]:focus,
        .input-field input[type=email]:focus,
        .input-field input[type=password]:focus {
            border-bottom: 2px solid #e91e63;
            box-shadow: none;
        }
    </style>
</head>
<body id="app">
<header>
</header>
<main>
    <div class="container valign-wrapper hide-on-small-and-down" style="padding: 7%;">
        <div class="z-depth-5 grey lighten-4 row" id="inibro" style="display: inline-block; padding: 32px 64px 0px 64px; border: 1px solid #EEE;">
            <div class="center">
                <div style="font-size: 32px;">{{ __('Login') }}</div>
            </div>

            <form method="POST" class="col s12" action="{{ route('login') }}" aria-label="{{ __('Login') }}">
                @csrf

                <div class='row'>
                    <div class='col s12'>
                    </div>
                </div>

                <div class="row input-field">
                    <input id="email" type="email" class="validate" name="email" value="{{ old('email') }}" required>
                    <label for="email">{{ __('E-Mail Address') }}</label>
                </div>

                <div class="row input-field">
                    <input id="password" type="password" class="validate" name="password" value="{{ old('password') }}" required>
                    <label for="password">{{ __('Password') }}</label>
                </div>

                <div class="row input-field">
                    <p>
                        <label>
                            <input type="checkbox" class="filled-in" name="remember" value="{{ old('remember') ? 'checked' : '' }}">
                            <span>{{ __('Remember Me') }}</span>
                        </label>
                    </p>
                </div>

                <div class="row">
                    <button class="btn waves-effect waves-light" type="submit" name="action">{{ __('Login') }}</button>
                    <span class="valign-wrapper right">Lupa password ? <br><a href="{{ route('password.request') }}">Reset Password</a></span>
                </div>
            </form>
        </div>
    </div>
    <div class="hide-on-med-and-up">
        <nav class="navbar-fixed-top teal z-depth-0">
            <div class="nav-wrapper">
                <div class="nav-title center-align" style="display: block; padding: 0;">Login</div>
            </div>
        </nav>
        <div class="section"></div>
        <div class="container">
            <form method="POST" class="col s12" action="{{ route('login') }}" aria-label="{{ __('Login') }}">
                @csrf

                <div class='row'>
                    <div class='col s12'>
                    </div>
                </div>

                <div class="row input-field">
                    <input id="email" type="email" class="validate" name="email" value="{{ old('email') }}" required>
                    <label for="email">{{ __('E-Mail Address') }}</label>
                </div>

                <div class="row input-field">
                    <input id="password" type="password" class="validate" name="password" value="{{ old('password') }}" required>
                    <label for="password">{{ __('Password') }}</label>
                </div>

                <div class="row input-field">
                    <p>
                        <label>
                            <input type="checkbox" class="filled-in" name="remember" value="{{ old('remember') ? 'checked' : '' }}">
                            <span>{{ __('Remember Me') }}</span>
                        </label>
                    </p>
                </div>

                <div class="row">
                    <button class="btn waves-effect waves-light" type="submit" name="action">{{ __('Login') }}</button>
                    <span class="valign-wrapper right">Lupa password ? <br><a href="{{ route('password.request') }}">Reset Password</a></span>
                </div>
            </form>
        </div>
    </div>
</main>
<!-- Footer -->
<footer class="footer-copyright">

</footer>
<script type="text/javascript" src="{{ asset('js/materialize.min.js') }}"></script>
<script>
    M.AutoInit();
</script>
<script>
    // Set the date we're counting down to
    let countDown = 9;
    let data = ["z-depth-5", "z-depth-4", "z-depth-3", "z-depth-2", "z-depth-1", "z-depth-0"];
    let i = 0;
    // Update the count down every 1 second
    let x = setInterval(function () {
        countDown--;
        // Output the result in an element with id="demo"
        if (countDown<5) {
            if ( document.getElementById("inibro").classList.contains(data[i]) ) {
                document.getElementById("inibro").classList.replace(data[i], data[i-1]);
            }
            i--;
        } else {
            if ( document.getElementById("inibro").classList.contains(data[i]) ) {
                document.getElementById("inibro").classList.replace(data[i], data[i+1]);
            }
            i++;
        }
        // If the count down is over, write some text
        if (countDown <= 0) {
            clearInterval(x);
            if ( document.getElementById("inibro").classList.contains(data[i]) ) {
                document.getElementById("inibro").classList.replace(data[i], "z-depth-5");
            }
        }
    }, 100);
</script>
</body>
</html>
