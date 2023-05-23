<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ asset('assets/css/loginreg.css') }}" />
    <title>Sign in / Sign up</title>
</head>

<body>
    <div class="container">
        <div class="forms-container">
            <div class="signin-signup">
                <form action="{{ route('postlogin') }}" method="post" class="sign-in-form">
                    {{ csrf_field() }}
                    <h2 class="title">Sign in</h2>
                    <div class="input-field">
                        <i class="fas fa-envelope"></i>
                        <input type="email" name="email" placeholder="Email" required />
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" name="password" placeholder="Password" required />
                    </div>
                    <input type="submit" value="Login" class="btn solid" />
                    <a href="/forgot-password">Forgot Password?</a>
                </form>
                <form action="{{ route('create') }}" method="post" class="sign-up-form">
                    {{ csrf_field() }}
                    <h2 class="title">Sign up</h2>
                    <div class="input-field">
                        <i class="fas fa-user"></i>
                        <input type="text" name="name" placeholder="Username" value="{{ old('name') }}"
                            required />
                    </div>
                    <div class="input-field">
                        <i class="fas fa-envelope"></i>
                        <input type="email" name="email" placeholder="Email" value="{{ old('email') }}" required />
                    </div>
                    <div class="input-field">
                        <i class="fas fa-lock"></i>
                        <input type="password" name="password" placeholder="Password" required />
                    </div>
                    <input type="submit" class="btn" value="Sign up" />
                </form>

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            </div>
        </div>

        <div class="panels-container">
            <div class="panel left-panel">
                <div class="content">
                    <h3>Belum memiliki akun?</h3>
                    <p>
                        Yuk, bikin akun sekarang dan nikmati pengalaman seru di website kita! Gak ribet, proses
                        registrasinya mudah banget! </p>
                    <button class="btn transparent" id="sign-up-btn">Sign up</button>
                </div>
                <img src="assets/img/signup.png" class="image" alt="" />
            </div>
            <div class="panel right-panel">
                <div class="content">
                    <h3>Sudah punya akun?</h3>
                    <p>
                        Login dan nikmati fitur hebat di website kita! Masuk ke akunmu sekarang dan rasakan keseruannya!
                    </p>
                    <button class="btn transparent" id="sign-in-btn">
                        Sign in
                    </button>
                </div>
                <img src="assets/img/signin.png" class="image" alt="" />
            </div>
        </div>
    </div>

    <script src="{{ asset('assets/js/loginreg.js') }}"></script>
</body>

</html>
