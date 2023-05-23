<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Forgot Password</title>
    <!-- Menghubungkan dengan CSS Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <style>
        /* Gaya khusus Anda */
        body {
            background-image: linear-gradient(25deg, #1712f4, #4c43ef, #6366ea, #7186e4);
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
        }
        .card {
            margin-top: 100px;
            border: none;
            border-radius: 8px;
            box-shadow: 0px 4px 16px rgba(0, 0, 0, 0.1);
        }
        .card-header {
            background-color: #007bff;
            color: #fff;
            text-align: center;
            font-size: 24px;
            font-weight: bold;
            padding: 20px 0;
            border-top-left-radius: 8px;
            border-top-right-radius: 8px;
        }
        .card-body {
            padding: 30px;
        }
        .form-group label {
            font-weight: bold;
        }
        .form-control {
            border-radius: 4px;
        }
        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
            font-weight: bold;
            width: 100%;
        }
        .btn-primary:hover {
            background-color: #0069d9;
            border-color: #0069d9;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">{{ __('Reset Password') }}</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <form method="POST" action="{{ route('password.email') }}">
                            @csrf

                            <div class="form-group">
                                <label for="email">{{ __('E-Mail Address') }}</label>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                @error('email')
                                    <div class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </div>
                                @enderror
                            </div>

                            <div class="form-group mb-0">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Send Password Reset Link') }}
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
